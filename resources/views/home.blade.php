@extends('layouts.app')

@section('title', "Portfolio d'Alexis Faizeau")

@section('header')
  <!-- Revolution Slider -->
  <link rel="stylesheet" href="../../assets/vendor/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
  <link rel="stylesheet" href="../../assets/vendor/revolution-slider/revolution/css/settings.css">
  <link rel="stylesheet" href="../../assets/vendor/revolution-slider/revolution-addons/particles/css/revolution.addon.particles.css">
@endsection


@section('content')

<!-- Revolution Slider -->
    <div class="g-overflow-hidden">
      <div id="rev_slider_1174_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="inspiration-header" data-source="gallery" style="background-color:transparent;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
        <div id="rev_slider_1174_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
          <ul>
            <!-- SLIDE  -->
            <li data-index="rs-3238" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="500" data-rotate="0" data-saveperformance="off" data-title="Slide"
            data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
              <!-- MAIN IMAGE -->
              <img src="../../assets/img/bg/transparent.png" data-bgcolor="#f9f9f9" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg">
              <!-- LAYERS -->

              <?php /*<!-- LAYER NR. 1 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-8" id="slide-3238-layer-4" data-x="['left','left','left','left']" data-hoffset="['-264','-264','-371','-416']" data-y="['top','top','top','top']" data-voffset="['-135','-135','-180','-203']" data-width="none"
              data-height="none" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"x:left;rZ:-90deg;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
              data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;border-width:0px;">
                <img src="../../assets/img-temp/650x500/img1.png" alt="" data-ww="['650px','650px','650px','650px']" data-hh="['500px','500px','500px','500px']" width="650" height="500">
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-9" id="slide-3238-layer-5" data-x="['right','right','right','right']" data-hoffset="['30','30','-70','-144']" data-y="['top','top','top','top']" data-voffset="['-204','-204','-233','-261']" data-width="none"
              data-height="none" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"x:right;y:-500px;rZ:90deg;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
              data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;border-width:0px;">
                <img src="../../assets/img-temp/700x600/img1.png" alt="" data-ww="['700px','700px','700px','700px']" data-hh="['600px','600px','600px','600px']" width="700" height="600">
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-10" id="slide-3238-layer-6" data-x="['left','left','left','left']" data-hoffset="['-372','-372','-540','-638']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-484','-484','-520','-522']"
              data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"x:left;rZ:45deg;","speed":2500,"to":"o:1;","delay":650,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
              data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;border-width:0px;">
                <img src="../../assets/img-temp/900x1000/img1.png" alt="" data-ww="['900px','900px','900px','900px']" data-hh="['1000px','1000px','1000px','1000px']" width="900" height="1000">
              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-12" id="slide-3238-layer-9" data-x="['left','left','left','left']" data-hoffset="['134','134','-2','-57']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['67','67','50','6']" data-width="none"
              data-height="none" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"y:bottom;rZ:90deg;","speed":1500,"to":"o:1;","delay":1050,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
              data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;border-width:0px;">
                <img src="../../assets/img-temp/200x300/img1.png" alt="" data-ww="['200px','200px','200px','200px']" data-hh="['300px','300px','300px','300px']" width="200" height="300">
              </div>

              <!-- LAYER NR. 5 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-11" id="slide-3238-layer-10" data-x="['left','left','left','left']" data-hoffset="['181','181','30','-39']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-170','-170','-190','-212']"
              data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"y:bottom;rZ:-90deg;","speed":1500,"to":"o:1;","delay":1250,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
              data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;border-width:0px;">
                <img src="../../assets/img-temp/300x400/img1.png" alt="" data-ww="['300px','300px','300px','300px']" data-hh="['400px','400px','400px','400px']" width="300" height="400">
              </div>

              <!-- LAYER NR. 6 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-12" id="slide-3238-layer-11" data-x="['left','left','left','left']" data-hoffset="['393','393','201','81']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['218','218','183','191']" data-width="none"
              data-height="none" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"y:bottom;rZ:-90deg;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
              data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10;border-width:0px;">
                <img src="../../assets/img-temp/50x100/img1.png" alt="" data-ww="['50px','50px','50px','50px']" data-hh="['100px','100px','100px','100px']" width="50" height="100">
              </div>

              <!-- LAYER NR. 7 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-11" id="slide-3238-layer-12" data-x="['left','left','left','left']" data-hoffset="['346','346','165','36']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['255','255','237','231']" data-width="none"
              data-height="none" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"y:bottom;rZ:90deg;","speed":2000,"to":"o:1;rZ:310;","delay":550,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
              data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11;border-width:0px;">
                <img src="../../assets/img-temp/50x100/img1.png" alt="" data-ww="['50px','50px','50px','50px']" data-hh="['100px','100px','100px','100px']" width="50" height="100">
              </div>

              <!-- LAYER NR. 8 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-9" id="slide-3238-layer-7" data-x="['right','right','right','right']" data-hoffset="['-364','-364','-479','-553']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-155','-155','-180','-202']"
              data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"x:right;rZ:-65deg;","speed":1500,"to":"o:1;","delay":700,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
              data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;border-width:0px;">
                <img src="../../assets/img-temp/730x520/img1.png" alt="" data-ww="['730px','730px','730px','730px']" data-hh="['520px','520px','520px','520px']" width="730" height="520">
              </div>

              <!-- LAYER NR. 9 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-11" id="slide-3238-layer-8" data-x="['right','right','right','right']" data-hoffset="['222','222','105','8']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['8','8','-17','-10']" data-width="none"
              data-height="none" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"x:right;rZ:90deg;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
              data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;border-width:0px;">
                <img src="../../assets/img-temp/300x500/img1.png" alt="" data-ww="['300px','300px','300px','300px']" data-hh="['500px','500px','500px','500px']" width="300" height="500">
              </div>*/?>

              <!-- LAYER NR. 10 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-3238-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-90']" data-fontsize="['80','80','80','40']"
              data-lineheight="['80','80','80','60']" data-width="['none','none','none','360']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:-50px;rX:-45deg;sX:2;sY:2;opacity:0;","speed":1500,"to":"o:1;","delay":510,"ease":"Power4.easeOut"},{"delay":640,"speed":600,"to":"y:30px;rX:45deg;sX:0.8;sY:0.8;opacity:0;","ease":"Power2.easeInOut"}]'
              data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 14; white-space: nowrap; font-size: 80px; line-height: 80px; font-weight: 700; color: rgba(0, 0, 0, 1.00);border-width:0px;">Bienvenue
              </div>

              <!-- LAYER NR. 11 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-3238-layer-15" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-90']" data-fontsize="['80','80','80','40']"
              data-lineheight="['80','80','80','60']" data-width="['none','none','none','360']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:-50px;rX:-45deg;sX:2;sY:2;opacity:0;","speed":1500,"to":"o:1;","delay":2940,"ease":"Power4.easeOut"},{"delay":660,"speed":600,"to":"y:30px;rX:45deg;sX:0.8;sY:0.8;opacity:0;","ease":"Power2.easeInOut"}]'
              data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 15; white-space: nowrap; font-size: 80px; line-height: 80px; font-weight: 700; color: rgba(0, 0, 0, 1.00);border-width:0px;">sur le portfolio de
              </div>

              <!-- LAYER NR. 12 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-3238-layer-16" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-90']" data-fontsize="['80','80','80','40']"
              data-lineheight="['80','80','80','60']" data-width="['none','none','none','400']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:-50px;rX:-45deg;sX:2;sY:2;opacity:0;","speed":1500,"to":"o:1;","delay":5390,"ease":"Power4.easeOut"},{"delay":"wait","speed":600,"to":"y:30px;rX:45deg;sX:0.8;sY:0.8;opacity:0;","ease":"Power2.easeInOut"}]'
              data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 16; white-space: nowrap; font-size: 80px; line-height: 80px; font-weight: 700; color: rgba(0, 0, 0, 1.00);border-width:0px;">Alexis Faizeau
              </div>

              <!-- LAYER NR. 13 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-3238-layer-2" data-x="['center','center','center','center']" data-hoffset="['-8','-8','-8','-8']" data-y="['middle','middle','middle','middle']" data-voffset="['10','10','10','-10']" data-fontsize="['20','20','20','20']"
              data-lineheight="['20','20','20','30']" data-width="['none','none','none','360']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:50px;rX:45deg;sX:2;sY:2;opacity:0;","speed":1500,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
              data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 17; white-space: nowrap; font-size: 20px; line-height: 20px; font-weight: 400; color: rgba(68, 68, 68, 1.00); border-width: 0;">Développeur Fullstack / Desktop

              </div>

              <!-- LAYER NR. 14 -->
              <div class="tp-caption rev-btn g-bg-primary rs-parallaxlevel-3" id="slide-3238-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','92']"
              data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]' data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"y:100px;rX:90deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"150","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bg:rgba(114, 192, 44, .8);bs:solid;"}]'
              data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[30,30,30,30]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[30,30,30,30]" style="z-index: 18; white-space: nowrap; font-size: 14px; color: rgba(255, 255, 255, 1.00); border-color:rgba(0, 0, 0, 1.00);border-width:0px;border-radius:50px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">En savoir plus
              </div>

              <!-- LAYER NR. 15 -->
              <div class="tp-caption rev-scroll-btn revs-dark  rs-parallaxlevel-5" id="slide-3238-layer-13" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','50','50']"
              data-width="35" data-height="55" data-whitespace="nowrap" data-type="button" data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]' data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"y:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":800,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
              data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 19; min-width: 25px; max-width: 25px; max-width: 55px; max-width: 55px; white-space: nowrap; font-weight: 400;border-color:rgba(51, 51, 51, 1.00);border-style:solid;border-width:1px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                <span></span>
              </div>
            </li>
          </ul>
          <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
      </div>
    </div>
    <!-- End Revolution Slider -->

    <!-- Icon Blocks -->
    <section class="container g-pt-100 g-pb-70">
      <!-- Heading -->
      <div class="row justify-content-center text-center g-mb-50">
        <div class="col-lg-9">
          <h1 class="h2 g-color-black g-font-weight-600 mb-2">À Propos</h1>
          <div class="d-inline-block g-width-80 g-height-2 g-bg-primary mb-2"></div>
          <p class="lead mb-0">
            Je suis analyste développeur en BTS Services Informatiques aux Organiasations option SLAM.
            Je travaille actuellement en tant que développeur chez Actuassur Conseil situé à Saint Ouen en Ile-de-France.
          </p><br>
          <p class="lead mb-0">
            Ce portfolio a pour but de présenter les différents projets sur lesquels j'ai travaillé ces dernières années. Vous pouvez également visualiser mon CV ou le télécharger ci-dessous :
          </p>
        </div>
      </div>
      <!-- End Heading -->

      <div class="row">

        <div class="col-lg-12 g-mb-30 text-center">
          <a href="assets/pdf/CV.pdf" class="btn btn-xl u-btn-3d u-btn-indigo g-mr-10 g-mb-15" target="_blank">Télécharger mon CV</a>
        </div>

      </div>
    </section>
    <!-- End Icon Blocks -->

    <div class="g-bg-secondary g-py-100">
      <div class="container">
        <div class="text-center g-color-black g-mb-50">
          <h1 class="h2 g-color-black g-font-weight-600 mb-2">Les technologies que je maîtrises</h1>
          <div class="d-inline-block g-width-300 g-height-2 g-bg-primary mb-2"></div>
        </div>

        <div class="g-overflow-hidden">
          <div class="row text-center mx-0 g-ml-minus-1 g-mb-minus-1">
            <div class="col-md-3 px-0">
              <div class="g-brd-left g-brd-bottom g-brd-white-opacity-0_2 g-py-40">
                <img class="img-fluid g-width-120 g-opacity-0_6 g-opacity-1--hover g-transition-0_2" src="assets/img/logo/skills/html.png" alt="HTML5">
              </div>
            </div>

            <div class="col-md-3 px-0">
              <div class="g-brd-left g-brd-bottom g-brd-white-opacity-0_2 g-py-40">
                <img class="img-fluid g-width-120 g-opacity-0_6 g-opacity-1--hover g-transition-0_2" src="assets/img/logo/skills/css.png" alt="CSS3">
              </div>
            </div>

            <div class="col-md-3 px-0">
              <div class="g-brd-left g-brd-bottom g-brd-white-opacity-0_2 g-py-40">
                <img class="img-fluid g-width-120 g-opacity-0_6 g-opacity-1--hover g-transition-0_2" src="assets/img/logo/skills/js.png" alt="JavaScript">
              </div>
            </div>

            <div class="col-md-3 px-0">
              <div class="g-brd-left g-brd-bottom g-brd-white-opacity-0_2 g-py-40">
                <img class="img-fluid g-width-120 g-opacity-0_6 g-opacity-1--hover g-transition-0_2" src="assets/img/logo/skills/php.png" alt="PHP">
              </div>
            </div>

            <div class="col-md-3 px-0">
              <div class="g-brd-left g-brd-bottom g-brd-white-opacity-0_2 g-py-40">
                <img class="img-fluid g-width-120 g-opacity-0_6 g-opacity-1--hover g-transition-0_2" src="assets/img/logo/skills/laravel.png" alt="Laravel">
              </div>
            </div>

            <div class="col-md-3 px-0">
              <div class="g-brd-left g-brd-bottom g-brd-white-opacity-0_2 g-py-40">
                <img class="img-fluid g-width-120 g-opacity-0_6 g-opacity-1--hover g-transition-0_2" src="assets/img/logo/skills/java.png" alt="Java">
              </div>
            </div>

            <div class="col-md-3 px-0">
              <div class="g-brd-left g-brd-bottom g-brd-white-opacity-0_2 g-py-40">
                <img class="img-fluid g-width-120 g-opacity-0_6 g-opacity-1--hover g-transition-0_2" src="assets/img/logo/skills/androidstudio.png" alt="Android Studio">
              </div>
            </div>

            <div class="col-md-3 px-0">
              <div class="g-brd-left g-brd-bottom g-brd-white-opacity-0_2 g-py-40">
                <img class="img-fluid g-width-120 g-opacity-0_6 g-opacity-1--hover g-transition-0_2" src="assets/img/logo/skills/unity.png" alt="Unity3D">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="g-py-100">
      <div class="container">
        <div class="text-center g-mb-50">
          <h1 class="h2 g-color-black g-font-weight-600 mb-2">Mes Expériences</h1>
          <div class="d-inline-block g-width-150 g-height-2 g-bg-primary mb-2"></div>
        </div>

        <div class="row u-timeline-v1-wrap g-mx-minus-15">

          <!-- Timeline Box -->
          <div class="col-md-6 g-orientation-right g-pl-60 g-pl-40--md g-mt-60--md">
            <div class="u-timeline-v1__icon g-color-gray-light-v5 g-ml-13 g-mr-minus-8--md">
              <i class="fa fa-circle"></i>
            </div>

            <div class="g-pos-rel">
              <!-- Timeline Arrow -->
              <div class="u-triangle-inclusive-v1--left g-top-30 g-z-index-2">
                <div class="u-triangle-inclusive-v1--right__front g-brd-white-right"></div>
                <div class="u-triangle-inclusive-v1--right__back g-brd-gray-light-v4-right"></div>
              </div>
              <!-- End Timeline Arrow -->

              <!-- Timeline Content -->
              <article class="u-timeline-v1 g-pa-5">
                <figure class="g-pos-rel">
                  <img class="img-fluid w-100 g-pa-15" src="assets/img/logo/experience/actuassur.png" alt="Image Description">

                  <figcaption class="g-pos-abs g-top-20 g-left-20">
                    <span class="btn btn-sm u-btn-teal rounded-0">Assurance</span>
                  </figcaption>
                </figure>

                <div class="g-py-25 g-px-20">
                  <h3 class="g-font-weight-300 g-mb-15">
                    <a class="u-link-v5 g-color-main g-color-primary--hover" href="#!"></a>
                  </h3>

                  <div class="g-mb-30">
                    <p>
                      Dévellopement de modules PHP/JavaScript et création
                      des sites web actuassur.fr, cliackandcall.fr et quercus.fr.
                    </p>
                  </div>

                  <hr class="g-brd-gray-light-v4">

                  <div class="media g-font-size-12">
                    <i class="fa fa-briefcase g-width-30" aria-hidden="true"></i>
                    <div class="media-body align-self-center text-uppercase">
                      <p>Analyste Développeur Junior</p>
                    </div>
                    <div class="align-self-center text-uppercase">
                      <p>2016 - Aujourd'hui</p>
                    </div>
                  </div>
                </div>
              </article>
              <!-- End Timeline Content -->
            </div>
          </div>
          <!-- End Timeline Box -->
        </div>
      </div>
    </section>

    <!-- School -->
    <section class="g-py-100">
      <div class="container">
        <div class="text-center g-mb-50">
          <h1 class="h2 g-color-black g-font-weight-600 mb-2">Mes Dîplomes</h1>
          <div class="d-inline-block g-width-120 g-height-2 g-bg-primary mb-2"></div>
        </div>


        <!-- Timeline Box -->
        <ul class="row u-timeline-v2-wrap list-unstyled">
          <li class="col-md-12 g-mb-40">
            <div class="row">
              <!-- Timeline Date -->
              <div class="col-md-3 text-md-right g-pt-20--md g-pr-40--md g-mb-20">
                <h5 class="h6 mb-0">2016 - 2018</h5>
                <h4 class="h5">En cours</h4>
              </div>
              <!-- End Timeline Date -->

              <!-- Timeline Content -->
              <div class="col-md-9 g-orientation-left g-pl-40--md">
                <!-- Timeline Dot -->
                <div class="g-hidden-sm-down u-timeline-v2__icon g-top-35">
                  <i class="d-block g-width-18 g-height-18 g-bg-white g-brd-around g-brd-3 g-brd-gray-light-v5 rounded-circle"></i>
                </div>
                <!-- End Timeline Dot -->

                <article class="g-pos-rel g-bg-gray-light-v5 g-pa-30">
                  <!-- Timeline Arrow -->
                  <div class="g-hidden-sm-down u-triangle-inclusive-v1--right g-top-30 g-z-index-2">
                    <div class="u-triangle-inclusive-v1--right__back g-brd-gray-light-v5-right"></div>
                  </div>
                  <div class="g-hidden-md-up u-triangle-inclusive-v1--top g-left-20 g-z-index-2">
                    <div class="u-triangle-inclusive-v1--top__back g-brd-gray-light-v5-bottom"></div>
                  </div>
                  <!-- End Timeline Arrow -->

                  <header class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-25">
                    <h3 class="g-font-weight-300">BTS SIO SLAM</h3>
                  </header>

                  <div class="row">
                    <div class="col-md-8">
                      <p>Ecole IRIS - Paris</p>
                      <p class="mb-0">Effectué en alternance</p>
                    </div>
                  </div>
                </article>
              </div>
              <!-- End Timeline Content -->
            </div>
          </li>

          <li class="col-md-12 g-mb-40">
            <div class="row">
              <!-- Timeline Date -->
              <div class="col-md-3 text-md-right g-pt-20--md g-pr-40--md g-mb-20">
                <h4 class="h5">2013 - 2016</h4>
              </div>
              <!-- End Timeline Date -->

              <!-- Timeline Content -->
              <div class="col-md-9 g-orientation-left g-pl-40--md">
                <!-- Timeline Dot -->
                <div class="g-hidden-sm-down u-timeline-v2__icon g-top-35">
                  <i class="d-block g-width-18 g-height-18 g-bg-white g-brd-around g-brd-3 g-brd-gray-light-v5 rounded-circle"></i>
                </div>
                <!-- End Timeline Dot -->

                <article class="g-pos-rel g-bg-gray-light-v5 g-pa-30">
                  <!-- Timeline Arrow -->
                  <div class="g-hidden-sm-down u-triangle-inclusive-v1--right g-top-30 g-z-index-2">
                    <div class="u-triangle-inclusive-v1--right__back g-brd-gray-light-v5-right"></div>
                  </div>
                  <div class="g-hidden-md-up u-triangle-inclusive-v1--top g-left-20 g-z-index-2">
                    <div class="u-triangle-inclusive-v1--top__back g-brd-gray-light-v5-bottom"></div>
                  </div>
                  <!-- End Timeline Arrow -->

                  <header class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-25">
                    <h3 class="g-font-weight-300">Baccalauréat Professionnelle SEN option TR</h3>
                  </header>

                  <div class="row">
                    <div class="col-md-8">
                      <p>Lycée Château-Blanc - Châlette-sur-Loing</p>
                    </div>
                  </div>
                </article>
              </div>
              <!-- End Timeline Content -->
            </div>
          </li>

          <li class="col-md-12">
            <div class="row">
              <!-- Timeline Date -->
              <div class="col-md-3 text-md-right g-pt-20--md g-pr-40--md g-mb-20">
                <h4 class="h5">2013-2015</h4>
              </div>
              <!-- End Timeline Date -->

              <!-- Timeline Content -->
              <div class="col-md-9 g-orientation-left g-pl-40--md">
                <!-- Timeline Dot -->
                <div class="g-hidden-sm-down u-timeline-v2__icon g-top-35">
                  <i class="d-block g-width-18 g-height-18 g-bg-white g-brd-around g-brd-3 g-brd-gray-light-v5 rounded-circle"></i>
                </div>
                <!-- End Timeline Dot -->

                <article class="g-pos-rel g-bg-gray-light-v5 g-pa-30">
                  <!-- Timeline Arrow -->
                  <div class="g-hidden-sm-down u-triangle-inclusive-v1--right g-top-30 g-z-index-2">
                    <div class="u-triangle-inclusive-v1--right__back g-brd-gray-light-v5-right"></div>
                  </div>
                  <div class="g-hidden-md-up u-triangle-inclusive-v1--top g-left-20 g-z-index-2">
                    <div class="u-triangle-inclusive-v1--top__back g-brd-gray-light-v5-bottom"></div>
                  </div>
                  <!-- End Timeline Arrow -->

                  <header class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-25">
                    <h3 class="g-font-weight-300">BEP SEN</h3>
                  </header>

                  <div class="row">
                    <div class="col-md-8">
                      <p>Lycée Château-Blanc - Châlette-sur-Loing</p>
                    </div>
                  </div>
                </article>
              </div>
              <!-- End Timeline Content -->
            </div>
          </li>
        </ul>
        <!-- End Timeline Box -->
      </div>
    </section>
    <!-- End School -->

    <!-- Call to Action -->
    <section class="g-bg-secondary">
      <div class="container text-center g-py-100">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <div class="g-mb-50">
              <h2 class="h2 g-color-black g-font-weight-600 mb-2">Envie d'en savoir plus</h2>
              <div class="d-inline-block g-width-30 g-height-2 g-bg-primary mb-2"></div>
              <p class="lead mb-0">
                Si vous souhaitez en savoir plus sur moi vous pouvez consulter mes projets accomplis ou me contacter.
              </p>
            </div>
            <a class="btn btn-md u-btn-outline-black g-font-size-default text-uppercase g-rounded-50 g-py-12 g-px-30 mx-1 g-mb-20" href="{{ route('projects') }}">Mes Projets</a>
            <a class="btn btn-md u-btn-primary g-font-size-default text-uppercase g-rounded-50 g-py-12 g-px-30 mx-1 g-mb-20" href="{{ route('contact') }}">Me contacter</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Call to Action -->
