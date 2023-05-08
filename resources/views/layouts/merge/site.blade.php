<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts._include.site.header')

<body>

    @include('layouts._include.site.nav')

    @yield('content')


    @include('layouts._include.site.footer')

</body>
</html>