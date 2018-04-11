@extends('layouts.app')

@section('title', "Veille Technologique - Portfolio d'Alexis Faizeau")

@section('header')

@endsection


@section('content')
    <!-- Page Title -->
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options="{direction: 'reverse', settings_mode_oneelement_max_offset: '150'}">
        <!-- Parallax Image -->
        <div class="divimage dzsparallaxer--target w-100 g-bg-repeat " style="height: 200%; background-image: url(../../../assets/img/bg/pattern6-2.png);"></div>
        <!-- End Parallax Image -->

        <div class="container g-color-white g-z-index-1 g-py-100">
            <h1 class="display-5 g-letter-spacing-1 g-mb-25">Veille Technologique</h1>

            <div class="lead g-font-weight-400 g-line-height-2 g-letter-spacing-0_5">
                <p>
                    Veille Technologique du framework PHP Symfony
                </p>
            </div>
        </div>
    </section>
    <!-- End Page Title -->
	
	<section class="container-fluid">
        <div class="row row-offcanvas row-offcanvas-left">
            <div class="col g-py-30 g-pa-30--md">
                <section class=" ">
                    <div class="container">
						<h2 class="display-5 g-letter-spacing-1 g-mb-25">Présentation de Symfony</h2>
						<p class="g-line-height-2 g-letter-spacing-0_5">
							Symfony est un framework MVC libre sous licence MIT écrit en PHP.<br>
							Il est développé par l'entreprise française SensioLabs et dirigé par Fabien Pontencier depuis le 22 octobre 2005.<br>
						</p>
						<p class="g-line-height-2 g-letter-spacing-0_5">
							Afin d'améliorer la rapidité de développement d'une application WEB en évitant de devoir toujours recréer les mêmes fonctionnalités (gestion des utilisateurs, gestion ORM...) 
							SensioLabs a donc développé ce framework pour ses propres besoins d'en un premier temps puis la partagé avec la communauté des développeur PHP.
						</p>
						<p class="g-line-height-2 g-letter-spacing-0_5 g-mb-25">
							En 2017 il jouit d'une grande popularité au sein des entreprises française et 
							il est utilisé dans de nombreux projets de grande envergure tel que le CMS Drupal ou encore le site de streaming vidéo Dailymotion.<br>
						</p>
						
						<h2 class="display-5 g-letter-spacing-1 g-mb-25">Les outils liés</h2>
						<p class="g-line-height-2 g-letter-spacing-0_5 g-mb-25">
							Parmi les bundles de Symfony certain sont vital pour la création d'une application et forme la base de ce framework.
						</p>
						
						<h3 class="display-5 g-letter-spacing-1 g-mb-25">Composer</h3>
						<p class="g-line-height-2 g-letter-spacing-0_5 g-mb-25">
							Composer est l’élément indispensable à l’installation de vos bundles et de Symfony.<br>
							C’est une bibliothèque de gestion de dépendances pour PHP qui nous permet d’installer des librairies utiles à nos projets.<br>
							Si une librairie à besoin d’une autre librairie pour fonctionner alors Composer va aussi la télécharger ce qui rend Composer indispensable dans le cadre d’un projet Symfony.
						</p>
						<a href="https://getcomposer.org/doc/" target="_blank" class="btn btn-md u-btn-primary g-mr-10 g-mb-35">Documentation de Composer</a>
						
						<h3 class="display-5 g-letter-spacing-1 g-mb-25">Doctrine</h3>
						<p class="g-line-height-2 g-letter-spacing-0_5 g-mb-25">
							Doctrine est un outil incontournable mais optionnel de Symfony qui permet de faire persister les objets PHP dans une base de données
							mais aussi de les récupérer, c'est un <a href="https://fr.wikipedia.org/wiki/Mapping_objet-relationnel" target="_blank" title="ORM sur Wikipédia">ORM</a>.
							C’est un travail de mapping qu’effectue Doctrine afin de faire correspondre les propriétés des classes aux colonnes de la base.<br>
							Ce qui rends la tache simple sont les actions possible à partir du bundle comme par exemple générer Getters et Setters avec une simple commandes.
						</p>
						<a href="https://symfony.com/doc/current/doctrine.html" target="_blank" class="btn btn-md u-btn-primary g-mr-10 g-mb-35">Documentation de Doctrine</a>
						
						<h3 class="display-5 g-letter-spacing-1 g-mb-25">Twig</h3>
						<p class="g-line-height-2 g-letter-spacing-0_5 g-mb-25">
							Twig est un moteur de templates, ll permet d'obliger la séparation entre la récupération des données en PHP et le code HTML afin d’être beaucoup plus clair.
							Cela permet entre autre de savoir quel fichier retoucher en cas de problème.<br>
							Le fichier d’affichage dit vue, ne comporteras aucune balise PHP et il donc bien plus facile à prendre en main pour ceux qui n’y connaisse rien en PHP comme par exemple les graphistes
							qui n’ont pas forcement les connaissances.
						</p>
						<a href="https://twig.symfony.com/doc/2.x/" target="_blank" class="btn btn-md u-btn-primary g-mr-10 g-mb-35">Documentation de Twig</a>
						
						<h2 class="display-5 g-letter-spacing-1 g-mb-25">De la version 1 à 4</h2>
						<p class="g-line-height-2 g-letter-spacing-0_5">
							Lors de la conception de la première version, la volonté de monsieur Pontencier était de récupérer les fonctionalités récurentes et de les assembler pour former une boite à outil.<br>
							Symfony était né !
						</p>
						<p class="g-line-height-2 g-letter-spacing-0_5">
							La version 2 avait pour projet d'améliorer la mise en forme du framework et pour cela il fut complétement réécri avec PHP 5.3.<br>
							C'est ici que tous les composants principaux du framework vont être ajouté, avec une séparation du code selon le modèle MVC (Twig), un système de cache afin d'améliorer
							le temps de réponse, le routage des URL, le système de configuration utilisant le langage YAML, le support de l'internationalisation, l'ajout d'un ORM (Doctrine2)
							et l'architecture permetant la création et l'utilisation de plugins appelé "bundle".
						</p>
						<p class="g-line-height-2 g-letter-spacing-0_5">
							La sortie de la version 3 avait pour but de supprimer les fonctionnalités obselètes présentes dans la version 2 et de passer à PHP 5.6.
						</p>
						<p class="g-line-height-2 g-letter-spacing-0_5 g-mb-25">
							Symfony 4,sortie fin 2017, se présente comme une version simple d'utilisation, plus puissante et plus fexible.<br>
							Cette version permet au développeur d'installer uniquement les bundles désiré et permet donc dde se séparer de Twig par exemple.<br>
							La flexabilité sonne aussi malheureseument la fin du petit frère de Symfony, Silex qui se voit rendu déprécier par SensioLabs au profit de la nouvelle version.
						</p>
						<h2 class="display-5 g-letter-spacing-1 g-mb-25">Sources</h2>
						<a href="https://symfony.com/blog/" target="_blank" class="btn btn-md u-btn-primary g-mr-10 g-mb-15">Blog de Symfony</a>
						<a href="https://en.wikipedia.org/wiki/Symfony" target="_blank" class="btn btn-md u-btn-primary g-mr-10 g-mb-15">Page Wikipédia</a>
						<a href="https://symfony.developpez.com/index/rss" target="_blank" class="btn btn-md u-btn-primary g-mr-10 g-mb-15">Flux RSS de Developpez.com</a>
						
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection

@section('footer')
@endsection