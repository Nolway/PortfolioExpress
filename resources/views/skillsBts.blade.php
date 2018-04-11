@extends('layouts.app')

@section('title', "Tableau de compétences - Portfolio d'Alexis Faizeau")

@section('header')
@endsection


@section('content')
    <!-- Page Title -->
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options="{direction: 'reverse', settings_mode_oneelement_max_offset: '150'}">
        <!-- Parallax Image -->
        <div class="divimage dzsparallaxer--target w-100 g-bg-repeat " style="height: 200%; background-image: url(../../../assets/img/bg/pattern6-2.png);"></div>
        <!-- End Parallax Image -->

        <div class="container g-color-white g-z-index-1 g-py-100">
            <h1 class="display-5 g-letter-spacing-1 g-mb-25">Tableau des compétences</h1>

            <div class="lead g-font-weight-400 g-line-height-2 g-letter-spacing-0_5">
                <p>
                    Compétences à valider pour le BTS SIO SLAM
                </p>
            </div>
        </div>
    </section>
    <!-- End Page Title -->

    <section class="container g-pt-50">

        <div class="row">

            <div class="col-lg-12 text-center">
                <a href="assets/pdf/BTS_SIO_E6_tableau_synthèse.xls" class="btn btn-xl u-btn-3d u-btn-indigo g-mr-10 g-mb-15" target="_blank">Télécharger mon tableau</a>
            </div>

        </div>
    </section>

    <section class="container-fluid">
        <div class="row row-offcanvas row-offcanvas-left">
            <div class="col g-py-30 g-pa-30--md">
                <section class=" ">
                    <div class="container">
                        <!--Basic Table-->
                        <div class="table-responsive">
                            <table class="table table-bordered u-table--v2">
                                <thead class="text-uppercase g-letter-spacing-1">
                                <tr>
                                    <th class="g-font-weight-300 g-color-black">Compétences mises en oeuvre</th>
                                    <th class="g-font-weight-300 g-color-black">Situation professionnelle</th>
                                </tr>
                                </thead>

                                <tbody>
									
									<tr>
										<td class="align-middle">
											<h4 class="h6 g-mb-2">A1.1.1, A1.3.3, A1.3.4, A1.4.1, A2.2.2, A3.2.1, A4.1.9, A4.1.10, A5.1.1, A5.1.2</h4>
											<div class="js-rating g-font-size-12 g-color-primary" data-rating="3.5"></div>
										</td>
										<td class="align-middle">
											<a class="btn btn-block u-btn-primary g-rounded-50 g-py-5" href="{{route('projects_ocs-glpi')}}">
												Installation et configuration d'OCS et de GLPI
											</a>
										</td>
									</tr>
									
									<tr>
										<td class="align-middle">
											<h4 class="h6 g-mb-2">A1.1.1, A1.2.2, A1.4.1, A1.4.3, A2.3.1, A4.1.1, A4.1.2, A4.1.3, A4.1.4, A4.1.5, A4.1.6, A4.1.7, A4.1.9, A4.1.10</h4>
											<div class="js-rating g-font-size-12 g-color-primary" data-rating="3.5"></div>
										</td>
										<td class="align-middle">
											<a class="btn btn-block u-btn-primary g-rounded-50 g-py-5" href="{{route('projects_roille')}}">
												Conception et développement d'un site internet pour la société Roille
											</a>
										</td>
									</tr>
									
									<tr>
										<td class="align-middle">
											<h4 class="h6 g-mb-2">A1.1.1, A1.2.2, A1.4.1, A1.4.3, A2.3.1, A4.1.1, A4.1.2, A4.1.3, A4.1.4, A4.1.5, A4.1.6, A4.1.7, A4.1.9, A4.1.10</h4>
											<div class="js-rating g-font-size-12 g-color-primary" data-rating="3.5"></div>
										</td>
										<td class="align-middle">
											<a class="btn btn-block u-btn-primary g-rounded-50 g-py-5" href="{{route('projects_presse')}}">
												Développement du site internet presse.fr
											</a>
										</td>
									</tr>
									
									<tr>
										<td class="align-middle">
											<h4 class="h6 g-mb-2">A1.1.1, A1.2.2, A1.4.1, A1.4.3, A2.3.1, A4.1.1, A4.1.2, A4.1.3, A4.1.4, A4.1.5, A4.1.6, A4.1.7, A4.1.9, A4.1.10</h4>
											<div class="js-rating g-font-size-12 g-color-primary" data-rating="3.5"></div>
										</td>
										<td class="align-middle">
											<a class="btn btn-block u-btn-primary g-rounded-50 g-py-5" href="{{route('projects_hopital')}}">
												Développement d'une application lourde pour la gestion d'un hopital
											</a>
										</td>
									</tr>
									
									<tr>
										<td class="align-middle">
											<h4 class="h6 g-mb-2">A1.4.1, A5.2.1, A5.2.4</h4>
											<div class="js-rating g-font-size-12 g-color-primary" data-rating="3.5"></div>
										</td>
										<td class="align-middle">
											<a class="btn btn-block u-btn-primary g-rounded-50 g-py-5" href="{{route('technologicalWatch')}}">
												Elaboration d'une veille technologique sur le framework web Symfony
											</a>
										</td>
									</tr>
									
									<tr>
										<td class="align-middle">
											<h4 class="h6 g-mb-2">A1.1.1, A1.2.2, A1.4.1, A1.4.3, A2.3.1, A4.1.1, A4.1.2, A4.1.3, A4.1.4, A4.1.5, A4.1.6, A4.1.7, A4.1.9, A4.1.10</h4>
											<div class="js-rating g-font-size-12 g-color-primary" data-rating="3.5"></div>
										</td>
										<td class="align-middle">
											<a class="btn btn-block u-btn-primary g-rounded-50 g-py-5" href="{{route('projects_roilleAndroid')}}">
												Conception et développement de l'application mobile MyRoille en Android
											</a>
										</td>
									</tr>
									
									<tr>
										<td class="align-middle">
											<h4 class="h6 g-mb-2">A1.1.1, A1.2.2, A1.4.1, A1.4.3, A2.3.1, A4.1.1, A4.1.2, A4.1.3, A4.1.4, A4.1.5, A4.1.6, A4.1.7, A4.1.9, A4.1.10</h4>
											<div class="js-rating g-font-size-12 g-color-primary" data-rating="3.5"></div>
										</td>
										<td class="align-middle">
											<a class="btn btn-block u-btn-primary g-rounded-50 g-py-5" href="{{route('projects_enquete')}}">
												Réalisation d'une application mobile Enquète de satisfication auprès de la RATP
											</a>
										</td>
									</tr>
									
									<tr>
										<td class="align-middle">
											<h4 class="h6 g-mb-2">A1.1.1, A1.3.3, A1.3.4, A1.4.1, A1.4.3, A2.1.1, A2.2.1, A2.2.2, A3.2.1, A4.1.9, A4.1.10, A5.1.1, A5.1.2</h4>
											<div class="js-rating g-font-size-12 g-color-primary" data-rating="3.5"></div>
										</td>
										<td class="align-middle">
											<a class="btn btn-block u-btn-primary g-rounded-50 g-py-5" href="{{route('projects_serveurs')}}">
												Installation et configuration de serveurs Linux LAMP et Windows avec DNS, DHCP et AD
											</a>
										</td>
									</tr>
									
									
									<tr>
										<td class="align-middle">
											<h4 class="h6 g-mb-2">
											A1.1.1, A1.1.3, A1.2.1, A1.2.2, A1.2.4, A1.3.2, A1.4.1, A1.4.3, A2.3.1,
											A3.2.1, A3.2.2, A4.1.1, A4.1.2, A4.1.6? A4.1.7, A4.1.8, A4.1.9, A4.1.10, A5.2.2, A5.2.3, A5.2.4
											</h4>
											<div class="js-rating g-font-size-12 g-color-primary" data-rating="3.5"></div>
										</td>
										<td class="align-middle">
											<a class="btn btn-block u-btn-primary g-rounded-50 g-py-5" href="{{route('projects_actuassur')}}">
												Développement du site actuassur.fr
											</a>
										</td>
									</tr>
									
									<tr>
										<td class="align-middle">
											<h4 class="h6 g-mb-2">A1.1.1, A1.1.2, A1.2.2, A1.3.1, A1.3.3, A1.3.4, A1.4.1, A3.2.1, A3.2.2, A4.2.4</h4>
											<div class="js-rating g-font-size-12 g-color-primary" data-rating="3.5"></div>
										</td>
										<td class="align-middle">
											<a class="btn btn-block u-btn-primary g-rounded-50 g-py-5" href="{{route('projects_elastix')}}">
												Mise en production du CRM Elastix
											</a>
										</td>
									</tr>
									
									<tr>
										<td class="align-middle">
											<h4 class="h6 g-mb-2">A1.1.1, A1.1.2, A1.2.2, A1.3.1, A1.3.3, A1.3.4, A1.4.1, A3.2.1</h4>
											<div class="js-rating g-font-size-12 g-color-primary" data-rating="3.5"></div>
										</td>
										<td class="align-middle">
											<a class="btn btn-block u-btn-primary g-rounded-50 g-py-5" href="{{route('projects_fog')}}">
												Mise en place d'un serveur déploiment FOG
											</a>
										</td>
									</tr>
									
									<tr>
										<td class="align-middle">
											<h4 class="h6 g-mb-2">A1.1.1, A1.2.1, A1.2.4, A1.3.1, A1.4.1, A2.1.1, A3.2.2, A4.1.1, A4.1.2, A4.1.6, A4.1.7, A4.1.8, A4.1.10, A5.2.2, A5.2.3, A5.2.4</h4>
											<div class="js-rating g-font-size-12 g-color-primary" data-rating="3.5"></div>
										</td>
										<td class="align-middle">
											<a class="btn btn-block u-btn-primary g-rounded-50 g-py-5" href="{{route('projects_sip')}}">
												Création d'un client SIP léger avec la technologie Javascript
											</a>
										</td>
									</tr>
									
									<tr>
										<td class="align-middle">
											<h4 class="h6 g-mb-2">A1.1.1, A1.2.3, A1.4.1, A3.2.1, A4.1.3, A.4.9</h4>
											<div class="js-rating g-font-size-12 g-color-primary" data-rating="3.5"></div>
										</td>
										<td class="align-middle">
											<a class="btn btn-block u-btn-primary g-rounded-50 g-py-5" href="{{route('projects_mysql')}}">
												Répliquer en mode actif/actif une base de données MySQL
											</a>
										</td>
									</tr>
                                </tbody>
                            </table>
                        </div>
                        <!--End Basic Table-->
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection

@section('footer')
@endsection