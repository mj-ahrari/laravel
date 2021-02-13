<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="master.js"></script>
    @stack('js')
</head>
<body>
    <div class="container">
        @yield('container')
    </div>
</body>
@section('script')
    <script src="test"></script>
@show
</html>