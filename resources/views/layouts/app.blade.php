<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Title -->
  <title>@yield('title')</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="../../assets/vendor/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../../../assets/vendor/bootstrap/offcanvas.css">
  <!-- CSS Global Icons -->
  <link rel="stylesheet" href="../../assets/vendor/icon-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../assets/vendor/icon-line/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../assets/vendor/icon-etlinefont/style.css">
  <link rel="stylesheet" href="../../assets/vendor/icon-line-pro/style.css">
  <link rel="stylesheet" href="../../assets/vendor/icon-hs/style.css">
  <link rel="stylesheet" href="../../assets/vendor/animate.css">
  <link rel="stylesheet" href="../../assets/vendor/dzsparallaxer/dzsparallaxer.css">
  <link rel="stylesheet" href="../../assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
  <link rel="stylesheet" href="../../assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
  <link rel="stylesheet" href="../../assets/vendor/fancybox/jquery.fancybox.css">
  <link rel="stylesheet" href="../../assets/vendor/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="../../assets/vendor/cubeportfolio-full/cubeportfolio/css/cubeportfolio.min.css">
  <link rel="stylesheet" href="../../assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="../../assets/vendor/hamburgers/hamburgers.min.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="../../assets/css/unify-core.css">
  <link rel="stylesheet" href="../../assets/css/unify-components.css">
  <link rel="stylesheet" href="../../assets/css/unify-globals.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="../../assets/css/custom.css">

  @yield('header')
</head>

<body>
  <main>
    <!-- Header -->
    <header id="js-header" class="u-header u-header--static">
      <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10">
        <nav class="js-mega-menu navbar navbar-expand-lg">
          <div class="container">
            <!-- Responsive Toggle Button -->
            <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
              <span class="hamburger hamburger--slider">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </span>
            </button>
            <!-- End Responsive Toggle Button -->

            <!-- Logo -->
            <a href="{{ route('home') }}" class="navbar-brand">
              Portfolio d'Alexis Faizeau
            </a>
            <!-- End Logo -->

            <!-- Navigation -->
            <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg" id="navBar">
              <ul class="navbar-nav text-uppercase g-pos-rel g-font-weight-600 ml-auto">
                <!-- Home -->
                <li class="nav-item  g-mx-10--lg g-mx-15--xl">
                  <a href="{{ route('home') }}" class="nav-link g-py-7 g-px-0">Accueil</a>
                </li>
                <!-- End Home -->

                <!-- Projects -->
                <li class="nav-item  g-mx-10--lg g-mx-15--xl">
                  <a href="{{ route('projects') }}" class="nav-link g-py-7 g-px-0">Mes Projets</a>
                </li>
                <!-- End Projects -->

                <!-- Skills BTS -->
                <li class="nav-item  g-mx-10--lg g-mx-15--xl">
                  <a href="{{ route('skillsBts') }}" class="nav-link g-py-7 g-px-0">Tableau de compétences</a>
                </li>
                <!-- End Skills BTS -->

                <!-- Technological Watch -->
                <li class="nav-item  g-mx-10--lg g-mx-15--xl">
                  <a href="{{ route('technologicalWatch') }}" class="nav-link g-py-7 g-px-0">Veille Technologique</a>
                </li>
                <!-- End Technological Watch -->
				
              </ul>
            </div>
            <!-- End Navigation -->
          </div>
        </nav>
      </div>
    </header>
    <!-- End Header -->

    @yield('content')

    <!-- Copyright Footer -->
    <footer class="g-bg-gray-dark-v1 g-color-white-opacity-0_8 g-py-20">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-center text-md-left g-mb-15 g-mb-0--md">
            <div class="d-lg-flex">
              <small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md">2017 © Tous droits réservés.</small>
              <ul class="u-list-inline">
              </ul>
            </div>
          </div>

          <div class="col-md-4 align-self-center">
            <ul class="list-inline text-center text-md-right mb-0">
              <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Linkedin">
                <a href="https://www.linkedin.com/in/alexis-faizeau/" class="g-color-white-opacity-0_5 g-color-white--hover">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
              <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Twitter">
                <a href="https://twitter.com/TheAlexiskn" class="g-color-white-opacity-0_5 g-color-white--hover">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Copyright Footer -->

    <a class="js-go-to u-go-to-v1" href="#" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
      <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
  </main>

  <div class="u-outer-spaces-helper"></div>


  <!-- JS Global Compulsory -->
  <script src="../../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
  <script src="../../assets/vendor/jquery.easing/js/jquery.easing.js"></script>
  <script src="../../assets/vendor/popper.min.js"></script>
  <script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="../../assets/vendor/appear.js"></script>
  <script src="../../assets/vendor/slick-carousel/slick/slick.js"></script>
  <script src="../../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="../../assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
  <script src="../../assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
  <script src="../../assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
  <script src="../../assets/vendor/fancybox/jquery.fancybox.min.js"></script>
  <script src="../../assets/vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>

  <!-- JS Unify -->
  <script src="../../assets/js/hs.core.js"></script>
  <script src="../../assets/js/components/hs.carousel.js"></script>
  <script src="../../assets/js/components/hs.header.js"></script>
  <script src="../../assets/js/helpers/hs.hamburgers.js"></script>
  <script src="../../assets/js/components/hs.tabs.js"></script>
  <script src="../../assets/js/components/hs.popup.js"></script>
  <script src="../../assets/js/components/hs.counter.js"></script>
  <script src="../../assets/js/components/hs.cubeportfolio.js"></script>
  <script src="../../assets/js/components/hs.go-to.js"></script>

  <!-- JS Customization -->
  <script src="../../assets/js/custom.js"></script>

  @yield('footer')

</body>
</html>
