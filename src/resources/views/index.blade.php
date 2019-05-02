<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('material::parts.head')
    </head>
    <body class="">
        <div class="wrapper ">
            @include('material::parts.sidebar')
            <div class="main-panel">
                @include('material::parts.nav')
                <div class="content">
                    @yield('content')
                </div>
                @include('material::parts.footer')
            </div>
        </div>
       @include('material::parts.sidebarStyle')
       @include('material::parts.scripts')
   </body>
</html>
