<!DOCTYPE html>
<html>
<head>
    <title>Master</title>
</head>
<body>

    @yield('content')

    @include('partials.footer')

    @stack('scripts') 

</body>
</html>