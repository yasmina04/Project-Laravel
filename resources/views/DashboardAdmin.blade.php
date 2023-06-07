
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

  <title>GoTravelling | {{ $title }}</title>
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
                <a class="px-4 py-2 mt-2 text-lg font-lato hover:bg-gray-200 hover:text-black hover:font-semibold active:underline rounded-lg nav-link"  href="/dashboardAdmin" >HOME</a>
                <a class="px-4 py-2 mt-2 text-lg font-lato hover:bg-gray-200 hover:text-black hover:font-semibold active:underline rounded-lg" href="/wisata">POST</a>
                <a class="px-4 py-2 mt-2 text-lg font-lato hover:bg-gray-200 hover:text-black hover:font-semibold active:underline rounded-lg" href="/event">EVENT</a>
                <a class="px-4 py-2 mx-2 mt-2 text-lg font-lato text-white hover:bg-green-700  bg-green-900 rounded-lg active:underline" href="#"> Sign Out</a>
            </nav>
        </div>
    </div>
</header>



<h1 class="font-poppins text-center text-2xl mx-auto my-8"> Welcome Admin</h1>




<!-- search bar -->
<form action="/dashboardAdmin/search" method="GET" class="ml-8 ">
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
                Lokasi Wisata
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
                    <a>
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
                                <a class="text-xs text-gray-500 mr-2 lg:text-sm" href="/detailAdmin/{{$t->id}}/{{$t->nama}}">View more</a>
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

  <h1 class="font-bold text-2xl mt-10 ml-8 md:text-3xl lg:text-3xl"> Events</h1>

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

</html>
