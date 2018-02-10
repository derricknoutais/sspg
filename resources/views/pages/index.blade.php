<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Services de Proximité Gabon</title>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <header id="accueil">
    	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    		<a class="navbar-brand" href="#" >SSPG</a>
    		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarNav">
    			<ul class="navbar-nav ml-auto">
    				<li class="nav-item active">
    					<a class="nav-link" href="#accueil">Acceuil<span class="sr-only">(current)</span></a>
    				</li>
    				<li class="nav-item">
    					<a class="nav-link" href="#services">Services</a>
    				</li>
    				<li class="nav-item">
    					<a class="nav-link" href="#team">Notre Équipe</a>
    				</li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contactez-nous</a>
                    </li>
    			</ul>
    		</div>
    	</nav>
    	<h1 class="text-center "><span class="bg-dark">Société des Services de Proximité du Gabon</span></h1>
    	<div class="col-md-12 text-center">
    		<button class="btn " id="call-to-action"><a href="#contact">Contactez-Nous</a></button>
    	</div>
    </header>
    @include('partials.serviceCards')
    <section id="rr">
    </section>
    <section id="team" class="bg-dark container-fluid">
        <h2 class="text-center m-3">Notre équipe</h2>
        <div class="row" id="team-pictures">
            <div class="col-md-6 text-center col-xs-12">
                <img src="{{ asset('images/ornellia.png') }}" class="team-picture" id="ornellia">
                <h3 class="mt-3">Ornellia Ozenga</h3>
                <h5>Directrice Générale</h5>
                <h6>Master en Pétrochimie</h6>
            </div>
            <div class="col-md-6 text-center col-xs-12">
                <img src="{{ asset('images/francis.png') }}" class="team-picture" id="francis">
                <h3 class="mt-3">Francis Ngoye</h3>
                <h5>Directeur Général Adjoint</h5>
                <h6>PhD en Pétrochimie / Prof d'université</h6>
            </div>
        </div>
    </section>
    <section id="contact" class="container-fluid">
        <div class="row ">
            <div class="col-md-12">
                <h3 class="text-center">Contact</h3>
            </div>
        </div>
        <div class="col-md-12" id="map"></div>
        <script>
          function initMap() {
            var uluru = {lat: -0.729614, lng: 8.781905};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 18,
              center: uluru
            });
            var marker = new google.maps.Marker({
              position: uluru,
              map: map
            });
          }
        </script>
        <div class="row m-5">
            <div class="col-md-12">
                <h4><i class="fas fa-phone"></i> 02-47-62-63 / 07-68-80-11</h4>
                <h4><i class="fas fa-at"></i> servicesdeproximiteg@gmail.com</h4>
                <h4><i class="fas fa-map-marker"></i> École St-André, Boulevard Léon Mba, Port-Gentil</h4>
            </div>
        </div>
    </section>
    <footer class="footer bg-dark">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                     <p>Copyright © 2017 Société de Service de Proximité du Gabon</p>
                </div>
                <div class="col-md-3">
                    <a href="https://www.facebook.com/stapog/" class="social">
                        <i class="fab fa-facebook-square fa-3x"></i>
                    </a>
                    <a href="#" class="social">
                        <i class="fab fa-twitter fa-3x"></i>
                    </a>
                    <a href="#" class="social">
                        <i class="fab fa-instagram fa-3x"></i>
                    </a>
                </div>
                <div class="col-md-4">
                     <p>Site créé et hébergé par <a href="https://www.logici.ga">Service Digital Gabon</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9VYUmTh8J7rx9_tibRPX67Z3wWMvmRi8&callback=initMap">
    </script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
