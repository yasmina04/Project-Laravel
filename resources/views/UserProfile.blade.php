<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
  @vite('resources/css/app.css')
  <script>
    tailwind.config = {
      theme: {
      }
    }
  </script>
</head>
<body>
    <!-- navbar -->
<header>
    <div class=" w-full text-green-700 bg-white font-lato ">
        <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="p-4 flex flex-row items-center justify-between">
                <img src="{{ URL('images/logo.jpg') }}" class="h-10 mr-3 sm:h-9 " />
                <a href="#" class="tracking-widest text-lg font-lato text-zinc-500 ">GoTravelling</a>
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}" class="sticky top-0 flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                <a class="px-4 py-2 mt-2 text-lg font-lato hover:bg-gray-200 hover:text-black hover:font-semibold active:underline rounded-lg nav-link " href="/Home" >HOME</a>
                <a class="px-4 py-2 mt-2 text-lg font-lato hover:bg-gray-200 hover:text-black hover:font-semibold active:underline rounded-lg" href="/UserProfile/1">PROFILE</a>
                <a class="px-4 py-2 mx-2 mt-2 text-lg font-lato text-white hover:bg-green-700  bg-green-900 rounded-lg active:underline" href="#"> LOG OUT</a>
            </nav>
        </div>
    </div>
</header>
  <section>
  </section>

  <section class="mx-auto font-semibold">
  <div class="ml-10 text-center text-xl text-green-700">UserProfile</div>
  </section>

  <section>
    <div class="max-w-lg broder border-slate200 rounded-xl mx-auto shadow-md p-5">
      <form method="post" enctype="multipart/form-data">
        @csrf
        <div>



            <img class="w-40 h-40 bg-slate-500 mx-auto mt-[42px] rounded-full" src="{{ asset($data->foto) }}">


        </div>
        <label for="foto">
          <span class="block font-semibold mb-1 text-slate-700">Foto</span>
          <input name='foto' type="file" value="{{ isset($data)?$data->foto:'' }}" id="foto"
          class="form-control px-3 py-2 broder shadow rounded w-full bloack text-sm
          placeholder:text-slate-400
          focus:outline-none focus:ring-1
          focus:ring-green-700 focus:border-green-900">
        </label>

        <label for="username">
          <span class="block font-semibold mb-1 text-slate-700">Username</span>
          <input name="username" type="username" id="username"
          placeholder="{{ isset($data)?$data->username:''}}"
          class="px-3 py-2 broder shadow rounded w-full bloack text-sm
          placeholder:text-slate-400
          focus:outline-none focus:ring-1
          focus:ring-green-700 focus:border-green-900">
        </label>
        <label for="gender">
          <span class="block font-semibold mb-1 text-slate-700">Gender</span>
            <div class="form-check form-check-inline">
                <label for="gender">
                  <input type="radio" name="gender" value="L" id="gender" {{ ($data->gender=="L")? "checked" : "" }} >Laki-Laki
                  <input type="radio" name="gender" value="P" id="gender" {{ ($data->gender=="P")? "checked" : "" }} >Perempuan
                </label>
            </div>
        </label>
        <label for="email">
          <spam class="block font-semibold mb-1 text-slate-700">Email</span>
          <input name='email' type="email" id="email"
          placeholder="{{ isset($data)?$data->email:''}}"
          class="px-3 py-2 broder shadow rounded w-full bloack text-sm
          placeholder:text-slate-400
          focus:outline-none focus:ring-1
          focus:ring-green-700 focus:border-green-900">
        </label>
        <label for="password">
          <spam class="block font-semibold mb-1 text-slate-700">Password</span>
          <input name='password' type="password" id="password"
          placeholder= "..."
          class="px-3 py-2 broder shadow rounded w-full bloack text-sm
          placeholder:text-slate-400
          focus:outline-none focus:ring-1
          focus:ring-green-700 focus:border-green-900">
        </label>
        <button type='submit' class="my-10 bg-green-700 px-5 py-2 rounded-full text-white font-semibold block mx-auto hover:bg-green-900 active:bg-green-700"> Simpan </button>
      </form>
    </div>
  </section>

</body>
</html>
