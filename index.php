
<?php 
	
if ($_REQUEST['lg'] == 'es'){
	include 'language/es.php';
} else if ($_REQUEST['lg'] == 'en'){
	include 'language/en.php';
} else if ($_REQUEST['lg'] == 'pt'){
	include 'language/pt.php';
} else if ($_REQUEST['lg'] == 'fr'){
	include 'language/fr.php';
} else {
	include 'language/es.php';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="webthemez">
    <title><?php  echo TITULO; ?></title>
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet"> 
	
	<link href="flag-icon-css-master/assets/docs.css" rel="stylesheet">
	<link href="flag-icon-css-master/css/flag-icon.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/slider-style.css" />
	<link rel="stylesheet" type="text/css" href="css/slider-custom.css" />
	<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
	
	<!--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>-->
	
	<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico"> 
</head> 

	<!--
	<style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0;
        padding: 0;
      }

    </style>

    <script>
// The following example creates a marker in Stockholm, Sweden
// using a DROP animation. Clicking on the marker will toggle
// the animation between a BOUNCE animation and no animation.

var stockholm = new google.maps.LatLng(42.886245, -8.529100);
var parliament = new google.maps.LatLng(42.886245, -8.529100);
var marker;
var map;

function initialize() {
  var mapOptions = {
    zoom: 20,
    center: stockholm
  };

  map = new google.maps.Map(document.getElementById('map-canvas'),
          mapOptions);

  marker = new google.maps.Marker({
    map:map,
    draggable:true,
    animation: google.maps.Animation.DROP,
    position: parliament
  });
  google.maps.event.addListener(marker, 'click', toggleBounce);
}

