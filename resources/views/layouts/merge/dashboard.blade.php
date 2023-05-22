{{-- Header --}}
@include('layouts._include.dashboard.header')

{{-- Aside --}}
@if (auth()->user()->hasRole('admin'))
    @include('layouts._include.dashboard.aside-admin')
@elseif (auth()->user()->hasRole('registrador'))
    @include('layouts._include.dashboard.aside-registrador')
@elseif (auth()->user()->hasRole('gerenciador'))
    @include('layouts._include.dashboard.aside-gerenciador')
@endif

{{-- Nav --}}
@include('layouts._include.dashboard.nav')


{{-- Content --}}
@yield('content')

{{-- Footer --}}
@include('layouts._include.dashboard.footer')

