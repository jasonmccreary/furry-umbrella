<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The Fuzzy Umbrella - A blog built with Laravel 6</title>
  <meta name="description" content="The Fuzzy Umbrella - A blog built with Laravel 6">
  <meta name="author" content="Jason McCreary">

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="bg-gray-200 container mx-auto antialiased">
<h1 class="mt-24 mb-12 font-semibold text-4xl text-gray-900"><span class="border-b-2 border-gray-600">The <span class="italic">Fuzzy</span> Umbrella</span> ☂️</h1>
    <main>
        @yield('content')
    </main>

    @stack('scripts')
</body>
</html>
