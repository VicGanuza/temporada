<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Cabañas Temporad</title>

        <!-- Bootstrap Core CSS -->
        {{--<link rel="stylesheet" href="/css/bootstrap.css" rel="stylesheet">--}}
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}" rel="stylesheet">

        <!-- Template CSS -->
        <link rel="stylesheet" href="{{ asset('/css/animate.css') }}"  rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/font-awesome.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/nexus.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/custom.css') }}" rel="stylesheet">
    </head>

    <body>

        <div id="body-bg">

            <?= $social ?>

            <div class="header" style="margin-bottom: 340px">
                <?= $header ?>

                <?= $menu ?>
            </div>

            <div id="content-top-border" class="container">
            </div>
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                @yield('content')
            </div>
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            <div id="content-bottom-border" class="container">
            </div>

            <?= $footer ?>
        </div>
        <!-- Bootstrap core JavaScript
        ================================================== -->

        <script type="text/javascript" src="{{ asset('/js/libs/jquery.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('/js/libs/bootstrap.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('/js/libs/scripts.js') }}"></script>
        <!-- Isotope - Portfolio Sorting -->
        <script type="text/javascript" src="{{ asset('/js/libs/jquery.isotope.js') }}" type="text/javascript"></script>
        <!-- Mobile Menu - Slicknav -->
        <script type="text/javascript" src="{{ asset('/js/libs/jquery.slicknav.js') }}" type="text/javascript"></script>
        <!-- Animate on Scroll-->
        <script type="text/javascript" src="{{ asset('/js/libs/jquery.visible.js') }}" charset="utf-8"></script>
        <!-- Sticky Div -->
        <script type="text/javascript" src="{{ asset('/js/libs/jquery.sticky.js') }}" charset="utf-8"></script>
        <!-- Slimbox2-->
        <script type="text/javascript" src="{{ asset('/js/libs/slimbox2.js') }}" charset="utf-8"></script>
        <!-- Modernizr -->
        <script src="{{ asset('/js/libs/modernizr.custom.js') }}" type="text/javascript"></script>
    </body>
</html>