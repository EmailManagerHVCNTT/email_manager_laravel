<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('partials._head')
    </head>
    <body>
        <div class="wrapper">
            @yield('content')
        </div>
        @include('partials._footer')

        @include('partials._javascript')
        @yield('scripts')
    </body>
</html>
