<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    @include('layouts.navbar')
    @include('layouts.sidebar')
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
            <h1 class="flex items-center text-5xl font-extrabold mb-10 ml-3">@yield('title')</h1>
            @yield('content')
            
        </div>
    </div>
</body>
</html>