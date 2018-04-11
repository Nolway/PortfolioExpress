@extends('layouts.app')

@section('title', "Mes Projets - Portfolio d'Alexis Faizeau")

@section('header')

@endsection


@section('content')
    <!-- Page Title -->
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options="{direction: 'reverse', settings_mode_oneelement_max_offset: '150'}">
        <!-- Parallax Image -->
        <div class="divimage dzsparallaxer--target w-100 g-bg-repeat " style="height: 200%; background-image: url(../../../assets/img/bg/pattern6-2.png);"></div>
        <!-- End Parallax Image -->

        <div class="container g-color-white g-z-index-1 g-py-100">
            <h1 class="display-5 g-letter-spacing-1 g-mb-25">Mes Projets</h1>

            <div class="lead g-font-weight-400 g-line-height-2 g-letter-spacing-0_5">
                <p>Projets et tâches effectués lors de mes formations
                    <br>ainsi que dans un cadre professionnel
                </p>
            </div>
        </div>
    </section>
    <!-- End Page Title -->

    <section class="container-fluid">
        <div class="row row-offcanvas row-offcanvas-left">

            <div class="col g-py-30 g-pa-30--md">

                <section class=" g-py-100">
                    <div class="container">
                        <div id="shortcode">
                            <div class="shortcode-html">
                                <!-- Cube Portfolio Blocks - Filter -->
                                <ul id="filterControls" class="d-block list-inline text-center g-mb-50">
                                    <li class="list-inline-item cbp-filter-item cbp-filter-item-active g-brd-around g-brd-gray-light-v4 g-brd-primary--active g-color-gray-dark-v4 g-color-primary--hover g-color-primary--active g-font-size-12 rounded g-transition-0_3 g-px-20 g-py-7 mb-2"
                                        role="button" data-filter="*">Tout
                                    </li>
                                    <li class="list-inline-item cbp-filter-item g-brd-around g-brd-gray-light-v4 g-brd-primary--active g-color-gray-dark-v4 g-color-primary--hover g-color-primary--active g-font-size-12 rounded g-transition-0_3 g-px-20 g-py-7 mb-2" role="button" data-filter=".web">Web
                                    </li>
                                    <li class="list-inline-item cbp-filter-item g-brd-around g-brd-gray-light-v4 g-brd-primary--active g-color-gray-dark-v4 g-color-primary--hover g-color-primary--active g-font-size-12 rounded g-transition-0_3 g-px-20 g-py-7 mb-2" role="button" data-filter=".desktop">Desktop
                                    </li>
                                    <li class="list-inline-item cbp-filter-item g-brd-around g-brd-gray-light-v4 g-brd-primary--active g-color-gray-dark-v4 g-color-primary--hover g-color-primary--active g-font-size-12 rounded g-transition-0_3 g-px-20 g-py-7 mb-2" role="button" data-filter=".mobile">Mobile
                                    </li>
                                    <li class="list-inline-item cbp-filter-item g-brd-around g-brd-gray-light-v4 g-brd-primary--active g-color-gray-dark-v4 g-color-primary--hover g-color-primary--active g-font-size-12 rounded g-transition-0_3 g-px-20 g-py-7 mb-2" role="button" data-filter=".network">Réseau
                                    </li>
                                    <li class="list-inline-item cbp-filter-item g-brd-around g-brd-gray-light-v4 g-brd-primary--active g-color-gray-dark-v4 g-color-primary--hover g-color-primary--active g-font-size-12 rounded g-transition-0_3 g-px-20 g-py-7 mb-2" role="button" data-filter=".system">Système
                                    </li>
                                </ul>
                                <!-- End Cube Portfolio Blocks - Filter -->

                                <!-- Cube Portfolio Blocks - Content -->
                                <div class="cbp" data-controls="#filterControls" data-animation="quicksand" data-x-gap="30" data-y-gap="30" data-media-queries='[
                           {"width": 1500, "cols": 4},
                           {"width": 1100, "cols": 4},
                           {"width": 800, "cols": 3},
                           {"width": 480, "cols": 2},
                           {"width": 300, "cols": 1}
                         ]'>
                                    <!-- Cube Portfolio Blocks - Item -->
									<div class="cbp-item identity network system">
										<a href="{{ route('projects_ocs-glpi') }}" title="">
											<div class="u-block-hover g-parent">
												<img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('assets/img/projects/ocs-glpi1.jpg') }}" alt="">
											</div>
											<div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
												<h3 class="h5 g-color-black g-font-weight-700 mb-1">Installation et configuration d'OCS et de GLPI</h3>
											</div>
										</a>
									</div>
                                    <!-- End Cube Portfolio Blocks - Item -->
									
									<!-- Cube Portfolio Blocks - Item -->
									<div class="cbp-item identity web">
										<a href="{{ route('projects_roille') }}" title="">
											<div class="u-block-hover g-parent">
												<img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('assets/img/projects/roille1.jpg') }}" alt="">
											</div>
											<div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
												<h3 class="h5 g-color-black g-font-weight-700 mb-1">Conception et développement d'un site internet pour la société Roille</h3>
											</div>
										</a>
									</div>
                                    <!-- End Cube Portfolio Blocks - Item -->
									
									<!-- Cube Portfolio Blocks - Item -->
									<div class="cbp-item identity web">
										<a href="{{ route('projects_presse') }}" title="">
											<div class="u-block-hover g-parent">
												<img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('assets/img/projects/presse1.jpg') }}" alt="">
											</div>
											<div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
												<h3 class="h5 g-color-black g-font-weight-700 mb-1">Développement du site internet presse.fr</h3>
											</div>
										</a>
									</div>
                                    <!-- End Cube Portfolio Blocks - Item -->
									
									<!-- Cube Portfolio Blocks - Item -->
									<div class="cbp-item identity desktop">
										<a href="{{ route('projects_hopital') }}" title="">
											<div class="u-block-hover g-parent">
												<img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('assets/img/projects/hopital1.jpg') }}" alt="">
											</div>
											<div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
												<h3 class="h5 g-color-black g-font-weight-700 mb-1">Développement d'une application lourde pour la gestion d'un hopital</h3>
											</div>
										</a>
									</div>
                                    <!-- End Cube Portfolio Blocks - Item -->
									
									<!-- Cube Portfolio Blocks - Item -->
									<div class="cbp-item identity mobile">
										<a href="{{ route('projects_roilleAndroid') }}" title="">
											<div class="u-block-hover g-parent">
												<img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('assets/img/projects/roilleAndroid1.jpg') }}" alt="">
											</div>
											<div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
												<h3 class="h5 g-color-black g-font-weight-700 mb-1">Conception et développement de l'application mobile MyRoille en Android</h3>
											</div>
										</a>
									</div>
                                    <!-- End Cube Portfolio Blocks - Item -->
									
									<!-- Cube Portfolio Blocks - Item -->
									<div class="cbp-item identity mobile">
										<a href="{{ route('projects_enquete') }}" title="">
											<div class="u-block-hover g-parent">
												<img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('assets/img/projects/enquete1.jpg') }}" alt="">
											</div>
											<div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
												<h3 class="h5 g-color-black g-font-weight-700 mb-1">Réalisation d'une application mobile Enquète de satisfication auprès de la RATP</h3>
											</div>
										</a>
									</div>
                                    <!-- End Cube Portfolio Blocks - Item -->
									
									<!-- Cube Portfolio Blocks - Item -->
									<div class="cbp-item identity system network">
										<a href="{{ route('projects_serveurs') }}" title="">
											<div class="u-block-hover g-parent">
												<img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('assets/img/projects/serveurs1.jpg') }}" alt="">
											</div>
											<div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
												<h3 class="h5 g-color-black g-font-weight-700 mb-1">Installation et configuration de serveurs Linux LAMP et Windows</h3>
											</div>
										</a>
									</div>
                                    <!-- End Cube Portfolio Blocks - Item -->
									
									<!-- Cube Portfolio Blocks - Item -->
									<div class="cbp-item identity web">
										<a href="{{ route('projects_actuassur') }}" title="">
											<div class="u-block-hover g-parent">
												<img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('assets/img/projects/actuassur1.jpg') }}" alt="">
											</div>
											<div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
												<h3 class="h5 g-color-black g-font-weight-700 mb-1">Développement du site actuassur.fr</h3>
											</div>
										</a>
									</div>
                                    <!-- End Cube Portfolio Blocks - Item -->
									
									<!-- Cube Portfolio Blocks - Item -->
									<div class="cbp-item identity system network">
										<a href="{{ route('projects_elastix') }}" title="">
											<div class="u-block-hover g-parent">
												<img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('assets/img/projects/elastix1.jpg') }}" alt="">
											</div>
											<div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
												<h3 class="h5 g-color-black g-font-weight-700 mb-1">Mise en production du CRM Elastix</h3>
											</div>
										</a>
									</div>
                                    <!-- End Cube Portfolio Blocks - Item -->
									
									<!-- Cube Portfolio Blocks - Item -->
									<div class="cbp-item identity system network">
										<a href="{{ route('projects_fog') }}" title="">
											<div class="u-block-hover g-parent">
												<img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('assets/img/projects/fog1.jpg') }}" alt="">
											</div>
											<div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
												<h3 class="h5 g-color-black g-font-weight-700 mb-1">Mise en place d'un serveur déploiment FOG</h3>
											</div>
										</a>
									</div>
                                    <!-- End Cube Portfolio Blocks - Item -->
									
									<!-- Cube Portfolio Blocks - Item -->
									<div class="cbp-item identity web network">
										<a href="{{ route('projects_sip') }}" title="">
											<div class="u-block-hover g-parent">
												<img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('assets/img/projects/sip1.jpg') }}" alt="">
											</div>
											<div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
												<h3 class="h5 g-color-black g-font-weight-700 mb-1">Création d'un client SIP léger avec la technologie Javascript</h3>
											</div>
										</a>
									</div>
                                    <!-- End Cube Portfolio Blocks - Item -->
									
									<!-- Cube Portfolio Blocks - Item -->
									<div class="cbp-item identity system network">
										<a href="{{ route('projects_mysql') }}" title="">
											<div class="u-block-hover g-parent">
												<img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="{{ asset('assets/img/projects/mysql1.jpg') }}" alt="">
											</div>
											<div class="u-shadow-v19 g-bg-white text-center g-pa-25 mb-1">
												<h3 class="h5 g-color-black g-font-weight-700 mb-1">Répliquer en mode actif/actif une base de données MySQL</h3>
											</div>
										</a>
									</div>
                                    <!-- End Cube Portfolio Blocks - Item -->

                                </div>
                                <!-- End Cube Portfolio Blocks - Content -->
                            </div>

                            <div class="shortcode-styles">
                                <!-- CSS Implementing Plugins -->
                                <link type="text/plain" rel="stylesheet" href="../../../assets/vendor/cubeportfolio-full/cubeportfolio/css/cubeportfolio.min.css">
                            </div>

                            <div class="shortcode-scripts">
                                <!-- JS Implementing Plugins -->
                                <script type="text/plain" src="../../../assets/vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>

                                <!-- JS Unify -->
                                <script type="text/plain" src="../../../assets/js/components/hs.cubeportfolio.js"></script>

                                <!-- JS Plugins Init. -->
                                <script type="text/plain">
                    $(document).on('ready', function () {
                      // initialization of cubeportfolio
                      $.HSCore.components.HSCubeportfolio.init('.cbp');
                    });
                  </script>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    <!-- jQuery UI Core -->
    <script src="../../../assets/vendor/jquery-ui/jquery-ui.core.min.js"></script>


    <!-- jQuery UI Helpers -->
    <script src="../../../assets/vendor/jquery-ui/ui/widgets/menu.js"></script>
    <script src="../../../assets/vendor/jquery-ui/ui/widgets/mouse.js"></script>
    <!-- End jQuery UI Helpers -->

    <!-- jQuery UI Widgets -->
    <script src="../../../assets/vendor/jquery-ui/ui/widgets/autocomplete.js"></script>
    <!-- End jQuery UI Widgets -->

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function () {
            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
        });

        $(window).on('load', function () {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');

            // initialization of cubeportfolio
            $.HSCore.components.HSCubeportfolio.init('.cbp');
        });
    </script>
@endsection