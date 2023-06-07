<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>Document</title>
</head>
<body>
    <!-- navbar -->
<header>
    <div class="w-full text-green-700 bg-white font-lato ">
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
            <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                <a class="px-4 py-2 mt-2 text-lg font-lato hover:bg-gray-200 hover:text-black hover:font-semibold active:underline rounded-lg nav-link {{ ($title == "Home") ? 'active' : ''}}" href="/dashboardAdmin" >HOME</a>
                <a class="px-4 py-2 mt-2 text-lg font-lato hover:bg-gray-200 hover:text-black hover:font-semibold active:underline rounded-lg" href="/createwisata">POST</a>
                {{-- <a class="px-4 py-2 mt-2 text-lg font-lato hover:bg-gray-200 hover:text-black hover:font-semibold active:underline rounded-lg" href="#">Login</a>
                <a class="px-4 py-2 mt-2 text-lg font-lato hover:bg-gray-200 hover:text-black hover:font-semibold active:underline rounded-lg" href="#">Register</a> --}}
                <a class="px-4 py-2 mx-2 mt-2 text-lg font-lato text-white hover:bg-green-700  bg-green-900 rounded-lg active:underline" href="#"> Sign Out</a>
            </nav>
        </div>
    </div>
</header>

<body>

<h2 class="text-center text-green-800 font-semibold font-poppins text-xl">Input Data Wisata</h2>


    <div class="container mx-auto my-10 ">
        <form class="flex justify-center items-center" method="POST" >
            @csrf

            <div class="mb-6 ">
              <label for="nama" class="block mb-2 text-sm font-medium">Nama Tempat Wisata</label>
              <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-72 p-2.5" type="text" name="nama" class="form-control" value="{{ isset($data)?$data->nama:'' }}"   required>

              <label for="ket" class="block mb-2 text-sm font-medium">Keterangan Tempat Wisata</label>
              <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-72 p-2.5" type="text" name="ket" class="form-control" value="{{ isset($data)?$data->ket:'' }}"   required>

              <label for="lokasi" class="block mb-2 text-sm font-medium">Lokasi Tempat Wisata</label>
              <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-72 p-2.5" type="text" name="lokasi" class="form-control" value="{{ isset($data)?$data->lokasi:'' }}"   required>

              <label for="tipe" class="block mb-2 text-sm font-medium">Tipe</label>
              <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-72 p-2.5" type="text" name="tipe" class="form-control" value="{{ isset($data)?$data->tipe:'' }}"   required>
              {{-- <select id="tipe" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72 p-2.5">
                <option selected>Pilih tipe wisata</option>
                <option value="Beaches">Beaches</option>
                <option value="Deserts">Deserts</option>
                <option value="Mountains">Mountains</option>
                <option value="Waterfall">Waterfall</option>
                <option value="Houseboats">Houseboats</option>
                <option value="Countryside">Countryside</option>
                <option value="Camping">Camping</option>
                <option value="Tropical">Tropical</option>
              </select> --}}

              {{-- <label class="block mb-2 text-sm font-medium text-gray-900 " for="file_input">Upload Gambar</label>
                <input class="block w-72  text-sm  jus text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " aria-describedby="file_input_help" id="file_input" type="file">
                <p class="mt-1 text-sm text-gray-500 " id="file_input_help">Format berbentuk SVG, PNG, atau JPG.</p> --}}

              <button type="submit" class="text-white bg-green-900 hover:bg-green-700 focus:ring-4 my-8 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
            </div>
          </form>
    </div>
</body>
</html>

</div>

</body>
</html>
