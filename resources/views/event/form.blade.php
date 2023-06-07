<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"]{
            display: none;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title> Form Wisata</title>
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
                    <a class="px-4 py-2 mt-2 text-lg font-lato hover:bg-gray-200 hover:text-black hover:font-semibold active:underline rounded-lg" href="/wisata">POST</a>
                    <a class="px-4 py-2 mt-2 text-lg font-lato hover:bg-gray-200 hover:text-black hover:font-semibold active:underline rounded-lg" href="/event">EVENT</a>
                    <a class="px-4 py-2 mx-2 mt-2 text-lg font-lato text-white hover:bg-green-700  bg-green-900 rounded-lg active:underline" href="#"> Sign Out</a>
                </nav>
            </div>
        </div>
    </header>



<h2 class="text-center text-green-800 font-semibold font-poppins text-3xl">Input Data Event</h2>


    <div class="container mx-auto my-10 ">
        <form class="flex justify-center items-center ml-8 lg:justify-center lg:items-center" method="POST" action="/{{ $action }}" enctype="multipart/form-data" >
            @csrf
            <input type="hidden" name="_method" value="{{ $method }}" />
            <div class="mb-6 ">
              <label for="judul" class="block mb-2 text-sm font-medium mt-2">Judul Event</label>
              <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  w-full p-2.5" type="text" name="judul" class="form-control" value="{{ isset($data)?$data->judul:'' }}">

              <label for="lokasi" class="block mb-2 text-sm font-medium mt-2">Lokasi Event</label>
              <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  w-full p-2.5" type="text" name="lokasi" class="form-control" value="{{ isset($data)?$data->lokasi:'' }}">

              <label for="tanggal" class="block mb-2 text-sm font-medium mt-2">Tanggal Event</label>
              <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  w-full p-2.5" type="text" name="tanggal" class="form-control" value="{{ isset($data)?$data->tanggal:'' }}">


              <label for="detail" class="block mb-2 text-sm font-medium mt-2">Detail Event</label>

              <textarea
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  w-full p-2.5" id="detail" type="hidden" name="detail" class="form-control"
                    id="exampleFormControlTextarea1"
                    rows="3"
                    placeholder="Your message"></textarea >


              <label class="block mb-2 text-sm font-medium text-gray-900 " for="img">Upload Gambar</label>
                <input class="w-full py-1.5 text-sm  text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " name="img" type="file">

                <p class="mt-1 text-sm text-gray-500 " id="img">Format berbentuk SVG, PNG, atau JPG.</p>


              <button type="submit" class="text-white bg-green-900 hover:bg-green-700 focus:ring-4 my-8 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
              {{-- <a href="">Back</a> --}}


            </div>


          </form>
    </div>



</div>

</body>


</html>

{{-- <!DOCTYPE html>
<html>
  <head>
    <title>Form {{ $title }} Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body style="width:95%">
    <div class="row justify-content-center" style="margin-top:13%">
      <div class="col-3">
        <h4>Form {{ $title }} Event</h4>
        <form class="border w-full h-full" style="padding:20px" method="POST" enctype="multipart/form-data" action="/{{ $action }}">
          @csrf
          <input type="hidden" name="_method" value="{{ $method }}" />
          <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ isset($data)?$data->judul:'' }}" />
          </div>
          <div class="form-group">
            <label>Lokasi</label>
            <input type="text" name="lokasi" class="form-control" value="{{ isset($data)?$data->lokasi:'' }}" />
          </div>
          <div class="form-group">
            <label>tanggal</label>
            <input type="text" name="tanggal" class="form-control" value="{{ isset($data)?$data->tanggal:'' }}" />
          </div>
          <div class="form-group">
            <label>detail</label>
            <textarea name="detail" class="form-control w-full" value="{{ isset($data)?$data->detail:'' }}"></textarea>
          </div>
          <div class="form-group">
            <label>gambar</label>
            <input type="file" name="img" class="form-control" value="{{ isset($data)?$data->img:'' }}" />
          </div>
          <div style="text-align:center">
            <button class="btn btn-success">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html> --}}
