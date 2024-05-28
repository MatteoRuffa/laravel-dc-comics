<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Comics @yield('title','template')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
@include('partials.header')

    @yield('content')

@include('partials.footer.navbar_footer')

</body>

  <!-- ______	      ______
	  / ____/___  ___/_  __/  ________
	 / /   / __ \/ ___/ / _ \/ ___/ _ \
	/ /___/ /_/ / /  / /  __(__  )  __/
	\____/\____/_/  /_/\___//____/___/ -->

</html>
