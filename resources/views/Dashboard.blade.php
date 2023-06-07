<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
  <title>GoTravelling | {{ $title }}</title>
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




<!-- gambar utama -->
<div class="container my-5 justify-center px-8 py-5 mx-auto">
    <div class="relative overflow-hidden">
        <img class="object-cover w-full h-full" src="{{ URL('images/gunung.jpg') }} "/>
    </div>
</div>



<!-- search bar -->
<form action="/Home/search" method="GET" class="ml-8 ">
    @csrf
    <div class="flex flex-wrap ">
        <div class="w-80 md:w-1/2 px-3 mb-6 md:mb-0 justify-items-start">
            <label class="block uppercase tracking-wide text-black text-xs font-bold mb-2" for="grid-first-name">
                Lokasi Wisata
            </label>
            <input class=" bg-gray-50 border text-green-900 text-sm rounded-lg appearance-none block w-80 lg:w-full  border-gray-300 py-3 px-4 mb-3 " name="nama" type="text" placeholder="Where are you going ?" value="{{isset($_GET['nama']) ? $_GET['nama'] : ''}}">

            </div>
        <div class="w-80 md:w-1/2 px-3 mb-6 md:mb-0 justify-items-start">
            <label class="block uppercase tracking-wide text-black text-xs font-bold mb-2" for="grid-first-name">
                Tipe Wisata
            </label>
            <select id="tipe" name="tipe" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  w-80 lg:w-80 py-3 px-4"     >
                <option value="" >Pilih tipe wisata</option>
                <option  @if (request()->get('tipe')== 'Beaches') selected @endif value="Beaches" >Beaches</option>
                <option @if (request()->get('tipe') == 'Deserts') selected @endif value="Deserts">Deserts</option>
                <option @if (request()->get('tipe')== 'Mountains') selected @endif value="Mountains">Mountains</option>
                <option @if (request()->get('tipe') == 'Waterfall') selected @endif value="Waterfall">Waterfall</option>
                <option @if (request()->get('tipe') == 'Houseboats') selected @endif value="Houseboats">Houseboats</option>
                <option @if (request()->get('tipe') == 'Countryside') selected @endif value="Countryside">Countryside</option>
                <option @if (request()->get('tipe') == 'Camping') selected @endif value="Camping">Camping</option>
                <option @if (request()->get('tipe') == 'Tropica') selected @endif value="Tropical">Tropical</option>

            </select>
            <button type="submit" class=" mt-5 justify-items-start lg:ml-10 lg:mt-0 bg-green-700 rounded-xl text-white px-6 py-3" >Search</button>

        </div>

  </div>