function toggleBounce() {

  if (marker.getAnimation() != null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
	-->

<body id="home">
    <header id="header">
        <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/iconmonte96.png" alt="logo"></a>
					 
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home"><?php  echo HOME; ?></a></li>      
                        <li class="scroll"><a href="#services"><?php  echo SERVICES; ?></a></li>
                        <li class="scroll"><a href="#about"><?php  echo ABOUT; ?></a></li> 
                        <!--<li class="scroll"><a href="#our-team">Nuestro Equipo</a></li>-->
                        <li class="scroll"><a href="#pricing"><?php  echo PRICING; ?></a></li>
						<li class="scroll"><a href="#portfolio"><?php  echo PORTFOLIO; ?></a></li>
                        <li class="scroll"><a href="#contact-us"><?php  echo CONTACT; ?></a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section class="demo-2">
	       <div id="slider" class="sl-slider-wrapper">
				
				<div class="sl-slider">
				<h3>
					<a href="?lg=es" ><span class="flag-icon flag-icon-es" style="z-index:2; margin: 0 0 0 20px;" ></span></a>
					<a href="?lg=en" ><span class="flag-icon flag-icon-gb" style="z-index:2; margin: 0 0 0 2px;" ></span></a>
					<a href="?lg=fr" ><span class="flag-icon flag-icon-fr" style="z-index:2; margin: 0 0 0 2px;" ></span></a>
					<a href="?lg=pt" ><span class="flag-icon flag-icon-pt" style="z-index:2; margin: 0 0 0 2px;" ></span></a>
				</h3>
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-1"></div>
							 
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-2"></div>
							 
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-3"></div>
							 
						</div>
					</div>					
				</div><!-- /sl-slider -->

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span> 
				</nav>

			</div><!-- /slider-wrapper -->

    </section><!--/#main-slider-->

 <section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title wow fadeInDown"><?php  echo SERVICES-ENTRY; ?></h2>
                <!--/<p class="wow fadeInDown"> Texto</p> -->
            </div>

            <div class="row">
                <div class="features">
				
				      <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bar-chart"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><?php  echo SERVICE1-TITLE; ?></h4>
                                <p>Wifi en todo el recinto, incluido habitaciones.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
					
					<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Servicio 24/7</h4>
                                <p>Servicio de atención 24 horas.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
					
					<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-coffee"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Cocina </h4>
                                <p>Microhondas, Máquina de café, y otros utensilios.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
					
					 <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-recycle"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Lavadora</h4>
                                <p>Servicio de Lavadora y Secadora.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
					
					 <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Consigna</h4>
                                <p>Taquillas y almacenamiento de bicicletas.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Ordenador con Internet</h4>
                                <p>Ordenador con acceso a internet para clientes.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
			
                </div>
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->

  
 <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Situación</h2>
                <p class="wow fadeInDown">Rúa das Fontiñas, 59
Santiago de Compostela
A Coruña. <br>A 5 min de la Catedral y en el camino francés.</p>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
					
					<div class="img-responsive" >
					<iframe src="https://www.google.com/maps/d/embed?mid=zxZuoH2_BMjU.kMvcuVJQuGv4" width="100%" height="500px" ></iframe>
					</div>
					
					<!--<div id="map-canva	s"></div>-->
					
                  <!--<img class="img-responsive" src="images/about.jpg" alt="">-->
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">Albergue Monterrey</h3>
                    <p> El abergue Monterrey abrirá sus puertas este año, 2015, es un albergue para peregrinos y turistas que vienen a Santiago, es nuevo y está bien equipado, muy cerca de la catedral y en el propio camino francés .</p>
<ul class="listarrow">
<li><i class="fa fa-angle-double-right"></i><i class="fa fa-bed"></i>&nbsp;40 Plazas</li>
<li><i class="fa fa-angle-double-right"></i><i class="fa fa-list-ol"></i>&nbsp;Habitaciones de 4 camas</li>
<li><i class="fa fa-angle-double-right"></i><i class="fa fa-language"></i></i>&nbsp;Hablamos Español, Inglés y Francés</li>
<li><i class="fa fa-angle-double-right"></i><i class="fa fa-male"></i><i class="fa fa-female"></i>Baños y duchas independientes</li>
<li><i class="fa fa-angle-double-right"></i><i class="fa fa-home"></i>&nbsp;Sala común</li> 
<li><i class="fa fa-angle-double-right"></i><i class="fa fa-television"></i>&nbsp;Televisión</li>
<li><i class="fa fa-angle-double-right"></i><i class="fa fa-wifi"></i><i class="fa fa-laptop"></i>&nbsp;Internet</li>
<li><i class="fa fa-angle-double-right"></i><i class="fa fa-recycle"></i>&nbsp;Lavadora</li>
<li><i class="fa fa-angle-double-right"></i><i class="fa fa-suitcase"></i>&nbsp;Taquilla</li>
<li><i class="fa fa-angle-double-right"></i><i class="fa fa-coffee"></i>&nbsp;Máquina Expendedora</li>
<li><i class="fa fa-angle-double-right"></i><i class="fa fa-plug"></i>&nbsp;Enchufe Europeo y Americano</li>
<li><i class="fa fa-angle-double-right"></i><i class="fa fa-wheelchair"></i>&nbsp;Acceso Minusválidos</li>
<li><i class="fa fa-angle-double-right"></i><i class="fa fa-credit-card"></i>&nbsp;Aceptamos Visa, MasterCard</li>
<li><i class="fa fa-angle-double-right"></i><i class="fa fa-plus"></i>&nbsp;Más servicios</li>

</ul> 

                </div>
            </div>
        </div>
    </section>
	
	
	
	  <section id="business-stats2">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Localización</h2>
                <p class="wow fadeInDown">Estamos en pleno Santiago, a 5 min de la Catedral, y muy bien comunicados.</p>
            </div>

            <div class="row text-center">
                <div class="col-md-2 col-sm-6 col-xs-12">
					<i class="fa fa-university fa-2x" style="margin-bottom:20px;"></i>
					<div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="business-stats" data-digit="1.5" data-duration="1000"></div>
                        <strong>km.<br> Catedral, Obradoiro </strong>
						
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
				<i class="fa fa-bus fa-2x" style="margin-bottom:20px;"></i>
				    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="business-stats" data-digit="500" data-duration="1000"></div>
                        <strong>metros.<br>Estación de Autobuses</strong>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
				<i class="fa fa-train fa-2x" style="margin-bottom:20px;"></i>
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="business-stats" data-digit="2.5" data-duration="1000"></div>
                        <strong>km.<br>Estación de Tren</strong>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
				<i class="fa fa-plane fa-2x" style="margin-bottom:20px;"></i>
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="business-stats" data-digit="500" data-duration="1000"></div>
                        <strong>metros.<br>Autobús al Aeropuerto</strong>
                    </div>
                </div>
				<div class="col-md-2 col-sm-6 col-xs-12">
				<i class="fa fa-plus-square fa-2x" style="margin-bottom:20px;"></i>&nbsp;<i class="fa fa-shopping-cart fa-2x" style="margin-bottom:20px;"></i>
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
                        <div class="business-stats" data-digit="300" data-duration="1000"></div>
                        <strong>metros.<br>Farmacia <br>Centro Comercial</strong>
                    </div>
                </div>
				<div class="col-md-2 col-sm-6 col-xs-12">
				<i class="fa fa-star fa-2x" style="margin-bottom:20px;"></i>
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms">
                        <div class="business-stats" data-digit="2.0" data-duration="1000"></div>
                        <strong>km.<br>Ciudad de la Cultura</strong>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#business-stats-->
	
	
	
	<!--/#about-->
<!--<section id="hero-action-section" class="hero-action-section">
		
		<div class="container ow-section">
			<h3 class="hero-action-subtitle">We Design your Awesome Dreams</h3>
			<h4 class="hero-action-title">Phasellus ut euismod massa, eu eleifend</h4>
			<p class="hero-action-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa semper aliquam quis mattis quam. Morbi vitae tortor tempus, placerat leo et.
			</p>
			<p><a href="#" class="get-started">Get It Now!!</a></p>
		</div>
	</section> -->
   <!--
   <section id="our-team">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown">
OUR TRAINERS
</h2>
<p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p> 
            </div>
			
			 	
            <div class="row text-center">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/01.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Micky Deo</h3>
                            <span>Founder</span> 
                        </div> 
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/02.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Mike Timobbs</h3>
                            <span>President</span> 
                        </div> 
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/03.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Remo Silvaus</h3>
                            <span>Sr. Manager</span> 
                        </div> 
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/04.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Niscal Deon</h3>
                            <span>Manager</span> 
                        </div> 
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
	--><!--/#our-team-->
	
	<!--
   <section class="testimonial-area" id="testimonial">
			<div class="container">
				<div class="section-header">
                <h2 class="section-title wow fadeInDown">What our clients says</h2>
                <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
				<div class="row">
					<div class="col-md-4">
						<div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
							<div class="row">
								<div class="col-xs-12">
									<blockquote>Sontrary to popular belief, Lorem Ipsuis no simply random text. It has roots in a piece of classical Layears old. belief, Lorem Ipsuis not simply</blockquote>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-3">
									<img src="images/pic1.jpg" alt="client">
								</div>
								<div class="col-xs-9 half-gutter">
									<h5>John Bond</h5>
									<h6>Lorem Ipsuis simply</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
							<div class="row">
								<div class="col-xs-12">
									<blockquote>Tontrary to popular belief, Lorem Ipsuis no simply random text. It has roots in a piece of classical Layears old. belief, Lorem Ipsuis not simply</blockquote>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-3">
									<img src="images/pic2.jpg" alt="client">
								</div>
								<div class="col-xs-9 half-gutter">
									<h5>John Bond</h5>
									<h6>Lorem Ipsuis simply</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
							<div class="row">
								<div class="col-xs-12">
									<blockquote>Aontrary to popular belief, Lorem Ipsuis no simply random text. It has roots in a piece of classical Layears old. belief, Lorem Ipsuis not simply</blockquote>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-3">
									<img src="images/pic1.jpg" alt="client">
								</div>
								<div class="col-xs-9 half-gutter">
									<h5>John Bond</h5>
									<h6>Lorem Ipsuis simply</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		-->
   


    <section id="pricing">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Tarifas</h2>
                <!--<p class="wow fadeInDown">Estas son nuestras tarifas dependiendo de la época del año <br> estamos abiertos todo el año.</p>-->
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="0ms">
                        <ul class="pricing">
                            <li class="plan-header">
								<div class="plan-name">
                                    Temporada<br>Baja
                                </div>
                                <div class="price-duration">
                                    <span class="price">
                                        €10
                                    </span>
                                    <span class="duration">
                                        /noche
                                    </span>
									<br>
									 <span class="duration">
									 <i class="fa fa-calendar"></i>
                                        1 Noviembre - 1 Marzo
                                    </span>
                                </div>
                            </li>
                            <li><i class="fa fa-bed"></i><strong>&nbsp;&nbsp;&nbsp;1</strong> Persona/Cama</li>
                            <li><i class="fa fa-male"></i><i class="fa fa-female"></i>&nbsp;&nbsp;&nbsp;Aseos y Duchas</li>
                            <li><i class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;Acceso 24 horas</li>
                            <li><i class="fa fa-wifi"></i>&nbsp;&nbsp;&nbsp;Internet</li>
                            <li><i class="fa fa-laptop"></i>&nbsp;<i class="fa fa-television"></i>&nbsp;&nbsp;&nbsp;Ordenador y TV</li>
							<li><i class="fa fa-coffee"></i>&nbsp;<i class="fa fa-futbol-o"></i>&nbsp;&nbsp;Cocina y Zonas Comunes</li>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#contact-us">Reservar!</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="100ms">
                        <ul class="pricing">
                            <li class="plan-header">
								<div class="plan-name">
                                    Temporada<br>Media
                                </div>
                                <div class="price-duration">
                                    <span class="price">
                                        €12
                                    </span>
                                    <span class="duration">
                                        /noche
                                    </span>
									<br>
									 <span class="duration">
									 <i class="fa fa-calendar"></i>
                                        1 Marzo - 1 Junio
                                    </span>
                                </div>
                            </li>
                            <li><i class="fa fa-bed">&nbsp;&nbsp;&nbsp;</i><strong>  1</strong> Persona/Cama</li>
                            <li><i class="fa fa-male"></i><i class="fa fa-female"></i>&nbsp;&nbsp;&nbsp;Aseos y Duchas</li>
                            <li><i class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;Acceso 24 horas</li>
                            <li><i class="fa fa-wifi"></i>&nbsp;&nbsp;&nbsp;Internet</li>
                            <li><i class="fa fa-laptop"></i>&nbsp;<i class="fa fa-television"></i>&nbsp;&nbsp;&nbsp;Ordenador y TV</li>
							<li><i class="fa fa-coffee"></i>&nbsp;<i class="fa fa-futbol-o"></i>&nbsp;&nbsp;Cocina y Zonas Comunes</li>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#contact-us">Reservar!</a></li>
                        </ul>
                    </div>
                </div>
				<div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="200ms">
                        <ul class="pricing">
                            <li class="plan-header">
								<div class="plan-name">
                                    Temporada<br>Alta
                                </div>
                                <div class="price-duration">
                                    <span class="price">
                                        €14
                                    </span>
                                    <span class="duration">
                                        /noche
                                    </span>
									<br>
									 <span class="duration">
									 <i class="fa fa-calendar"></i>
                                        1 Junio - 1 Noviembre
                                    </span>
                                </div>
                            </li>
                            <li><i class="fa fa-bed">&nbsp;&nbsp;&nbsp;</i><strong>  1</strong> Persona/Cama</li>
                            <li><i class="fa fa-male"></i><i class="fa fa-female"></i>&nbsp;&nbsp;&nbsp;Aseos y Duchas</li>
                            <li><i class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;Acceso 24 horas</li>
                            <li><i class="fa fa-wifi"></i>&nbsp;&nbsp;&nbsp;Internet</li>
                            <li><i class="fa fa-laptop"></i>&nbsp;<i class="fa fa-television"></i>&nbsp;&nbsp;&nbsp;Ordenador y TV</li>
							<li><i class="fa fa-coffee"></i>&nbsp;<i class="fa fa-futbol-o"></i>&nbsp;&nbsp;Cocina y Zonas Comunes</li>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#contact-us">Reservar!</a></li>
                        </ul>
                    </div>
                </div>
				<div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="300ms">
                        <ul class="pricing">
						<li class="plan-header">
								<div class="plan-name">
                                    Servicios
                                </div>
                                
                            </li>
                            <li><i class="fa fa-recycle"></i>&nbsp;&nbsp;&nbsp;Lavadora: 4€</li>
                            <li><i class="fa fa-diamond"></i>&nbsp;&nbsp;&nbsp;Secadora: 4€</li>
                            <li><i class="fa fa-briefcase"></i>&nbsp;&nbsp;&nbsp;Taquilla: 1€</li>
                            <li><i class="fa fa-bicycle"></i>&nbsp;&nbsp;&nbsp;Bicicleta: 1€</li>
							<li><i class="fa fa-bug"></i>&nbsp;&nbsp;&nbsp;Otros Consigna: 1€</li>
							<li><i class="fa fa-print"></i>&nbsp;&nbsp;&nbsp;Impresión de documentos: 1€</li>
							<li><i class="fa fa-coffee"></i>&nbsp;&nbsp;&nbsp;Café: 1€</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#pricing-->
   
     <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Galería</h2>
                <!--<p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>-->
            </div>

            <div class="text-center" style="display:none;">
                <ul class="portfolio-filter">
                    <li><a class="active" href="#" data-filter="*">All Works</a></li>
                    <li><a href="#" data-filter=".designing">Designing</a></li>
                    <li><a href="#" data-filter=".mobile">Mobile App</a></li>
                    <li><a href="#" data-filter=".development">Development</a></li>
                </ul><!--/#portfolio-filter-->
            </div>

            <div class="portfolio-items">
                <div class="portfolio-item designing">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/01.jpg" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="images/portfolio/01.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item mobile development">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/02.jpg" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="images/portfolio/02.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item designing">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/03.jpg" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="images/portfolio/03.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item mobile">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/04.jpg" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="images/portfolio/04.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item designing development">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/05.jpg" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="images/portfolio/05.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item mobile">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/06.jpg" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="images/portfolio/06.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item designing development">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/07.jpg" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="images/portfolio/07.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item mobile">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/08.jpg" alt="">
                        <div class="portfolio-info"> 
                            <a class="preview" href="images/portfolio/08.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
            </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->
	
	
	  <section class="testimonial-area" id="testimonial">
			<div class="container">
				<div class="section-header">
                <h2 class="section-title wow fadeInDown">Opiniones de nuestros clientes</h2>
                <p class="wow fadeInDown">Agradecemos vuestros comentarios en redes sociales, TripAdvisor, HostelWorld, etc...</p>
            </div>
				<div class="row">
					<div class="col-md-4">
						<div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
							<div class="row">
								<div class="col-xs-12">
									<blockquote>Bienvenidos al Albergue Monterrey, esperamos vuestra visita pronto</blockquote>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-3">
									<img src="images/coment1.png" alt="client">
								</div>
								<div class="col-xs-9 half-gutter">
									<h5>Javier Corral</h5>
									<h6>Albergue Monterrey</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
							<div class="row">
								<div class="col-xs-12">
									<blockquote>Muy nuevo y cercano a la Catedral, así como al centro de la ciudad y puntos de interés.</blockquote>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-3">
									<img src="images/coment2.png" alt="client">
								</div>
								<div class="col-xs-9 half-gutter">
									<h5>Miguel</h5>
									<h6>Esperando visitar pronto Santiago</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
							<div class="row">
								<div class="col-xs-12">
									<blockquote>Los peregrinos desearán quedarse aquí varios dias a disfrutar de Santiago</blockquote>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-3">
									<img src="images/coment3.png" alt="client">
								</div>
								<div class="col-xs-9 half-gutter">
									<h5>Santiago el Mayor</h5>
									<h6>Me encanta!</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <section id="business-stats">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Datos del Albergue</h2>
                <!--<p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>-->
            </div>

            <div class="row text-center">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="business-stats" data-digit="999" data-duration="1000"></div>
                        <strong>Clientes Satisfechos</strong>
                    </div>
					<i class="fa fa-users fa-2x"></i>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="business-stats" data-digit="333" data-duration="1000"></div>
                        <strong>Reservas Atendidas</strong>
                    </div>
					<i class="fa fa-check-square-o fa-2x"></i>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="business-stats" data-digit="78" data-duration="1000"></div>
                        <strong>Valoraciones Positivas</strong>
                    </div>
					<i class="fa fa-thumbs-o-up fa-2x"></i>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="business-stats" data-digit="40" data-duration="1000"></div>
                        <strong>Plazas</strong>
                    </div>
					<i class="fa fa-bed fa-2x"></i>
                </div>
            </div>
        </div>
    </section><!--/#business-stats-->

  
  <section id="contact-us">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Contacto</h2>
                <p class="wow fadeInDown">Información y Reservas individuales o de grupo, llámanos o envíanos un correo para más información <br>Atendemos en Español, Ingles, Francés y Gallego.</p>
            </div>
        </div>
  
        <div class="container">
            <div class="container contact-info">
                <div class="row">
				  <div class="col-sm-4 col-md-4">
                        <div class="contact-form">
                            <h3>Albergue Monterrey</h3>

                            <address>
                              <strong>Santiago de Compostela.</strong><br>
                              Rúa das Fontiñas, 59<br>
                              C.P. 15703, La Coruña <br>
							  España <br>
                              <abbr title="Phone">Teléfono:</abbr><a href="tel:+34 981 587557"> +34 981 587557</a>
							  <br>
							  <abbr title="E-Mail">E-Mail:</abbr><a href="mailto:rstmonterrey@gmail.com?Subject=Albergue%20Monterrey" target="_top"> rstmonterrey@gmail.com</a>
                            </address>
					</div></div>
                    <div class="col-sm-8 col-md-8">
                        <div class="contact-form">
                       
                            <form id="main-contact-form" name="contact-form" method="post" action="#">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Nombre" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Asunto" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="8" placeholder="Mensaje" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
   </section><!--/#bottom-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 Albergue Monterrey S.L.  Diseñado por <a target="_blank" href="http://dfcsolutions.es/" title="Soluciones Informáticas">DFCsolutions.es</a>
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="js/jquery.slitslider.js"></script>
	<script type="text/javascript" src="js/slitslider-custom.js"></script>
    <script src="js/custom-scripts.js"></script>
</body>
</html>