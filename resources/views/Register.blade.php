{{-- <!DOCTYPE html>
<html>
  <head>
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body style="width:95%">
    <div class="row justify-content-center" style="margin-top:13%">
      <div class="col-3">
        <h4>Registrasi User</h4>
        <form class="border" style="padding:20px" method="POST" action="/{{ $action }}">
          @csrf
          <input type="hidden" name="_method" value="{{ $method }}" />
          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ isset($data)?$data->nama:'' }}" />
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" value="{{ isset($data)?$data->username:'' }}" />
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="{{ isset($data)?$data->email:'' }}" />
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" class="form-control" value="{{ isset($data)?$data->password:'' }}" />
          </div>
          <div style="text-align:center">
            <button class="btn btn-success">Register</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css"/>
    @vite('resources/css/app.css')


    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla {
            font-family: karla;
        }
    </style>
</head>
<body class="bg-white font-family-karla h-screen">

    <div class="w-full flex flex-wrap">

        <div class="w-full md:w-1/3 flex flex-col">

            {{-- <div class="flex justify-center md:justify-start pt-0 md:pl-12 md:-mb-12">
                <img src="{{ URL('images/GTLogo.png') }}" , alt="logo", class="logo" width="200px">
            </div> --}}

            <div class="flex flex-col justify-center md:justify-start my-auto pt-2 md:pt-2 px-2 md:px-16 lg:px-20">

                <p class="text-center text-xl font-semibold text-green-700 mt-10">Create New Account</p>
                <form class="flex flex-col pt-2 md:pt-8" method="POST" action="/{{ $action }}" >
                    @csrf
                    {{-- <div class="flex flex-col pt-2">
                        <label for="nama" class="text-lg">Nama</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" type="text" name="nama" class="form-control" value="{{ isset($data)?$data->nama:'' }}" />
                    </div> --}}

                    <div class="flex flex-col pt-2">
                        <label for="username" class="text-lg">Username</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" type="text" name="username" class="form-control" value="{{ isset($data)?$data->username:'' }}" />
                    </div>

                    <div class="flex flex-col pt-2">
                        <label for="email" class="text-lg">Email</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" type="text" name="email" class="form-control" value="{{ isset($data)?$data->email:'' }}" />
                    </div>

                    <div class="flex flex-col pt-2">
                        <label for="password" class="text-lg">Password</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" type="text" name="password" class="form-control" value="{{ isset($data)?$data->password:'' }}" />
                    </div>



                    <button class="bg-green-800 text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8 shadow appearance-none border rounded w-full py-2 px-3" type="submit" name="submit" class="btn btn-primary">Register</button>
                </form>
                <div class="text-center pt-8 pb-5 md:pt-2 md:pb-2">
                    <p>Already have an account? <a href="/Login" class="underline font-semibold text-green-800">Log in here.</a></p>
                </div>
            </div>

        </div>

        <div class="w-2/3 shadow-2xl">
            <img class="object-center w-full h-screen hidden md:block" src="{{ URL('images/BG.png') }}" alt="Background" />
        </div>
    </div>

</body>
</html>
