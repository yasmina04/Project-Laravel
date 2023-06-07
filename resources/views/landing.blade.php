<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Landing Page </title>
</head>
<body>
    <h1 class="text-center font-bold text-5xl font-lato mt-20">
        <span> Who are </span>
        <span class="text-green-700"> you </span>
        <span> ?</span>
    </h1>
    <p class="text-center mt-3">Please, select your role....</p>

    <div class="container mx-auto mt-5 justify-items-center">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 ">
          <div class="flex justify-center text-xl border-2 border-gray-300 rounded-xl bg-gray-100">
            <p class="text-center"> Traveller</p> <br>
            <button class="justify-items-center px-2 py-1 bg-slate-600">Go</button>
          </div>
          <div class="flex justify-center text-6xl border-2 border-gray-300 rounded-xl p-6 bg-gray-100">2</div>

        </div>
      </div>
</body>
</html>
