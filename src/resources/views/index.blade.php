<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('material-admin::parts.head')
    </head>
    <body>
        <div class="wrapper ">
            @include('material-admin::parts.sidebar')
            <div class="main-panel">
                @include('material-admin::parts.nav')
                <div class="content">
                    @yield('content')
                </div>
                @include('material-admin::parts.footer')
            </div>
        </div>
       @include('material-admin::parts.sidebarStyle')
       @include('material-admin::parts.scripts')
   </body>
</html>
