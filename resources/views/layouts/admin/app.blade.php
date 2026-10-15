<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Laundry Kita')</title>

    @include('layouts.admin.css')
</head>
<body>

    <div id="app">
        @include('layouts.admin.sidebar')

        <div id="main">
            @include('layouts.admin.header')

            <main class="dashboard-content">
                @yield('content')
            </main>

            @include('layouts.admin.footer')
        </div>
    </div>

    @include('layouts.admin.js')

</body>
</html>
