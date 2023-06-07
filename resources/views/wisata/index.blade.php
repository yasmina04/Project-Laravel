<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>List Tempat Wisata</title>
</head>
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
                <a class="px-4 py-2 mt-2 text-lg font-lato hover:bg-gray-200 hover:text-black hover:font-semibold active:underline rounded-lg nav-link " href="/dashboardAdmin" >HOME</a>
                <a class="px-4 py-2 mt-2 text-lg font-lato hover:bg-gray-200 hover:text-black hover:font-semibold active:underline rounded-lg" href="/wisata">POST</a>
                <a class="px-4 py-2 mt-2 text-lg font-lato hover:bg-gray-200 hover:text-black hover:font-semibold active:underline rounded-lg" href="/event">EVENT</a>
                <a class="px-4 py-2 mx-2 mt-2 text-lg font-lato text-white hover:bg-green-700  bg-green-900 rounded-lg active:underline" href="#"> Sign Out</a>
            </nav>
        </div>
    </div>
</header>
<body>
    <h1 class="text-green-700 font-poppins justify-start text-2xl font-semibold my-10 mx-auto ml-8">List Post Tempat Wisata</h1>

    <button class="bg-green-700 rounded-lg ml-8 mx-auto px-4 py-2">
        <a href="/wisata/create" class="text-white">Tambah</a><br />
    </button>


    <div class="relative overflow-x-auto mx-auto ml-8 mr-8 my-12 sm:rounded-lg">
        <table class="w-full text-sm border-b text-left mb-6 text-gray-500 ">
            <thead class="text-xs text-black  ">
                <tr>
                    <th scope="col" class="px-6 py-3 ">
                        Nama
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Lokasi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tipe
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $d)
                <tr class=" border-b ">
                    <th scope="row" class="px-6 py-4 font-medium  text-black whitespace-normal">
                        {{ $d->nama }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $d->lokasi }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $d->tipe }}
                    </td>

                    <td class="px-6 py-4 ">
                        <form action="/wisata/{{ $d->id }}" method="POST">
                            @csrf
                             @method('DELETE')
                             <a href="/wisata/{{ $d->id }}/edit" class="font-semibold mr-5 mx-auto text-green-700 rounded-lg"> Edit </a>
                            <button class="px-1 py-1 mx-auto bg-red-600 rounded-lg text-white font-poppins"> Hapus</button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$list->links()}}
    </div>

</body>
</html>
