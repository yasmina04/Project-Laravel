{{-- <!DOCTYPE html>
<html>
  <head>
    <title>GoTravelling</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
  </head>

  <body style="width:95%">
  <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>LOGIN</h1>
        <form action="/Home" method="POST">
            @csrf
            @method('GET')
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ Session::get('email') }}" name="email" value="{{ Session::get('email') }}"  class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3 d-grid">
                <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
            </div>
        </form>
    </div>

  </body> --}}

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
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


              <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                  <p class="text-left text-2xl text-gray-600">Hey there, </p>
                  <p class="text-left text-3xl">Wellcome Explorer.</p>
                  <form class="flex flex-col pt-3 md:pt-8" method="POST" action="/Home" >
                    @csrf
                    @method('GET')
                      <div class="flex flex-col pt-4">
                          <label for="email" class="text-lg">Email</label>
                          <input type="email" value="{{ Session::get('email') }}" name="email" placeholder="your@email.com" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                      </div>

                      <div class="flex flex-col pt-4">
                          <label for="password" class="text-lg">Password</label>
                          <input type="password" id="password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                      </div>

                      <button class="bg-green-800 text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8 shadow appearance-none border rounded w-full py-2 px-3" type="submit" name="submit" class="btn btn-primary">LOGIN</button>


                  </form>
                  <div class="text-center pt-12 pb-12">
                      <p>Don't have an account? <a href="/Register" class="underline font-semibold text-green-800">Register here.</a></p>
                  </div>
              </div>

          </div>


          <div class="w-2/3 shadow-2xl">
            <img class="object-center w-full h-screen hidden md:block" src="{{ URL('images/BG.png') }}" alt="Background" />
          </div>
      </div>

  </body>
  </html>
