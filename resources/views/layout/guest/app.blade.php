
<!doctype html>
<html lang="id" dir="ltr" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Laundry Kita')</title>

    <meta name="description" content="Laundry Kita menyediakan layanan laundry yang bersih, wangi, dan praktis.">
    <meta name="keywords" content="Laundry Kita, laundry, cuci pakaian, laundry express">
    <meta name="author" content="Laundry Kita">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180"
          href="{{ asset('assets-guest/logo/apple-touch-icon.png') }}">

    <link rel="icon" type="image/png" sizes="32x32"
          href="{{ asset('assets-guest/logo/favicon-32x32.png') }}">

    <link rel="icon" type="image/png" sizes="16x16"
          href="{{ asset('assets-guest/logo/favicon-16x16.png') }}">

    <link rel="icon" type="image/x-icon"
          href="{{ asset('assets-guest/logo/favicon.ico') }}">

    <link rel="manifest"
          href="{{ asset('assets-guest/logo/site.webmanifest') }}">

    <!-- Color Mode -->
    <script src="{{ asset('assets-guest/js/color-modes.js') }}"></script>

    <!-- CSS -->
    @include('layout.guest.css')
</head>

<body>
    <!-- Header -->
    @include('layout.guest.header')

    <!-- Page Content -->
    @yield('content')

    <!-- Footer -->
    @include('layout.guest.footer')

    <!-- JavaScript -->
    @include('layout.guest.js')
</body>
</html>
