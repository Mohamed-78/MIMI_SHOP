<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('img/fav-icon.png') }}" type="image/x-icon" />
       <title>{{page_title($title) ?? ''}}</title>
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/line-icon/css/simple-line-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/elegant-icon/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/revolution/css/settings.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/revolution/css/layers.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/revolution/css/navigation.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/bootstrap-selector/css/bootstrap-select.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/jquery-ui/jquery-ui.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    </head>
    <body>
        
            @include('navigate.navbar')
            <script src="{{ asset('asset/js/core/jquery.3.2.1.min.js') }}"></script>
            <script src="//code.jquery.com/jquery.js"></script>
            @include('flashy::message')
            @yield('content')
            @include('navigate.footer')

    
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendors/revolution/js/jquery.themepunch.tools.min.js') }}">
        </script>
        <script src="{{ asset('vendors/revolution/js/jquery.themepunch.revolution.min.js') }}">
        </script>
        <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
        <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
        <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="{{ asset('vendors/counterup/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('vendors/counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('vendors/bootstrap-selector/js/bootstrap-select.min.js') }}">
        </script>
        <script src="{{ asset('vendors/image-dropdown/jquery.dd.min.js') }}"></script>
        <script src="{{ asset('js/smoothscroll.js') }}"></script>
        <script src="{{ asset('vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('vendors/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('vendors/magnify-popup/jquery.magnific-popup.min.js') }}">
        </script>
        <script src="{{ asset('vendors/vertical-slider/js/jQuery.verticalCarousel.js') }}">
        </script>
        <script src="{{ asset('vendors/jquery-ui/jquery-ui.js') }}"></script>
        <script src="{{ asset('js/theme.js') }}"></script>

    </body>
</html>