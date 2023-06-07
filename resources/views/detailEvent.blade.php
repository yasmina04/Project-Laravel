<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <title>Events</title>
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
                    <a class="px-4 py-2 mt-2 text-lg font-lato hover:bg-gray-200 hover:text-black hover:font-semibold active:underline rounded-lg" href="/Home">HOME</a>

                    <a class="px-4 py-2 mx-2 mt-2 text-lg font-lato text-white hover:bg-green-700  bg-green-900 rounded-lg active:underline" href="#"> Sign Out</a>
                </nav>
            </div>
        </div>
    </header>




    <!-- gambar utama -->
    <div class=" my-5 justify-center px-8 py-5 mx-auto">
        <div class="relative overflow-hidden">
            <img class="object-cover w-full h-full" src="{{ URL('images/gunung.jpg') }} "/>
        </div>
    </div>

    <a href="/Home" class="my-5 px-8 py-5 font-bold font-poppins hover:text-gray-400">
    ← kembali
    </a></br></br>

    <h1 class="text-3xl font-bold my-5 px-8 py-5 font-Poppins">Event</h1>
    <img src="{{ asset($list->img) }}" class="object-cover w-full h-full my-5 px-8 py-5 mx-auto justify-center">
    <h1 class="my-5 px-8 py-5 font-bold text-3xl">{{ $list->judul }}</h1>
    <!--<div class="content flex py-2">
            <img class="my-5 right-[60px] left-[60px] w-[45px] h-[45px] " src="{{ URL('images/lokasi.png') }}" alt="">
            <div class="item-body px-2 ">
                Central Lombok, Pantai Kuta Seger
            </div>
    </div>-->
    <div class="flex my-5 px-8 items-center">
        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M22.5 39.375C20.1318 37.3549 17.9366 35.1404 15.9375 32.7544C12.9375 29.1713 9.375 23.835 9.375 18.75C9.3737 16.1531 10.1428 13.6141 11.5851 11.4544C13.0273 9.29478 15.0778 7.6115 17.477 6.61764C19.8762 5.62378 22.5164 5.364 25.0633 5.87119C27.6103 6.37838 29.9495 7.62974 31.785 9.46689C33.007 10.6835 33.9757 12.1304 34.6348 13.7238C35.2939 15.3173 35.6305 17.0256 35.625 18.75C35.625 23.835 32.0625 29.1713 29.0625 32.7544C27.0634 35.1403 24.8682 37.3549 22.5 39.375ZM22.5 13.125C21.0082 13.125 19.5774 13.7177 18.5225 14.7725C17.4676 15.8274 16.875 17.2582 16.875 18.75C16.875 20.2419 17.4676 21.6726 18.5225 22.7275C19.5774 23.7824 21.0082 24.375 22.5 24.375C23.9918 24.375 25.4226 23.7824 26.4775 22.7275C27.5324 21.6726 28.125 20.2419 28.125 18.75C28.125 17.2582 27.5324 15.8274 26.4775 14.7725C25.4226 13.7177 23.9918 13.125 22.5 13.125Z" fill="#B6B6B6"/>
        </svg>
        <p class="my-5">
        {{ $list->lokasi }}
        </p>
      </div>

    <h1 class="text-3xl font-bold my-5 px-8 py-5 font-Poppins">Details</h1>
    <p class="my-5 px-8 py-5">{{ $list->detail }}</p>


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
