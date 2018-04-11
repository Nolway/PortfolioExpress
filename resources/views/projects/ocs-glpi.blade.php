@extends('../layouts.app')

@section('title', "Installation et configuration d'OCS et de GLPI - Portfolio d'Alexis Faizeau")

@section('header')
@endsection


@section('content')
<!-- Breadcrumbs -->
    <section class="g-bg-gray-light-v5 g-py-50">
      <div class="container">
        <div class="d-sm-flex text-center">
          <div class="align-self-center">
            <h2 class="h3 g-font-weight-300 w-100 g-mb-10 g-mb-0--md">Installation et configuration d'OCS et de GLPI</h2>
          </div>
        </div>
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- Portfolio Single Item -->
    <section class="container g-py-100">
      <div class="row g-mb-50">
		
		<div class="col-md-8 g-mb-30">
			<img class="img-fluid" src="{{ asset('assets/img/projects/ocs-glpi1.jpg') }}" alt=""><br>
			<img class="img-fluid" src="{{ asset('assets/img/projects/ocs-glpi2.jpg') }}" alt=""><br>
			<img class="img-fluid" src="{{ asset('assets/img/projects/ocs-glpi3.jpg') }}" alt="">
        </div>
		
		
        <div class="col-lg-4 g-mb-10">
          <div class="mb-5">
            <h2 class="g-color-black mb-4">Installation et configuration d'un serveur virutualisé avec la gestion des configuration OCS et la gestion des incidents GLPI</h2>
            <p>Ce projet à été réalisé dans un cadre scolaire permetant d'apprendre l'instalation la configuration et l'utilisation d'OCS et de GLPI.</p>
          </div>

          <div class="mb-5">
            <a class="btn btn-md u-btn-primary g-font-size-default g-rounded-25 g-px-30 g-py-12" href="{{ asset('assets/pdf/documentation/ocs-glpi.pdf') }}">Documentation</a>
          </div>

          <!-- Client -->
          <div class="mb-5">
            <h3 class="h5 g-color-black mb-3">Date de réalisation</h3>
			<p>Novembre 2017</p>
          </div>
          <!-- End Client -->

          <!-- Tags -->
          <div class="">
            <h3 class="h5 g-color-black mb-3">Domaines</h3>
            <ul class="u-list-inline mb-0">
              <li class="list-inline-item g-mb-10">
                <span class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15" >Système</spawn>
              </li>
              <li class="list-inline-item g-mb-10">
                <span class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15">Réseau</span>
              </li>
            </ul>
          </div>
          <!-- End Tags -->
        </div>
      </div>
    </section>
    <!-- End Portfolio Single Item -->
@endsection

@section('footer')
@endsection