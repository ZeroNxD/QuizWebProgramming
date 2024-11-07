<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('Styles.bootstrap5')
</head>
<body>
    <div class="container-fluid">
        @include('Layout.menu')
    </div>

    @yield("Content")

    <div class="container-fluid" style="padding: 3px">
        @include('Layout.footer')
    </div>
</body>
</html>