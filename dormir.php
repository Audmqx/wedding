<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Où dormir ?</title>
	<link rel="stylesheet" href="../assets/css/style.css">
</head>
 

    <body data-barba="wrapper">
        <!-- Unchanged Content -->

        <div class="main-wrapper flex-col">

        <div class="header">

        	<a class="go-back" href="/index.php">Accueil</a>


			<a href="/index.php" style="height: 100%;">
			<?php include 'views/components/logo.php'; ?> 
			</a>

			<div class="frame">
				<div class="frame__button">
					<button class="unbutton button-menu" aria-label="Open menu">
						Menu
					</button>
				</div>
			</div>
		</div>

	          <div class="lieu-container">

	           	<h1>Où dormir ?</h1>

	           	<p>Sur la carte ci-dessous, vous pouvez vous déplacer tout autour du Jas du Pébrier, chaque point rose avec un lit dessus est un endroit ou pouvez dormir</p>

	 			<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1OmGV_Qh2nu0mUPPUO8w-WpageSPCo-RO" width="640" height="480"></iframe>


	 			<p>Une liste non exaustive de lieu ou vous pouvez dormir :</p>
	 			<ul>
	 				<li>
	 				<a href="https://villa-35.com/" target="_blank">Villa-35, chambre d'hôte
					<span><br>5 min en voiture</span></a>
					</li>

					<li>
	 				<a href="https://hotelmania.net/hotel/roquebrune-sur-argens/le-chene-et-leau/" target="_blank">Le chêne et l'eau, hôtel
					<span><br>3 min en voiture</span></a>
					</li>

					<li>
	 				<a href="https://laureo.fr/" target="_blank">Le Mobilhome Lauréo
					<span><br>5 min en voiture</span></a>
					</li>

					<li>
	 				<p>Une multitude de campings (à voir sur la carte au-dessus)
					<span><br>entre 3 et 10 min en voiture</span></p>
					</li>

					<li>
	 				<p>N'hésitez pas à regarder AirBnb, des biens à louer sont posté souvent comme ce mas.
	 					<span><br>1min en voiture</span>
	 					<div class="airbnb-embed-frame" data-id="25658711" data-view="home" style="width:450px;height:300px;"><a href="https://www.airbnb.fr/rooms/25658711?check_in=2022-06-24&amp;check_out=2022-06-25&amp;guests=1&amp;adults=1&amp;s=66&amp;source=embed_widget">Voir sur Airbnb</a><a href="https://www.airbnb.fr/rooms/25658711?check_in=2022-06-24&amp;check_out=2022-06-25&amp;guests=1&amp;adults=1&amp;s=66&amp;source=embed_widget" rel="nofollow">Mas du domaine de l&#x27;Orme</a><script async="" src="https://www.airbnb.fr/embeddable/airbnb_jssdk"></script></div>
					</li>
	 			</ul>
	 				<div class="sleep_svg-wrapper" style="width: fit-content;float: right;">
 				<?php include 'views/components/dormir.php'; ?>
 				<div class="gooey"></div>
 				</div>
 			</div> 	
        </div>
        <!-- Unchanged Content -->


<?php include 'views/components/menu.php'; ?>
 </body>
    <!-- Unchanged Content -->



 	<div class="preloader">
 		<?php include 'views/components/logo.php'; ?> 
 	</div>

	<footer>
		<div id="countdown"></div>
	</footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js" integrity="sha512-CPA5LMoJI/a5HkSIAKcBtFXe4gqGjPUL2ExF/3PmhrrHI17wod9xOqqF+0WZQRKIIq0KwF8oG5BaiWobtrke3A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>	
    <script src="https://cdn.jsdelivr.net/npm/@barba/core"></script>
    <script src="assets/js/app.js"></script> 
</body>
</html>

