<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
</head>

<body>

    <!--Main Navigation-->
    <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
                <strong class="blue-text">LearnLaravel</strong>
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto">
                    @foreach ($categories as $category)
                        <li class="nav-item ">
                            <a class="nav-link waves-effect" href="{{ route('post.category', $category->slug ) }}">{{ $category->name }}
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    @endforeach
                </ul>

            <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
                        <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        
                        <a href="{{ route('login') }}" class="nav-link border  border-light rounded waves-effect">
                            <i class="fab fa-github mr-2"></i>Admin Login
                        </a>
                        
                        
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5 pt-5">
        <div class="container">
            <!--Section: Jumbotron-->
            <section class="card wow fadeIn" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
                <!-- Content -->
                <div class="card-body text-white text-center py-5 px-5 my-5">
                    <h1 class="mb-4">
                        <strong>Learn Laravel Web Technology</strong>
                    </h1>
                    <p>
                        <strong>Best & free guide of responsive web design</strong>
                    </p>
                    <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Start
                        free tutorial
                        <i class="fas fa-graduation-cap ml-2"></i>
                    </a>
                </div>
                <!-- Content -->
            </section>
        <!--Section: Jumbotron-->

        <hr class="my-5">

        <!--Section: Cards-->
        <section class="text-center">

            @yield('content')

        </section>
        <!--Section: Cards-->
        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">

        <!--Call to action-->
        <div class="pt-4">
        <a class="btn btn-outline-white" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank"
            role="button">Download MDB
            <i class="fas fa-download ml-2"></i>
        </a>
        <a class="btn btn-outline-white" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">Start
            free tutorial
            <i class="fas fa-graduation-cap ml-2"></i>
        </a>
        </div>
        <!--/.Call to action-->

        <hr class="my-4">

        <!-- Social icons -->
        <div class="pb-4">
        <a href="https://www.facebook.com/mdbootstrap" target="_blank">
            <i class="fab fa-facebook-f mr-3"></i>
        </a>

        <a href="https://twitter.com/MDBootstrap" target="_blank">
            <i class="fab fa-twitter mr-3"></i>
        </a>

        <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
            <i class="fab fa-youtube mr-3"></i>
        </a>

        <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
            <i class="fab fa-google-plus-g mr-3"></i>
        </a>

        <a href="https://dribbble.com/mdbootstrap" target="_blank">
            <i class="fab fa-dribbble mr-3"></i>
        </a>

        <a href="https://pinterest.com/mdbootstrap" target="_blank">
            <i class="fab fa-pinterest mr-3"></i>
        </a>

        <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
            <i class="fab fa-github mr-3"></i>
        </a>

        <a href="http://codepen.io/mdbootstrap/" target="_blank">
            <i class="fab fa-codepen mr-3"></i>
        </a>
        </div>
        <!-- Social icons -->

        <!--Copyright-->
        <div class="footer-copyright py-3">
        © 2019 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();

    </script>
</body>

</html>
