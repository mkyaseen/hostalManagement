<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset("favicon.ico")}}">

    <title>HostalManagement </title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset("css/carousel.css")}}" rel="stylesheet">
    <style>
     a:hover{
        background-color: #90b1e5;
}
    }
    </style>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                    <a class="nav-link" href={{route( 'people.index')}}>Home<span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href={{route( 'people.create')}}>Add person<span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href={{route( 'rooms.create')}}>Add room<span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href={{route( 'rooms.index')}}>RoomHoom<span class="sr-only"></span></a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <h2  style="color:#f2f6f9">HostalManagement</h2>
            </form>
        </div>
    </nav>
</header>

<main role="main" class="container">

   @yield('main-content')

    <!-- FOOTER -->
    <footer class="footer" style="background-color:#171819; height: 50px; text-align: center; padding-top: 10px">
        <p class="float-right" style="padding-right: 20px"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="{{asset("assets/js/vendor/jquery-slim.min.js")}}"><\/script>')</script>
<script src="{{asset("assets/js/vendor/popper.min.js")}}"></script>
<script src="{{asset("dist/js/bootstrap.min.js")}}}"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="{{("assets/js/vendor/holder.min.js")}}"></script>
</body>
</html>
