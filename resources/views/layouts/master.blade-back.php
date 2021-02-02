<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <!-- CSRF Token -->
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{asset('images/mgr.ico')}}">

    @include('layouts.includes.analytics_google')

    <!-- adding this three lines for search engine meta link -->
    <meta name="description" content="@yield('meta_description')">
    <title>@yield('title')</title>

    <link rel="canonical" href="{{ url(Request::url()) }}" />
{{--    <link rel="canonical" href="https://matesgroup.com.au/sample-page/" />--}}

     {{--Facebook Tag--}}
    <meta property="og:url" content="{{ url(Request::url()) }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('meta_description')" />
    <meta property="og:image" content="@yield('image')" />

{{--    <meta property="og:url" content="http://www.matesgroup.com.au/agriculture-recruitment" />--}}
{{--    <meta property="og:type" content="article" />--}}
{{--    <meta property="og:title" content="Agriculture/Agribusiness Recruitment Agency, Rural Hire Australia" />--}}
{{--    <meta property="og:description" content="Australian company Mates Group provides agriculture, agribusiness, farm staff hire services in Adelaide, Brisbane, Sydney Melbourne" />--}}
{{--    <meta property="og:image" content="http://www.matesgroup.com.au/images/logo/mates_group_logo-200.png" />--}}

    {{--Twitter Card Tags--}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@matesgroupau">
    <meta name="twitter:creator" content="@matesgroupau">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="@yield('image')">


    <!-- Styles -->    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}" />
</head>


<body>




  @include ('layouts.header')
  @yield ('content')
  @include ('layouts.footer')


    <!-- Scripts -->
    <script src="{{mix('js/manifest.js')}}"></script>
    <script src="{{mix('js/vendor.js')}}"></script>
    <script src="{{mix('js/app.js')}}"></script>
</body>
</html>
