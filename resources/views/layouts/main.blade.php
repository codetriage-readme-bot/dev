<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    <link href="{{ url('css/material.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/material-icons.css') }}" rel="stylesheet" type="text/css">
    {{--<link href="{{ url('css/socicons.css') }}" rel="stylesheet" type="text/css">--}}
    <link href="{{ url('css/Exo2.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/main.css') }}" rel="stylesheet" type="text/css">

</head>
<body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header ">
            <div class="mdl-layout__header-row">
                <div class="logo">
                    <a href="/" class="logo"><img class="logo" src="/logo.png"></a>
                </div>
                <!-- Title -->
                {{--<span class="mdl-layout-title" style="background: url('/logo.png') center / cover; width: auto; height: auto"></span>--}}
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="#about">Про мене</a>
                    <a class="mdl-navigation__link" href="#products">Товари</a>
                    <a class="mdl-navigation__link" href="#news">Новини</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer mdl-layout--small-screen-only">
            <div class="logo in-menu">
                <a href="/" class="logo"><img class="logo in-menu" src="/logo.png"></a>
            </div>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" name="about" href="#about">Про мене</a>
                <a class="mdl-navigation__link" name="products" href="#products">Товари</a>
                <a class="mdl-navigation__link" name="news" href="#news">Новини</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
                @yield('content')
            <footer class="mdl-mini-footer">
                <div class="mdl-mini-footer__right-section">
                    <ul class="mdl-mini-footer__link-list">
                        <li>Created by <a href="http://vk.com/vp.edge">Vadim Prodan</a></li>
                    </ul>
                </div>
            </footer>
        </main>

    </div>

    @section('scripts')
        <!-- JavaScripts -->
        <script src="{{url('/js/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
        <script src="{{url('/js/material.min.js')}}" type="text/javascript"></script>
    @show
</body>
</html>
