<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <!-- Bootstrap Core CSS -->
    <!-- <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Theme CSS -->
    <!-- <link href="/css/clean-blog.min.css" rel="stylesheet"> -->
    

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
    @yield('head')
    <link href="/css/indexStyles.min.css" rel="stylesheet">
    <link href="/css/css/fontello.css" rel="stylesheet">
    <link href="/css/loader.min.css" rel="stylesheet">
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
        </ul>
        <!-- /.container -->
    </nav>

    <header class="header">
        <div class="container">
            <h1 class="heading">MateBlog</h1>
            <span class="subheading">All about yerba mate</span>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main">
      @yield('body')
      <section class="posts">
          <div class="post__preview">
              <a class="post__link" href="">
                  <h2 class="post__title">
                      Yerba is amazing!
                  </h2>
                  <h3 class="post__subtitle">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis velit nemo eum, dicta quidem! Sequi ut pariatur officiis incidunt, quo!
                  </h3>
              </a>
              <p class="post__meta">Posted at DATE</p>
          </div>
          <hr>
    </section>
    </main>

    <!-- Footer -->
    <footer class="fotter">
    </footer>
</section>
    <!-- jQuery -->
    <script src="/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.2/vue.min.js"></script>
    <script src="./js/main.js"></script>

</body>

</html>