</form>





    <div class=" container ">
        <div class="grid grid-cols-2 gap-5 my-5  md:grid-cols-3 lg:grid-cols-4 ">
                @forelse ( $tour as $t)
                <article class="overflow-hidden rounded-lg shadow-lg w-44 mx-auto md:w-56 lg:w-60">
                    <a >
                        <img  class="relative w-full h-44 md:h-56 lg:h-70 object-fit lg:object-cover" src="{{ asset('storage/' . $t->img)}}">
                    </a>

                    <header class="flex items-center justify-between leading-tight p-2 md:p-4 ">
                        <span class="inline-flex mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-green-700 items-start" fill="none"  stroke-width="1.5"  viewBox="0 0 24 24"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0z"/></svg>
                            <a class="font-lato text-sm mx-auto text-green-700">{{ $t["lokasi"]}}</a>
                        </span>
                        <span class=" text-sm inline-flex">
                            <svg xmlns="http://www.w3.org/2000/svg"  stroke-width="1.5" class="w-5 h-5 justify-end fill-yellow-400" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.563.563 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.563.563 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5z"/></svg>
                        <a>{{ $t["total_rating"]}}</a>
                        </span>

                    </header>

                        <p class="font-bold ml-5 mb-1 text-sm lg:text-lg md:text-lg">{{ $t["nama"]}}</p>
                        <p class="ml-5 text-gray-500 text-xs mb-1 ">{{ $t["ket"]}}</p>

                    <footer class="flex justify-end sm:p-2 md:p-4">
                        <span class="inline-flex">
                                <a class="text-xs text-gray-500 mr-2 lg:text-sm" href="/detail/{{$t->id}}/{{$t->nama}}">View more</a>
                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" stroke-width="1.5"  class="w-3 h-5 mr-2 lg:w-5 lg:h-6 stroke-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </span>
                    </footer>
                </article>
                @empty
                <p class="italic mx-auto text-sm font-poppins font-thin font- text-gray-400">Data Not Found......</p>


               @endforelse
        </div>

    </div>
  {{ $tour->links() }}


    <h1 class="text-center text-2xl font-poppins mt-20 my-3 md:text-4xl lg:text-5xl">
        <span class="font-semibold"> The</span>
        <span class="font-semibold text-green-800">best place</span>
        <span class="font-semibold">for vacation</span>
    </h1>

    <ul class="flex justify-center  text-sm md:text-lg lg:text-xl">

        <li class="mr-6">
            <a class="text-gray-500  hover:text-black active:text-black active:underline decoration-green-600 font-poppins" href="/populer">Populer</a>
        </li>
        <li class="mr-6">
            <a class="text-gray-500  hover:text-black active:text-black active:underline decoration-green-600 font-poppins" href="/rekomendasi">Recommendation</a>
        </li>

    </ul>


    <div class=" container mx-auto ">
        <div class="grid grid-cols-2 gap-5 my-5  md:grid-cols-3 lg:grid-cols-4 ">
        @foreach($data as $d)
            <article class="overflow-hidden rounded-lg shadow-lg w-44 mx-auto lg:w-60">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ asset('storage/' . $d->img)}}">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4 ">
                    <span class="inline-flex mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-green-700 items-start" fill="none"  stroke-width="1.5"  viewBox="0 0 24 24"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0z"/></svg>
                        <a class="font-lato text-sm mx-auto text-green-700">{{ $d->lokasi }}</a>
                    </span>
                    <span class=" text-sm inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg"  stroke-width="1.5" class="w-5 h-5 justify-end fill-yellow-400" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.563.563 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.563.563 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5z"/></svg>
                       <a>{{ $d->total_rating }}</a>
                    </span>

                </header>

                    <p class="font-bold ml-5 mb-1 text-sm lg:text-lg md:text-lg">{{ $d->nama }}</p>
                    <p class="ml-5 text-gray-500 text-xs mb-1 ">{{ $d->keterangan }}</p>

                <footer class="flex justify-end sm:p-2 md:p-4">
                    <span class="inline-flex">

                            <a class="text-xs text-gray-500 mr-2 lg:text-sm" href="/detail/{{$d->id}}/{{$d->nama}}">View more</a>
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" stroke-width="1.5"  class="w-3 h-5 mr-2 lg:w-5 lg:h-6 stroke-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </span>
                </footer>
            </article>
        @endforeach
        </div>
  </div>

    <h1 class="font-bold text-2xl mt-10 ml-8 md:text-3xl lg:text-3xl"> Events</h1>

    <!-- Slider Component -->

    <div class="w-full garis-merah  flex gap-10 overflow-x-auto mt-10 ml-8">
        <!-- Component Events -->
        @foreach($list as $d)
        <div class="w-[420px]">
            <!-- Image and Judul -->
            <a href="/detailEvent/{{$d->id}}">
            <div class="w-[420px] h-[362px] rounded-xl bg-[#71C3FD] relative">

                <!-- Judul -->
                <p class="pl-5 pt-5 text-xl font-bold text-white hover:text-black" href="/detail"> {{ $d->tanggal }}</p>

                <!-- Image Container -->
                <div class="w-[372px] h-[296px] absolute right-0 bottom-0">
                    <img class="w-full h-full" src="{{ asset($d->img) }} " alt="ss">
                </div>
            </div>
            </a>
            <!-- Description -->
            <div class="mt-4 p-2">
                <p class="mb-4 text-lg font-bold">{{ $d->judul }}</p>
                <p>{{ $d->detail }}</p>
            </div>
        </div>
        @endforeach
    </div>
    {{$list->links()}}
</body>

