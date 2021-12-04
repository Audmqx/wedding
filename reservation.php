<?php

if (empty($_GET) && empty($_GET['n'])){
	header('Location: /');
exit;
}else{

?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Réservation</title>
	<link rel="stylesheet" href="../assets/css/style.css">

	<style type="text/css">
		

#svg_form_time {
  height: 15px;
  max-width: 80%;
  margin: 40px auto 20px;
  display: block;
}

#svg_form_time circle,
#svg_form_time rect {
  fill: white;
}

.button {
  background: var(--primary);
  border-radius: 5px;
  padding: 15px 25px;
  display: inline-block;
  margin: 10px;
  font-weight: bold;
  color: white;
  cursor: pointer;
  box-shadow:0px 2px 5px rgb(0,0,0,0.5);
}

.disabled {
  display:none;
}

input:focus, select:focus, :not('.radio') {
	outline: 1px solid var(--primary);
}

section {
	/*padding: 15px;*/
    /* max-width: 300px; */
    margin: 30px auto;
    background: white;
    background: rgba(255,255,255,0.9);
    backdrop-filter: blur(10px);
    /*box-shadow: 0px 2px 4px 1px rgb(198 111 42 / 33%);*/
    border-radius: 5px;
    transition: transform 0.2s ease-in-out;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    width: 100%;
    min-height: unset;
}


input {
  width: 50%;
  margin: 5px;
  display: inline-block;
  padding: 12px;
  box-sizing: border-box;
  border-radius: 5px;
  border: 1px solid lightgrey;
  font-size: 1em;
  font-family:inherit;
  background:white;
  color: black;
}

select {
	width: 42%;
    margin: 5px;
    display: inline-block;
    padding: 0px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid lightgrey;
    font-size: 1em;
    font-family: inherit;
    background: white;
    color: black;
}

/*p{
  text-align:justify;
margin-top:0;
}*/

input:-internal-autofill-selected {
    appearance: menulist-button;
    background-image: none !important;
    background-color: var(--primary-bg-color) !important;
    color: lightgrey !important;
}

input {
  transition: box-shadow .3s;
  background: lightgrey;
  /* more style */
}
input:checked { 
  box-shadow: inset 0 0 0 15px var(--primary);
}

.overflow-hidden{
	overflow: hidden;
}

.flex {
	display: flex;
	margin: 20px auto;
	align-items: center;
}

.radio {
	width: 12px;
    height: 12px;
    margin-right: 10px;
}

.add-person {
	cursor: pointer;
	font-style: italic;
	margin-top: 0;
    margin-left: 5px;
}

.delete-person{
	width: 15px;
    height: 40px;
    background: url(/assets/img/close.png);
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    margin: 5px;
    cursor: pointer;
}

.lieu-container {
    min-height: 600px;
}

.rsvp-container {
	min-width: 30vw;
}

label {
	font-size: 19px;
}

</style>

</head>
 

    <body data-barba="wrapper" class="rsvp-body">
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

	          <div class="lieu-container rsvp-container" style="position: relative;">
	           	<h1>Réponse à l'invitation</h1>

	           	<p>Bonjour <strong><?= $_GET['n']?></strong> !</p>
	     
	         <!--   	<p class="uppercase sans"><strong>1610 D8, 83520 Roquebrune-sur-Argens</strong></p> -->

	           	<div id="svg_wrap"></div>

	           	<!-- <div class="overflow-hidden"> -->
	           		<div class="lottie-wrapper">
	           			 <lottie-player
						  id="firstLottie"
						  src="https://assets10.lottiefiles.com/packages/lf20_3hjvh1ex.json"
						>
						</lottie-player>
						<p>Merci !</p>
	           		</div>
	  
	           	<form id="RSVP">	
	           	<input type="hidden" name="name" value="<?php if( !empty($_GET['n']) AND $_GET['n'])echo $_GET['n']?>">
	           	<input type="hidden" name="key" value="xqjfhsdhb">
				<section>
				 	<p><strong>Confirmez-vous votre présence ?</strong></p>
				  	<div class="person-container">
				  		<div class="flex">
				  			<input class="radio" id="radio-1" type="checkbox" name="cérémonie+diner"> <label for="radio-1">Oui ! Présence à la cérémonie et au diner</label>
				  		</div>

				  		<?php if( !empty($_GET['b']) AND $_GET['b'] === "1"){ ?>
				  		<div class="flex">
				  			<input class="radio" id="radio-2" type="checkbox" name="brunch"> <label for="radio-2">Oui, présence au brunch le lendemain</label>
				  		</div>
				  		<?php } ?>
				  		<div class="flex">
				  			<input class="radio" id="radio-3" type="checkbox" name="ne viens pas"> <label for="radio-3">Non avec regrets</label>
				  		</div>

				  		<div class="enfants hidePls">
				  			<p><strong>Venez-vous avec vos enfants ?</strong></p>
				  			<div class="flex">
				  				<input class="radio" id="radio-4" type="checkbox" name="présence enfant"> <label for="radio-4">Oui</label>
				  				<input class="radio" id="radio-5" type="checkbox" style="margin-left:10px;" name="présence enfant"> <label for="radio-5">Non</label>
				  			</div>
				  		</div>

				  		<div class="childs-wrapper">
					  		<div class="person-inputs flex hidePls">
							  	<input type="text" placeholder="Prénom" name="prenom-1" value=""/>
							 	<input type="text" placeholder="Âge" name="age-1" value=""/>
					  		</div>
				  		</div>
				  		<p class="add-person hidePls">Ajouter un enfant +</p>

				  		<div class="song-choice hidePls">
				  			<p><strong>Merci de nous préciser si vous avez une allergie alimentaire</strong></p>
				  			<input type="text" placeholder="" name="allergies" value="" style="width: 100%"/>

				  			<p><strong>La musique qui vous fait danser à tous les coups ?</strong></p>
				  			<input type="text" placeholder="" name="song" value="" style="width: 100%"/>
				  		</div>
					</div>
				

				</section>

				<!-- <div> -->

				<div class="button hidePls" id="submit">Valider</div>
			</form>

	           
 			</div> 	
        </div>
        <!-- Unchanged Content -->
