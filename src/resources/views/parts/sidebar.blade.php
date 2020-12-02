<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('vendor/octo/themes/material-admin/assets/img/sidebar-1.jpg')}}">
    <div class="logo">
        <a href="{{config('app.url')}}" class="simple-text logo-normal">
            {{config('app.name')}}
        </a>
    </div>
    @isset($sidebar)
        <x-octo-sidebar-material :items="$sidebar" />
    @endisset
</div>