@endsection

@section('footer')
  <!-- JS Revolution Slider -->
  <script src="../../assets/vendor/revolution-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script src="../../assets/vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>

  <script src="../../assets/vendor/revolution-slider/revolution-addons/particles/js/revolution.addon.particles.min.js"></script>

  <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
  <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
  <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
  <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
      // initialization of slider revolution
      var tpj = jQuery,
          revapi1174;

      tpj(document).ready(function () {
          if (tpj("#rev_slider_1174_1").revolution == undefined) {
              revslider_showDoubleJqueryError("#rev_slider_1174_1");
          } else {
              revapi1174 = tpj("#rev_slider_1174_1").show().revolution({
                  sliderType: "hero",
                  jsFileLocation: "../../assets/vendor/revolution-slider/revolution/js/",
                  sliderLayout: "fullscreen",
                  dottedOverlay: "none",
                  delay: 9000,
                  navigation: {},
                  responsiveLevels: [1240, 1024, 778, 480],
                  visibilityLevels: [1240, 1024, 778, 480],
                  gridwidth: [1240, 1024, 778, 480],
                  gridheight: [868, 768, 960, 720],
                  lazyType: "none",
                  parallax: {
                      type: "scroll",
                      origo: "slidercenter",
                      speed: 400,
                      levels: [10, 15, 20, 25, 30, 35, 40, -10, -15, -20, -25, -30, -35, -40, -45, 55]
                  },
                  shadow: 0,
                  spinner: "off",
                  autoHeight: "off",
                  fullScreenAutoWidth: "off",
                  fullScreenAlignForce: "off",
                  fullScreenOffsetContainer: "",
                  fullScreenOffset: "60px",
                  disableProgressBar: "on",
                  hideThumbsOnMobile: "off",
                  hideSliderAtLimit: 0,
                  hideCaptionAtLimit: 0,
                  hideAllCaptionAtLilmit: 0,
                  debugMode: false,
                  fallbacks: {
                      simplifyAll: "off",
                      disableFocusListener: false
                  }
              });
          }
      });

      $(document).on('ready', function () {
          // initialization of carousel
          $.HSCore.components.HSCarousel.init('.js-carousel');

          // initialization of tabs
          $.HSCore.components.HSTabs.init('[role="tablist"]');

          // initialization of go to
          $.HSCore.components.HSGoTo.init('.js-go-to');
      });

      $(window).on('load', function () {
          // initialization of header
          $.HSCore.components.HSHeader.init($('#js-header'));
          $.HSCore.helpers.HSHamburgers.init('.hamburger');

          // initialization of HSMegaMenu component
          $('.js-mega-menu').HSMegaMenu({
              event: 'hover',
              pageContainer: $('.container'),
              breakpoint: 991
          });
      });

      $(window).on('resize', function () {
          setTimeout(function () {
              $.HSCore.components.HSTabs.init('[role="tablist"]');
          }, 200);
      });
  </script>
@endsection
