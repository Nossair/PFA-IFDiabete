<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Soins du diabètes</title>
      <!--
         Template 2083 Steak House
         
         http://www.tooplate.com/view/2083-steak-house
         
         -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <!-- stylesheets css -->
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
      <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/nivo_themes/default/default.css')}}">
      <link rel="stylesheet" href="{{asset('css/hover-min.css')}}">
      <link rel="stylesheet" href="{{asset('css/flexslider.css')}}">
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
	  <style>
		.logos img{
			display: block;
			padding: 0 25px;
			max-height :140px;
		}
		.logo-ifdose{
			padding: 15px 0;
		}
          .block{
              background: rgba(255,255,255,0.4);
              opacity:1;
              overflow: hidden;
              height: 100%;
              width: 100%;
              z-index: 2;
          }
	  </style>
   </head>
   <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50" >
      <!-- Preloader section -->
      <div class="preloader">
         <div class="sk-spinner sk-spinner-pulse"></div>
      </div>
      <!-- Home section -->
      <section id="home" class="parallax-section" >
         <div ></div>

      <!--     <div class="container block" >
            <div class="row logos"  >
				<div class="col-xs-12 " style="padding: 0px;
margin: 0px;
border: none;
width: 100%;
height: 140px;
background-color: white; " >

              <img class="wow fadeInDown col-xs-4 col-sm-2 col-md-2" src="{{asset('images/s.png')}}"/>
                    <img class="wow fadeInDown col-xs-4 col-sm-2 col-md-2" src="{{asset('images/chu.png')}}"/>
                    <img class="wow fadeInDown col-xs-4 col-sm-2 col-md-2" src="{{asset('images/ump.png')}}"/>

                    <img class="wow fadeInDown col-xs-4 col-sm-2 col-md-2" src="{{asset('images/lse2i.png')}}"/>
                    <img class="wow fadeInDown col-xs-4 col-sm-2 col-md-2" src="{{asset('images/ensao.png')}}"/>
                    <img class="wow fadeInDown col-xs-4 col-sm-2 col-md-2" src="{{asset('images/faculte.jpg')}}"/>
                </div>
            </div> -->
            <div class="row">
               <div class="col-md-offset-2 col-md-8 col-xs-12" style="padding-top: 50px">
                  <!--<h1 class="wow fadeInUp" data-wow-delay="0.6s" style="font-size: 70px">IF~DOSE</h1>-->

                  <img class="wow fadeInLeft col-xs-4 col-sm-2 col-sm-offset-3 col-md-2 col-sm-offset-3"/>
                  <img class="wow fadeInRight col-xs-4 col-sm-2 col-md-2"  src="{{asset('images/service.png')}}"/>
                  <img class="wow fadeInDown col-xs-4 col-sm-2 col-md-2"/>

               </div>

               <div class="col-md-offset-2 col-md-8 col-xs-12" style="padding-top: 50px">
                  <!--<h1 class="wow fadeInUp" data-wow-delay="0.6s" style="font-size: 70px">IF~DOSE</h1>-->

                  <img class="wow fadeInLeft col-xs-4 col-sm-2 col-sm-offset-3 col-md-2 col-sm-offset-3" src="{{asset('images/chu.png')}}"/>
                  <img class="wow fadeInRight col-xs-4 col-sm-2 col-md-2"  src="{{asset('vendor/blood.svg')}}"/>
                  <img class="wow fadeInDown col-xs-4 col-sm-2 col-md-2" src="{{asset('images/ensao.jpg')}}"/>

               </div>
				  <div class="col-xs-12">
					<h1>

                        <p class="wow fadeInUp" style=" font-weight:30px; font-size:30px;" data-wow-delay="1.0s">Diabète _ Guide</p>

                        <p class="wow fadeInUp" style=" font-weight:30px" data-wow-delay="1.0s">Gestionnaire des patients diabétique au sein de CHU d'Oujda. </p>
					</h1>
					@if (Route::has('login'))
					@if (Auth::check())
					<a href="{{ url('/home') }}" class="wow fadeInUp btn btn-default hvr-bounce-to-top smoothScroll" data-wow-delay="1.3s">Page d'acceuil</a>
					@else
					<a href="{{ url('/login') }}" class="wow fadeInUp btn btn-default hvr-bounce-to-top smoothScroll" data-wow-delay="1.3s">Connexion</a>
					@endif
					@endif
				  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- javscript js -->
      <script src="{{asset('js/jquery.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
      <script src="{{asset('js/jquery.sticky.js')}}"></script>
      <script src="{{asset('js/jquery.backstretch.min.js')}}"></script>
      <script src="{{asset('js/isotope.js')}}"></script>
      <script src="{{asset('js/imagesloaded.min.js')}}"></script>
      <script src="{{asset('js/nivo-lightbox.min.js')}}"></script>
      <script src="{{asset('js/nivo-lightbox.min.js')}}"></script>
      <script src="{{asset('js/jquery.parallax.js')}}"></script>
      <script src="{{asset('js/smoothscroll.js')}}"></script>
      <script src="{{asset('js/wow.min.js')}}"></script>
      <script src="{{asset('js/custom.js')}}"></script>
   </body>
</html>