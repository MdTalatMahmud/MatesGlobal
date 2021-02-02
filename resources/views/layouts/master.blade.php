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
{{--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">--}}
{{--        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>--}}

{{--        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">--}}

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />--}}

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}" />
</head>


<body>

      @include ('layouts.header')
      @yield ('content')
      @include ('layouts.footer')

        <!-- Scripts -->
{{--      <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>--}}

      <script src="{{mix('js/manifest.js')}}"></script>
      <script src="{{mix('js/vendor.js')}}"></script>
      <script src="{{mix('js/app.js')}}"></script>


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

      {{--      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">--}}
{{--        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>--}}
        <script type="text/javascript">


//            $(".carousel").carousel()
//            var myCarousel = document.querySelector("#carousel_main_slider")
//            var carousel = new bootstrap.Carousel(myCarousel, {
//                interval: 200,
//                wrap: false
//            })

            // Owl Carousel Settings:
            // let partnersCarousel = $("#owl-main-slider");
            // partnersCarousel.owlCarousel({
            //
            //     navigation : true, // Show next and prev buttons
            //
            //     slideSpeed : 100,
            //     paginationSpeed : 400,
            //
            //     items : 1,
            //     itemsDesktop : false,
            //     itemsDesktopSmall : false,
            //     itemsTablet: false,
            //     itemsMobile : false

                // loop:true,
                //default settings:
                // autoplay:true,
                // autoplayTimeout:2000,
                // autoplayHoverPause:true,

                // autoWidth:true,
                // center: true,
                // items:2,
                // margin:10,
                // autoWidth:true,
                // nav:false,
                // dots:false,
                // responsive:{
                //     0:{
                //         items:1
                //     },
                //     600:{
                //         items:3
                //     },
                //     1000:{
                //         items:5
                //     }
                // }
            // });
            // partnersCarousel.on('mousewheel', '.owl-stage', function (e) {
            //     if (e.deltaY>0) {
            //         partnersCarousel.trigger('next.owl');
            //     } else {
            //         partnersCarousel.trigger('prev.owl');
            //     }
            //     e.preventDefault();
            // });

</script>

</body>
</html>
