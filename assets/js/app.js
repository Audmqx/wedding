gsap.registerPlugin(ScrollTrigger);


// Preloader Animation
document.addEventListener('DOMContentLoaded', (event) => {
    let preLoaderAnimation = document.getElementById('preloader_path')

    preLoaderAnimation.addEventListener("animationend", function(e) {

	let preLoader = document.querySelector('.preloader')
	 preLoader.classList.add('header')

	 gsap.to('.main-wrapper', {
	                opacity: 1,
	                duration: 0.5
	        })

    }, false);
});


// Countdown
var end = new Date('06/24/2022 2:00 PM');

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML = 'EXPIRED!';

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById('countdown').innerHTML = days + 'j  ';
        document.getElementById('countdown').innerHTML += hours + 'h  ';
        document.getElementById('countdown').innerHTML += minutes + 'm  ';
        document.getElementById('countdown').innerHTML += seconds + 's  ';
    }

    timer = setInterval(showRemaining, 1000);

//Animation Jas SVG

// gsap.to("#jas_svg", {
//   scrollTrigger: "#jas_svg", // start the animation when ".box" enters the viewport (once)
//   x: 50
// });

ScrollTrigger.create({
    trigger: '#section-2',
    start: '80% bottom',
    end: '20% top',
    onEnter: (e) => {
    	let jasSvg = document.querySelector('#jas_svg');
    	jasSvg .classList.add('draw')
    	setTimeout(function() {
    		document.querySelector('.jas-img').style.opacity = "1";
    			jasSvg .addEventListener("animationend", function() {
    			gsap.to(jasSvg, {
	                opacity: 0,
	                duration: 0.5
	        		})
    		}, false);
    	}, 1000);
    }
    // onUpdate: (self)=>{
    //      console.log(self)
    //      gsap.to("#jas_svg", {duration: 1, x: 100});
    //         }
        });



// el.addEventListener("animationstart", function() {}, false);
// el.addEventListener("animationend", function() {}, false);
// el.addEventListener("animationiteration", function() {}, false);
