<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        @if ((session('success')))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </div>
</body>
</html>