<!-- Footer container -->
<footer
  class="bg-neutral-100 text-center text-neutral-600 dark:bg-neutral-600 dark:text-neutral-200 lg:text-left">
  <!-- Main container div: holds the entire content of the footer, including four sections (Tailwind Elements, Products, Useful links, and Contact), with responsive styling and appropriate padding/margins. -->
  <div class="mx-6 py-10 text-center md:text-left">
    <div class="grid-1 grid gap-8 md:grid-cols-2 lg:grid-cols-4">
      <!-- Tailwind Elements section -->
      <div class="">
        <h6
          class="mb-4 flex items-center justify-center font-semibold uppercase md:justify-start">
          <div class="">
                <img src="{{ URL('images/gunung.jpg') }} " , alt="logo", class="logo" width="200px">
            </div>
        </h6>
        <p class="text-justify">
          GoTravelling merupakan aplikasi penyedia informasi tempat wisata yang berfokus pada wisata-wisata.Tujuan dari pembuatan aplikasi ini adalah untuk memenuhi kebutuhan user yang ingin mengetahui informasi mengenai wisata-wisata yang ada di Lombok.
        </p>
      </div>
      <!-- Products section -->
      <div class="">
        <h6
          class="mb-4 flex justify-center font-semibold uppercase md:justify-start ml-4">
          Products
        </h6>
        <p class="mb-4 ml-4">
          <a href="#!" class="text-neutral-600 dark:text-neutral-200"
            >Travelling</a
          >
        </p>
        <p class="mb-4 ml-4">
          <a href="#!" class="text-neutral-600 dark:text-neutral-200"
            >Destination</a
          >
        </p>
        <p class="mb-4 ml-4">
          <a href="#!" class="text-neutral-600 dark:text-neutral-200"
            >Holiday</a
          >
        </p>
        <p>
          <a href="#!" class="text-neutral-600 dark:text-neutral-200 ml-4"
            >tour</a
          >
        </p>
      </div>
      <!-- Our Teams Section -->
      <div class="">
        <h6
          class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
          Our Teams
        </h6>
        <p class="mb-4">
          <a href="https://www.instagram.com/rfly.muhammad/" class="text-neutral-600 dark:text-neutral-200"
            >Famardi Putra Muhammad Raffly</a
          >
        </p>
        <p class="mb-4">
          <a href="https://www.instagram.com/brillyma/" class="text-neutral-600 dark:text-neutral-200"
            >Brillyando Magathan Achmad</a
          >
        </p>
        <p class="mb-4">
          <a href="https://www.instagram.com/yasminaaapp/" class="text-neutral-600 dark:text-neutral-200"
            >Fijar Yasmina Pritama</a
          >
        </p>
        <p class="mb-4">
          <a href="https://www.instagram.com/mdknu/" class="text-neutral-600 dark:text-neutral-200"
            >I Made Mahadika Putera Kanu</a
          >
        </p>

        <p>
          <a href="https://www.instagram.com/andika.soni/" class="text-neutral-600 dark:text-neutral-200"
            >Soni Andika Gutama</a
          >
        </p>
      </div>
      <!-- Contact section -->
      <div>
        <h6
          class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
          Contact
        </h6>
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="mr-3 h-5 w-5">
            <path
              d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
            <path
              d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
          </svg>
          Jl. Telekomunikasi. 1
        </p>
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="mr-3 h-5 w-5">
            <path
              d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
            <path
              d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
          </svg>
          telkomuniversity.ac.id
        </p>
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="mr-3 h-5 w-5">
            <path
              fill-rule="evenodd"
              d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
              clip-rule="evenodd" />
          </svg>
          (022) 7564108
        </p>
        <div class="flex justify-content-center">
        <a href="https://www.facebook.com/muhammad.raffly.14?mibextid=ZbWKwL" class="mr-6 text-neutral-600 dark:text-neutral-200">
            <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4"
            fill="currentColor"
            viewBox="0 0 24 24">
            <path
                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
            </svg>
        </a>
        <a href="https://twitter.com/smbtelkom?s=20" class="mr-6 text-neutral-600 dark:text-neutral-200">
            <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4"
            fill="currentColor"
            viewBox="0 0 24 24">
            <path
                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
            </svg>
        </a>
        <a href="https://www.instagram.com/smbtelkom/" class="mr-6 text-neutral-600 dark:text-neutral-200">
            <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4"
            fill="currentColor"
            viewBox="0 0 24 24">
            <path
                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
            </svg>
        </a>
        </a>
        </div>
      </div>
    </div>
  </div>
</footer>
</html>
