<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The Fuzzy Umbrella - A blog built with Laravel 6</title>
  <meta name="description" content="The Fuzzy Umbrella - A blog built with Laravel 6">
  <meta name="author" content="Jason McCreary">
</head>

<body>
    <h1>The Fuzzy Umbrella ☂️</h1>
    <main>
        @yield('content')
    </main>

    @stack('scripts')
</body>
</html>