<?php include 'views/components/menu.php'; ?>

<script src="https://unpkg.com/@lottiefiles/lottie-player@0.4.0/dist/lottie-player.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js"></script>
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
    <script src="assets/js/app.js"></script> 

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

   

    <script>

    let player = document.querySelector("lottie-player");

  //   LottieInteractivity.create({
	 //  player:'#firstLottie',
	 //  mode:"cursor",
	 //    actions: [{
	 //        type: "click",
	 //        forceFlag: false
	 //      }]
		// });


    let submitBtn = document.getElementById('submit');
    let enfantsForm = document.querySelector('.enfants');
    let personForm1 = document.querySelector('.person-inputs');
    let addChild = document.querySelector('.add-person');
    let songChoice = document.querySelector('.song-choice');

	$('.radio').click(function(){
		let radio = this;
	    if ( radio.id == "radio-3" && $(this).is(':checked')  ) {
	    	// submitBtn.style.opacity = "0";
	        gsap.to(submitBtn, {opacity: 0, duration: 0});
	        submitBtn.classList.remove('hidePls');
	        gsap.to(submitBtn, {opacity: 1, duration: 0.7});

	        document.getElementById('radio-1').checked = false;
	        document.getElementById('radio-4').checked = false;
	        document.getElementById('radio-5').checked = false;
	        if (document.getElementById('radio-2')) {
	        	document.getElementById('radio-2').checked = false;
	        }


	       
	        	enfantsForm.classList.add('hidePls')
	        	personForm1.classList.add('hidePls')           
	        	addChild.classList.add('hidePls')        
	        	songChoice.classList.add('hidePls')
	        	let e = document.querySelectorAll('.cloneNode');
	        	e.forEach(function(e){
	        		e.classList.add('hidePls')
	        	})
	        

	    }else if ( radio.id == "radio-3" && !$(this).is(':checked') ){
	    	gsap.to(submitBtn, {opacity: 0, duration: 0.7});
	        submitBtn.classList.add('hidePls');
	    }//if


	    if ( radio.id == "radio-1" && $(this).is(':checked')) {

	    	enfantsForm.classList.remove('hidePls')
	    	document.getElementById('radio-3').checked = false;

	    } else if (radio.id == "radio-1" && !$(this).is(':checked') ) {

	    	enfantsForm.classList.add('hidePls')

	    	gsap.to(submitBtn, {opacity: 0, duration: 0.7});
	        submitBtn.classList.add('hidePls');

	            enfantsForm.classList.add('hidePls')
	        	personForm1.classList.add('hidePls')           
	        	addChild.classList.add('hidePls')        
	        	songChoice.classList.add('hidePls')
	        	let e = document.querySelectorAll('.cloneNode');
	        	e.forEach(function(e){
	        		e.classList.add('hidePls')
	        	})
	    }



	    if (radio.id == "radio-2"  && $(this).is(':checked') ) {

	    	 if ( !$("#radio-1").is(':checked')) {

	    	 gsap.to(submitBtn, {opacity: 0, duration: 0});
	        submitBtn.classList.remove('hidePls');
	        gsap.to(submitBtn, {opacity: 1, duration: 0.7});
	    }

	    	// enfantsForm.classList.remove('hidePls')
	    	document.getElementById('radio-3').checked = false;

	    } else if (radio.id == "radio-2"  && !$(this).is(':checked')) {

	    	enfantsForm.classList.add('hidePls')

	    	gsap.to(submitBtn, {opacity: 0, duration: 0.7});
	        submitBtn.classList.add('hidePls');

	              	enfantsForm.classList.add('hidePls')
	        	personForm1.classList.add('hidePls')           
	        	addChild.classList.add('hidePls')        
	        	songChoice.classList.add('hidePls')
	        	let e = document.querySelectorAll('.cloneNode');
	        	e.forEach(function(e){
	        		e.classList.add('hidePls')
	        	})
	    }



	    if (radio.id == "radio-4" && $(this).is(':checked')) {
	    	 gsap.to(submitBtn, {opacity: 0, duration: 0});
	        submitBtn.classList.remove('hidePls');
	        gsap.to(submitBtn, {opacity: 1, duration: 0.7});


	    	gsap.to(personForm1, {opacity: 0, duration: 0});
	        personForm1.classList.remove('hidePls');
	        gsap.to(personForm1, {opacity: 1, duration: 0.7});

	        gsap.to(addChild, {opacity: 0, duration: 0});
	        addChild.classList.remove('hidePls');
	        gsap.to(addChild, {opacity: 1, duration: 0.7});

	        gsap.to(songChoice, {opacity: 0, duration: 0});
	        songChoice.classList.remove('hidePls');
	        gsap.to(songChoice, {opacity: 1, duration: 0.7});

	        document.getElementById('radio-5').checked = false;
	        
	    } else if (  radio.id == "radio-4"  && !$(this).is(':checked') ) {
	    	gsap.to(personForm1, {opacity: 0, duration: 0.7});
	        personForm1.classList.add('hidePls');

	        gsap.to(addChild, {opacity: 0, duration: 0.7});
	        addChild.classList.add('hidePls');

	        gsap.to(songChoice, {opacity: 0, duration: 0.7});
	        songChoice.classList.add('hidePls');

	        let cloneNodes = document.querySelectorAll('.cloneNode');
	        cloneNodes.forEach( function(e) {
	        	e.remove();
	        })

	        gsap.to(submitBtn, {opacity: 0, duration: 0.7});
	        submitBtn.classList.add('hidePls');
	    }


	    if ( radio.id == "radio-5" && $(this).is(':checked') ) {

	    	 gsap.to(submitBtn, {opacity: 0, duration: 0});
	        submitBtn.classList.remove('hidePls');
	        gsap.to(submitBtn, {opacity: 1, duration: 0.7});

	    	gsap.to(songChoice, {opacity: 0, duration: 0});
	        songChoice.classList.remove('hidePls');
	        gsap.to(songChoice, {opacity: 1, duration: 0.7});

	         document.getElementById('radio-4').checked = false;

	        // enfantsForm.classList.add('hidePls')
	        personForm1.classList.add('hidePls')           
	        addChild.classList.add('hidePls')        
	        // songChoice.classList.add('hidePls')

	    } else if ( radio.id == "radio-5"  && !$(this).is(':checked')) {

	    	gsap.to(songChoice, {opacity: 0, duration: 0.7});
	        songChoice.classList.add('hidePls');

	        gsap.to(submitBtn, {opacity: 0, duration: 0.7});
	        submitBtn.classList.add('hidePls');
	    }

	});

    $(document).on('click', '.add-person', function(){

    	// let mainElement = document.createElement("div");

    	p = document.querySelector(".person-inputs");
		p_prime = p.cloneNode(true);
		p_prime.classList.add('cloneNode');

		let persons = document.querySelectorAll('.person-inputs');
		
		let i = 1;
		persons.forEach(function(e){
			i++;
		})

		// console.log(p_prime.getElementsByTagName("input"));
		p_prime.getElementsByTagName("input")[0].setAttribute("name" , "prenom-"+i);
		p_prime.getElementsByTagName("input")[0].value = "";

		p_prime.getElementsByTagName("input")[1].setAttribute("name" , "age-"+i);
		p_prime.getElementsByTagName("input")[1].value = "";


		let deleteIcon = document.createElement('div');
		deleteIcon.classList.add('delete-person');
		p_prime.append(deleteIcon);


		document.querySelector('.childs-wrapper').append(p_prime);
    })


    $(document).on('click', '.delete-person', function(e){
    	e.preventDefault;
    	$(this).parent().remove();
    })

	
	$(document).on('click', '#submit', function(e){
		 e.preventDefault();
		 let formData = $('#RSVP').serializeArray() //serialize data from form

		 gsap.to(document.querySelector('#RSVP'), {opacity: 0, duration: 0.7});
		 setTimeout(function() {document.querySelector('#RSVP').classList.add('hidePls')}, 700);
		

		 $.ajax({
		    type:'post',
		    url:'proccess.php',
		    data: formData,
		    dataType: "json",
		    success: function(response) {
		        gsap.to(document.querySelector('.lottie-wrapper'), {
				 	opacity: 1,
				 	width:350,
				 	height:350,
				 	duration: 0.7
				 });
		        player.play();
		    },
		    error: function(response) {
		        console.log('ERROR BLOCK');
		        console.log(response);
		    }
		});
	})



  </script>
</body>
</html>

<?php
}
?>

