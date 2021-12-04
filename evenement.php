<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>L'évènement</title>
	<link rel="stylesheet" href="../assets/css/style.css">
</head>
 

    <body data-barba="wrapper">
        <!-- Unchanged Content -->

        <div class="main-wrapper flex-col">

	        <div class="header">

	        	<a class="go-back" href="/index">Accueil</a>


				<a href="/index" style="height: 100%;">
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
	           	<h1>L'évènement</h1>

	           	<p style="text-align: center;">Venez célébrer notre mariage sur le thème :</p>

	           	<!-- <p class="uppercase sans"><strong>thème</strong></p>
	           	<p>Notre thème sera : Nature romantique</p> -->
	           	<img src="assets/img/theme.svg">

	           	<p class="uppercase sans" style="margin-top: 60px"><strong>DRESSCODE</strong></p>

	           	<p>Privilégiez les couleurs claires</p>
	           	<div class="code-couleur-wrapper">
	           		<div class="code-couleur cc-1"><span class="hide">Papaye</span></div>
	           		<div class="code-couleur cc-2"><span class="hide">Lin</span></div>
	           		<div class="code-couleur cc-3"><span class="hide">Lavande</span></div>
	           		<div class="code-couleur cc-4"><span class="hide">Champagne rose</span></div>
	           		<div class="code-couleur cc-5"><span class="hide">Ivoire</span></div>
	           		<div class="code-couleur cc-6"><span class="hide">Creme</span></div>
	           		<div class="code-couleur cc-7"><span class="hide">Cultured</span></div>
	           		<div class="code-couleur cc-8"><span class="hide">Ton de lin</span></div>
	           		<div class="code-couleur cc-9"><span class="hide">Champagne rose</span></div>
	           		<div class="code-couleur cc-10"><span class="hide">Champagne profond</span></div>
	           	</div>
	           	<p>La couleur blanche est réservée pour la mariée !</p>

	           	<p class="uppercase sans" style="margin-top: 60px"><strong>Programme</strong></p>
	           	<p>Vous êtes conviés à la cérémonie qui débutera à 16h</p>
	           	<p>Le programme sera disponible bientôt.</p>
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
    <script src="assets/js/event.js"></script> 
</body>
</html>

