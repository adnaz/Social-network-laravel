<!DOCTYPE html>
@langrtl
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endlangrtl
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'Laravel Boilerplate')">
        <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
        @yield('meta')

        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        {{ style(mix('css/frontend.css')) }}
        <link rel="stylesheet" type="text/css" href="{{asset('work/css/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('work/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('work/css/line-awesome.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('work/css/line-awesome-font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('work/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('work/css/jquery.mCustomScrollbar.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('work/lib/slick/slick.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('work/lib/slick/slick-theme.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('work/css/responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/work.css')}}">

        @stack('after-styles')
    </head>
         @if (Auth::check())
        {{-- //show logged in navbar --}}
        @include('work.layouts.header')
@endif
    <body>

        <div id="app">
          
            {{-- @include('includes.partials.logged-in-as') --}}
            <div class="container">
                
            @include('work.partials.messages')
                @yield('contents')
            </div><!-- container -->
        </div><!-- #app -->

        <!-- Scripts -->
        @stack('before-scripts')
        {!! script(mix('js/manifest.js')) !!}
        {!! script(mix('js/vendor.js')) !!}
        {!! script(mix('js/frontend.js')) !!}
        {!! script(mix('js/work.js')) !!}
        @stack('after-scripts')

        @include('includes.partials.ga')
    </body>
</html>
