<!DOCTYPE html>

<html>
    <head>
        @include('layout.partials.head')
    </head>

    <body>
        @include('layout.partials.nav')
        @include('layout.partials.header')

        @yield('content')

        @include('layout.partials.footer')
        @include('layout.partials.footer-scripts')

		@yield('script') <!-- KDL - for custom JavaScript -->
    </body>


</html>
