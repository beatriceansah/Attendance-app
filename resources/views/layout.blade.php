<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Custom Auth Laravel')</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    @include('include.header')
    @yield('content')
    <script src="https://cdn.tailwindcss.com"></script>
  </body>
</html>
