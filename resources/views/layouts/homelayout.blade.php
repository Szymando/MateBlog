<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Dominik Szymanowski">
    <meta name="author" content="Tomasz Surowiec">
    @yield('meta')

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="/css/indexStyles.min.css" rel="stylesheet">
    <link href="/css/css/fontello.css" rel="stylesheet">
    <link href="/css/loader.min.css" rel="stylesheet">
    @yield('head')
</head>

<body>
<script>

</script>
<section class="loader">
    <span class="circle__out">
        <span class="gap__color"></span>
        <span class="circle__in"></span>
    </span>
</section>
<section class="wrapper" id="app">
    <!-- Navigation -->
    <nav class="menu">
        <button class="menu__icon" type="button" role="menu extender"><span class="icon-th-list"></span></button>
        <ul class="menu__items">
            <li class="menu__item"><a href="#" class="menu__item-icon icon-home"></a></li>
            <li class="menu__item"><a href="/about-us" class="menu__item-icon icon-users"></a></li>
            <li class="menu__item"><a href="/contact" class="menu__item-icon icon-contacts"></a></li>
            <li class="menu__item"><a href="/login" class="menu__item-icon icon-login"></a></li>
            <!-- <li class="menu__item"><a href="/logout" class="menu__item-icon icon-logout"></a></li> -->
        </ul>
        <!-- /.container -->
    </nav>

    <header class="header">
        <div class="container">
            <h1 class="heading">@{{msg}}</h1>
            <span class="subheading">All about yerba mate</span>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main">
       @yield('body')
    </main>


    <!-- Footer -->
    <footer class="fotter">
        <div class="social">
            <span class="social__text">see us also at:</span>
            <div class="social__items">
                <img src="/svg/facebook.svg" alt="facebook icon" class="social__item">
                <img src="/svg/twitter.svg" alt="twitter icon" class="social__item">
                <img src="/svg/instagram.svg" alt="instagram icon" class="social__item">
            </div>
        </div>
        <span class="copyright__text">MateBlog&#9400; 2017</span>
    </footer>
</section>
    <!-- jQuery -->
    <script src="/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://cdn.jsdelivr.net/vue/2.3.2/vue.js"></script>
    <script src="./js/main.js"></script>

</body>

</html>
