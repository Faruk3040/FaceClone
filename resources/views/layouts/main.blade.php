<!DOCTYPE html>
<html>
    <head>
     @include('css.css')
    </head>
    <body>
        @include('layouts.header')
        <div class="main">
            <div class="container-fluid">
                @include('layouts.left')

                @yield('content')

                @include('layouts.right')
            </div>
        </div>

        @include('layouts.footer')

        @include('js.js')
    </body>
</html>
