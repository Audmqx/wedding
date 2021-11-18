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

window.onload = function () {
    if (localStorage.getItem("hasCodeRunBefore") === null) {
        /** Your code here. **/
        console.log('FIRST')
        localStorage.setItem("hasCodeRunBefore", true);
    }
    console.log('SECOND')
}




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
    }//onenter
        });



// Animation oeil

// When the user scrolls the page, execute myFunction
window.onscroll = function() {
      if (window.location.pathname == '/index.php') {
        oeilScroll()   
      }
};

function oeilScroll() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;

  document.querySelector(".textcircle").style.transform = "rotate("+scrolled+"deg)";
}


ScrollTrigger.create({
    trigger: '.section-2',
    start: '80% bottom',
    end: '20% top',
    onEnter: (e) => {
            if (window.location.pathname == '/index.php') {
    			document.querySelector('.eye__lashes-down').classList.add('blink-animation')

    			document.querySelector('.eye__lashes-up').classList.add('blink-animation-2')
    			document.querySelector('.eye__inner').classList.add('blink-animation-2')
    			document.querySelector('.eye__iris').classList.add('blink-animation-2')
                }
    		},
    onLeave: (e) =>{
                if (window.location.pathname == '/index.php') {
    			document.querySelector('.eye__lashes-down').classList.remove('blink-animation')

    			document.querySelector('.eye__lashes-up').classList.remove('blink-animation-2')
    			document.querySelector('.eye__inner').classList.remove('blink-animation-2')
    			document.querySelector('.eye__iris').classList.remove('blink-animation-2')
                }
  			}
        });



// Animation section - 3 scroll
let blob_1 = document.querySelector('.cls-4')
let degre = 0;
blob_1.addEventListener('click', function(e) {
	 degre += 15;
	this.style.transform = "rotate("+degre+"deg)";
})

// Animation button cagnotte
ScrollTrigger.create({
    trigger: 'body',
    start: '100% bottom',
    end: '50% bottom',
    onEnter: (e) => {

                document.querySelector('.button--kari .marquee__inner').classList.add('animation-cagnotte')
                // document.querySelector('toHide').style.opacity = 0;
                 gsap.to('.toHide', {
                    opacity: 0,
                    duration: 0.5
                })
            },
    // onLeave: (e) =>{
    //             document.querySelector('.button--kari .marquee__inner').classList.remove('animation-cagnotte')
    //             // document.querySelector('toHide').style.opacity = 0;
    //              gsap.to('.toHide', {
    //                 opacity: 1,
    //                 duration: 0.5
    //             })
    //         }
        });


//Barba js
    barba.init({
          transitions: [{
            name: 'from-home-transition',
            from: {
                namespace: ["home"]
            },
            leave(data) {
                console.log(data)
              return gsap.to(data.current.container, {
                opacity: 0
              });
            },
            enter(data) {
                console.log(data)
              return gsap.from(data.next.container, {
                opacity: 0
              });
            },

            name: 'from-inside-page-transition',
            from: {
                namespace: ["inside"]
            },
            leave(data) {
              //   console.log(data)
              // return gsap.to(data.current.container, {
              //   opacity: 0
              // });
              window.scrollTo(0, 0);
                    return gsap.timeline()
                    .to('.curtain',{
                        duration: 0.3,
                        y: 0
                    })
                    .to(data.current.container,{
                        opacity: 0.
                    })
            },
            enter(data) {
                console.log(data)
                console.log('heyy')
               // then later in the code...
                 gsap.to('.main-wrapper', {
                    opacity: 1,
                    duration: 0.5
            })
              return gsap.timeline()
                .to('.curtain',{
                    duration: 0.3,
                    y: "-100%"
                })
                .from(data.next.container,{
                    opacity: 0.
                })
            },


          }]
        });



barba.hooks.leave(() => {
  scrollX = barba.history.current.scroll.x;
  scrollY = barba.history.current.scroll.y;
  console.log('hiii')
  window.scrollTo(0, 0);
});

