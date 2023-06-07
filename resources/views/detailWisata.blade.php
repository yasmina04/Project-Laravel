<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Destination</title>
    <script>src="https://cdn.tailwindcss.com"</script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @vite('resources/css/app.css')
</head>
<!-- Disable refresh form -->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<body>
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
                    <a class="px-4 py-2 mt-2 text-lg font-lato hover:bg-gray-200 hover:text-black hover:font-semibold active:underline rounded-lg nav-link " href="/Home" >HOME</a>
                    <a class="px-4 py-2 mt-2 text-lg font-lato hover:bg-gray-200 hover:text-black hover:font-semibold active:underline rounded-lg" href="#">DESTINATION</a>
                    <a class="px-4 py-2 mx-2 mt-2 text-lg font-lato text-white hover:bg-green-700  bg-green-900 rounded-lg active:underline" href="#"> LOG OUT</a>
                </nav>
            </div>
        </div>
    </header>

  <!-- gambar utama -->
<div class="container mx-auto bg-white">
  <div class="flex">
          <img class="w-full" src="/img/gunung.jpg"/>
  </div>

  <div class="flex py-5">
    <a href="/Home">
      <svg width="82" height="82" viewBox="0 0 82 82" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g filter="url(#filter0_dd_292_771)">
        <path d="M16 8C16 3.58172 19.5817 0 24 0L58 0C62.4183 0 66 3.58172 66 8V42C66 46.4183 62.4183 50 58 50H24C19.5817 50 16 46.4183 16 42L16 8Z" fill="white"/>
        <rect x="16" width="50" height="50" fill="url(#pattern0)"/>
        </g>
        <defs>
        <filter id="filter0_dd_292_771" x="0" y="0" width="82" height="82" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
        <feOffset dy="16"/>
        <feGaussianBlur stdDeviation="8"/>
        <feColorMatrix type="matrix" values="0 0 0 0 0.298039 0 0 0 0 0.376471 0 0 0 0 0.321569 0 0 0 0.08 0"/>
        <feBlend mode="color-burn" in2="BackgroundImageFix" result="effect1_dropShadow_292_771"/>
        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
        <feOffset dy="2"/>
        <feColorMatrix type="matrix" values="0 0 0 0 0.298039 0 0 0 0 0.376471 0 0 0 0 0.321569 0 0 0 0.08 0"/>
        <feBlend mode="color-burn" in2="effect1_dropShadow_292_771" result="effect2_dropShadow_292_771"/>
        <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_292_771" result="shape"/>
        </filter>
        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
        <use xlink:href="#image0_292_771" transform="scale(0.0104167)"/>
        </pattern>
        <image id="image0_292_771" width="96" height="96" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAACC0lEQVR4Xu2a7UnEQAAF33VgCZagFamdaCVqR3ZgCbYgCxc8DiNkPzIbmfspmpfMZMKBOcUPSuCErjseBcA3gQIUABOA5y1AATABeN4CFAATgOctQAEwAXjeAhQAE4DnLUABMAF43gIUABOA5y1AATABeN4CFAATgOctQAEwAXjeAhQAE4DnLUABMAF43gIUABOA5y1AATABeN4CFAATgOctQAEwAXh+rwLuknzA1zrl/B4CHpK8JXlO8jIlBfCkRgtY4C+XqIQr2SMFXMNfpu99HP1YGCVgDf7T+XEERj/X9AgBwt/guLcA4W+AX361pwDhb4TfU4DwK+D3EiD8Svg9BAi/AX6rAOE3wm8RsAa/wykd8hDVX2Zq//Azye0hUY056VqO1V9Dv5LcjLmWQx51dwGPSV4PiWrMSe8uoFzGmoTy8/cx1/n/jlpt7oxCCY33RKsAS5hAgBIaJPQoYJn3cVQhoqcAS5hAgBI2SuhdgI+jSQT8VYL/lL+QNKqAtRLKe0Hl1RQ/ZwKjBVyWIPxfbrs9BJRZX01caX4vAT5yFDDnPWABsBcFKAAmAM9bgAJgAvC8BSgAJgDPW4ACYALwvAUoACYAz1uAAmAC8LwFKAAmAM9bgAJgAvC8BSgAJgDPW4ACYALwvAUoACYAz1uAAmAC8LwFKAAmAM9bgAJgAvC8BSgAJgDPfwOzmjJhfvuO+gAAAABJRU5ErkJggg=="/>
        </defs>
      </svg>
    </a>


    <p class="font-bold mt-4">
      Kembali
    </p>

  </div>


  <div class="flex ml-2 lg:ml-8">
    <!-- Element gambar kiri -->
    <div class="relative flex container w-full">
      <img class=" relative w-full h-52 lg:h-96 lg:object-scale-down " src="{{ asset('storage/' . $tour->img)}}" >
    </div>

    <!-- Element teks kanan -->

    <div class="w-2/3">
      <h1 class="text-xl lg:text-3xl font-bold px-12">{{$tour->nama}}</h1>
      <div class="px-14 py-3">
      <button class="py-1 px-5 border border-green-800 rounded-2xl hover:bg-[#064635] hover:text-white">{{$tour->tipe}}</button>
      </div>

      <div class="flex px-11 items-center">
        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M22.5 39.375C20.1318 37.3549 17.9366 35.1404 15.9375 32.7544C12.9375 29.1713 9.375 23.835 9.375 18.75C9.3737 16.1531 10.1428 13.6141 11.5851 11.4544C13.0273 9.29478 15.0778 7.6115 17.477 6.61764C19.8762 5.62378 22.5164 5.364 25.0633 5.87119C27.6103 6.37838 29.9495 7.62974 31.785 9.46689C33.007 10.6835 33.9757 12.1304 34.6348 13.7238C35.2939 15.3173 35.6305 17.0256 35.625 18.75C35.625 23.835 32.0625 29.1713 29.0625 32.7544C27.0634 35.1403 24.8682 37.3549 22.5 39.375ZM22.5 13.125C21.0082 13.125 19.5774 13.7177 18.5225 14.7725C17.4676 15.8274 16.875 17.2582 16.875 18.75C16.875 20.2419 17.4676 21.6726 18.5225 22.7275C19.5774 23.7824 21.0082 24.375 22.5 24.375C23.9918 24.375 25.4226 23.7824 26.4775 22.7275C27.5324 21.6726 28.125 20.2419 28.125 18.75C28.125 17.2582 27.5324 15.8274 26.4775 14.7725C25.4226 13.7177 23.9918 13.125 22.5 13.125Z" fill="#B6B6B6"/>
        </svg>
        <p class="my-7">
        {{$tour->lokasi}}
        </p>
      </div>

      <p class="px-14 font-medium text-justify">
        <!-- Tiu Kelep Waterfall is located in Senaru Village, North Lombok  -->
        <!-- Regency, West Nusa Tenggara. This 42-meter-tall waterfall is  -->
        <!-- located at the foot of Mount Rinjani and adjacent to  -->
        <!-- the Sendang Gile Waterfall.  -->
        {{$tour->ket}}
      </p>

      <p class="px-14 font-bold text-xl lg:text-2xl my-5">Get the location</p>

      <div class="px-14">
      <a href="{{$tour->maps}}" class="flex bg-[#064635] hover:bg-[#063000] justify-center py-1.5 rounded-md">
                <img height="20" width="20" src="/img/site_icon.png" alt="">
                <p class="font-semibold text-white px-2">Site Map</p>
            </a>

      </div>
    </div>
  </div>

  <div class="container  w-2/3 py-2 px-3">
    <p class="ml-8 font-bold py-3 text-lg mr-8">
      Details
    </p>

    <p class="ml-8 font-medium text-justify text-inherit">
        {{$tour->detail}}
    </p>
  </div>



  <div class="ml-8 flex items-center">
      <p class="font-bold py-3 text-lg mr-1.5">
        Ulasan
      </p>
      <p class="font-bold py-3 text-sm">
        {{($tour->total_ulasan)}}
      </p>
  </div>

  <div class=" ml-8 container mx-auto">
        <div class="grid grid-cols-2 gap-5 my-5  md:grid-cols-3 lg:grid-cols-4">
            @forelse ( $review as $r)
            <article class="overflow-hidden rounded-lg shadow-lg w-44 mx-auto md:w-56 lg:w-60 px-3 py-3">
                <div class="flex mt-3 mb-3">
                    <div>
                        <img class="mr-3" src="/img/profile_round.png" alt="profile image">
                    </div>

                    <div>
                        <p>{{ $r["nama_user"]}}</p>

                        <div class="flex items-center justify-center">
                            <div class="w-1/2">
                                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.04894 0.927049C5.3483 0.00573826 6.6517 0.00573993 6.95106 0.927051L7.5716 2.83688C7.70547 3.2489 8.08943 3.52786 8.52265 3.52786H10.5308C11.4995 3.52786 11.9023 4.76748 11.1186 5.33688L9.49395 6.51722C9.14347 6.77187 8.99681 7.22323 9.13068 7.63525L9.75122 9.54508C10.0506 10.4664 8.9961 11.2325 8.21238 10.6631L6.58778 9.48278C6.2373 9.22813 5.7627 9.22814 5.41221 9.48278L3.78761 10.6631C3.0039 11.2325 1.94942 10.4664 2.24878 9.54508L2.86932 7.63526C3.00319 7.22323 2.85653 6.77186 2.50604 6.51722L0.881445 5.33688C0.0977311 4.76748 0.500508 3.52786 1.46923 3.52786H3.47735C3.91057 3.52786 4.29453 3.2489 4.4284 2.83688L5.04894 0.927049Z" fill="#FFA41C"/>
                                </svg>
                            </div>

                            <div class="w-1/2">
                                <p>
                                    {{ $r["rating"]}}
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <p>{{ $r["komentar"]}}</p>
            </article>
            @empty
            <p class="italic mx-auto text-sm font-poppins font-thin font- text-gray-400">Data Not Found......</p>


            @endforelse
        </div>

    </div>
  {{ $review->links() }}













  <!-- @forelse ($review as $r)
  <div class="flex mb-10 border">
    <div class="flex rounded shadow-sm shadow-gray-300 px-3 py-3 mr-3">
      <p>{{ $r["id_wisata"]}}

      <div class="flex mt-3">
        <div>
          <img class="mr-3" src="/img/profile_round.png" alt="profile image">
        </div>

        <div>
        <p>Name of User</p>
        <svg width="96" height="16" viewBox="0 0 96 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M87.0489 2.92705C87.3483 2.00574 88.6517 2.00574 88.9511 2.92705L89.5716 4.83688C89.7055 5.2489 90.0894 5.52786 90.5227 5.52786H92.5308C93.4995 5.52786 93.9023 6.76748 93.1186 7.33688L91.494 8.51722C91.1435 8.77187 90.9968 9.22323 91.1307 9.63525L91.7512 11.5451C92.0506 12.4664 90.9961 13.2325 90.2124 12.6631L88.5878 11.4828C88.2373 11.2281 87.7627 11.2281 87.4122 11.4828L85.7876 12.6631C85.0039 13.2325 83.9494 12.4664 84.2488 11.5451L84.8693 9.63526C85.0032 9.22323 84.8565 8.77186 84.506 8.51722L82.8814 7.33688C82.0977 6.76748 82.5005 5.52786 83.4692 5.52786H85.4773C85.9106 5.52786 86.2945 5.2489 86.4284 4.83688L87.0489 2.92705Z" fill="#C4C4C4"/>
          <path d="M67.0489 2.92705C67.3483 2.00574 68.6517 2.00574 68.9511 2.92705L69.5716 4.83688C69.7055 5.2489 70.0894 5.52786 70.5227 5.52786H72.5308C73.4995 5.52786 73.9023 6.76748 73.1186 7.33688L71.494 8.51722C71.1435 8.77187 70.9968 9.22323 71.1307 9.63525L71.7512 11.5451C72.0506 12.4664 70.9961 13.2325 70.2124 12.6631L68.5878 11.4828C68.2373 11.2281 67.7627 11.2281 67.4122 11.4828L65.7876 12.6631C65.0039 13.2325 63.9494 12.4664 64.2488 11.5451L64.8693 9.63526C65.0032 9.22323 64.8565 8.77186 64.506 8.51722L62.8814 7.33688C62.0977 6.76748 62.5005 5.52786 63.4692 5.52786H65.4773C65.9106 5.52786 66.2945 5.2489 66.4284 4.83688L67.0489 2.92705Z" fill="#FFA41C"/>
          <path d="M47.0489 2.92705C47.3483 2.00574 48.6517 2.00574 48.9511 2.92705L49.5716 4.83688C49.7055 5.2489 50.0894 5.52786 50.5227 5.52786H52.5308C53.4995 5.52786 53.9023 6.76748 53.1186 7.33688L51.494 8.51722C51.1435 8.77187 50.9968 9.22323 51.1307 9.63525L51.7512 11.5451C52.0506 12.4664 50.9961 13.2325 50.2124 12.6631L48.5878 11.4828C48.2373 11.2281 47.7627 11.2281 47.4122 11.4828L45.7876 12.6631C45.0039 13.2325 43.9494 12.4664 44.2488 11.5451L44.8693 9.63526C45.0032 9.22323 44.8565 8.77186 44.506 8.51722L42.8814 7.33688C42.0977 6.76748 42.5005 5.52786 43.4692 5.52786H45.4773C45.9106 5.52786 46.2945 5.2489 46.4284 4.83688L47.0489 2.92705Z" fill="#FFA41C"/>
          <path d="M27.0489 2.92705C27.3483 2.00574 28.6517 2.00574 28.9511 2.92705L29.5716 4.83688C29.7055 5.2489 30.0894 5.52786 30.5227 5.52786H32.5308C33.4995 5.52786 33.9023 6.76748 33.1186 7.33688L31.494 8.51722C31.1435 8.77187 30.9968 9.22323 31.1307 9.63525L31.7512 11.5451C32.0506 12.4664 30.9961 13.2325 30.2124 12.6631L28.5878 11.4828C28.2373 11.2281 27.7627 11.2281 27.4122 11.4828L25.7876 12.6631C25.0039 13.2325 23.9494 12.4664 24.2488 11.5451L24.8693 9.63526C25.0032 9.22323 24.8565 8.77186 24.506 8.51722L22.8814 7.33688C22.0977 6.76748 22.5005 5.52786 23.4692 5.52786H25.4773C25.9106 5.52786 26.2945 5.2489 26.4284 4.83688L27.0489 2.92705Z" fill="#FFA41C"/>
          <path d="M7.04894 2.92705C7.3483 2.00574 8.6517 2.00574 8.95106 2.92705L9.5716 4.83688C9.70547 5.2489 10.0894 5.52786 10.5227 5.52786H12.5308C13.4995 5.52786 13.9023 6.76748 13.1186 7.33688L11.494 8.51722C11.1435 8.77187 10.9968 9.22323 11.1307 9.63525L11.7512 11.5451C12.0506 12.4664 10.9961 13.2325 10.2124 12.6631L8.58778 11.4828C8.2373 11.2281 7.7627 11.2281 7.41221 11.4828L5.78761 12.6631C5.0039 13.2325 3.94942 12.4664 4.24878 11.5451L4.86932 9.63526C5.00319 9.22323 4.85653 8.77186 4.50604 8.51722L2.88144 7.33688C2.09773 6.76748 2.50051 5.52786 3.46923 5.52786H5.47735C5.91057 5.52786 6.29453 5.2489 6.4284 4.83688L7.04894 2.92705Z" fill="#FFA41C"/>
        </svg>

        </div>

      </div>
    </div>
    @empty
    <p class="italic mx-auto text-sm font-poppins font-thin font- text-gray-400">Data Not Found......</p>
    @endforelse

  </div>-->

  <div class="ml-8 container mx-auto">
  <p class="font-bold py-3 text-lg">
    Tulis Ulasan
  </p>

  <form action="/detail/{{$tour->id}}/{{$tour->nama}}" method="post">
    @csrf
    <div class="rounded px-10 py-10 mb-10 shadow-green-950 shadow-sm border">
        <div class="flex w-full">
            <div class="flex w-1/2 items-center">
                <img class="mr-3" src="/img/profile_round.png" alt="profile picture">
                <p>
                Name of User
                </p>
            </div>

            <div class="rating rating-xs flex w-1/2 justify-end items-center" >
                <label for="rating"></label><br>
                @error('rating')
                <div class="alert alert-warning">{{$message}}</div>
                @enderror
                <input value="1.0" type="radio" name="rating" class="mask mask-star-2 bg-orange-400" checked />
                <input value="2.0" type="radio" name="rating" class="mask mask-star-2 bg-orange-400"/>
                <input value="3.0" type="radio" name="rating" class="mask mask-star-2 bg-orange-400" />
                <input value="4.0" type="radio" name="rating" class="mask mask-star-2 bg-orange-400" />
                <input value="5.0" type="radio" name="rating" class="mask mask-star-2 bg-orange-400" />
                <label for="rating"></label><br>
            </div>
        </div>

        <label for="komentar"></label><br>
        @error('komentar')
        <div class="alert alert-warning">{{$message}}</div>
        @enderror
        <textarea id="" name="komentar" rows="4"
        class="block w-full p-2.5 my-7 text-sm text-gray-900
        bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500
        dark:border-black dark:placeholder-black dark:text-black dark:focus:ring-blue-500
        dark:focus:border-blue-500" placeholder="Beri Ulasan..."></textarea>

        <div class="flex justify-end">
            <button class="py-1 px-5 border bg-[#064635] rounded-md hover:bg-[#063000] hover:text-white text-white">Kirim</button>
        </div>
    </div>
  </form>
  </div>



</div>

@if(session()->has('sukses'))
<script>
    var msg = '{{Session:get('sukses')}}';
    alert(msg);
</script>
@endif

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
</body>
</html>
