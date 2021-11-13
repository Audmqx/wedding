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


// el.addEventListener("animationstart", function() {}, false);
// el.addEventListener("animationend", function() {}, false);
// el.addEventListener("animationiteration", function() {}, false);
