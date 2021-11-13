gsap.registerPlugin(ScrollTrigger);


// Preloader Animation
document.addEventListener('DOMContentLoaded', (event) => {
    let preLoaderAnimation = document.getElementById('preloader_path')

    preLoaderAnimation.addEventListener("animationend", function(e) {

		let preLoader = document.querySelector('.preloader')

		// gsap.to(preLoader, {
	 //                opacity: 0.,
	 //                duration: 0.5
	 //        })

	 preLoader.classList.add('header')

    }, false);

});


// el.addEventListener("animationstart", function() {}, false);
// el.addEventListener("animationend", function() {}, false);
// el.addEventListener("animationiteration", function() {}, false);


// document.getElementById("svag").setAttribute("viewBox", y + " " + x + " 100 100");
// window.onload to change the styles document.getElementbyId().style.display = none/inline