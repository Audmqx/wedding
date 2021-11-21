gsap.registerPlugin(ScrollTrigger);


// Preloader Animation
document.addEventListener('DOMContentLoaded', (event) => {

    let preLoaderAnimation = document.getElementById('preloader_path')

    preLoaderAnimation.addEventListener("animationend", function(e) {

	let preLoader = document.querySelector('.preloader')
	 // preLoader.classList.add('header')

	 gsap.to(preLoader, {
	                opacity: 0,
	                duration: 0.5,
                    onComplete: () => {
                preLoader.classList.add('toHide');
            }
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

// let blob_1 = document.querySelector('.cls-4')
// let degre = 0;
// blob_1.addEventListener('click', function(e) {
// 	 degre += 15;
// 	this.style.transform = "rotate("+degre+"deg)";
// })

// Animation button cagnotte
ScrollTrigger.create({
    trigger: 'body',
    start: '100% bottom',
    end: '50% bottom',
    onEnter: (e) => {

                document.querySelector('.button--kari .marquee__inner').classList.add('animation-cagnotte')
                // document.querySelector('toHide').style.opacity = 0;
                 gsap.to('.toHide-1', {
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




// Menu

// frame element
const frame = document.querySelector('.frame');

// overlay (SVG path element)
const overlayPath = document.querySelector('.overlay__path');

// menu (wrap) element
const menuWrap = document.querySelector('.menu-wrap');
const menuWrapper = document.querySelector('#menu-wrapper');

// menu items
const menuItems = menuWrap.querySelectorAll('.menu__item');

// open menu button
const openMenuCtrl = document.querySelector('button.button-menu');

// close menu button
const closeMenuCtrl = menuWrap.querySelector('.button-close');

// big title elements
const title = {
    main: document.querySelector('.content__title-main'),
    sub: document.querySelector('.content__title-sub')
};

let isAnimating = false;

// opens the menu
const openMenu = ()  => {
    
    if ( isAnimating ) return;
    isAnimating = true;
    gsap.timeline({
            onComplete: () => isAnimating = false
        })
        .set(overlayPath, {
            attr: { d: 'M 0 100 V 100 Q 50 100 100 100 V 100 z' }
        })
        .to(overlayPath, { 
            duration: 0.8,
            ease: 'power4.in',
            attr: { d: 'M 0 100 V 50 Q 50 0 100 50 V 100 z' },
            onComplete: () => {
                menuWrapper.classList.add('menu-wrap--open-id');
            }
        }, 0)
        .to(overlayPath, { 
            duration: 0.3,
            ease: 'power2',
            attr: { d: 'M 0 100 V 0 Q 50 0 100 0 V 100 z' },
            onComplete: () => {
                frame.classList.add('frame--menu-open');
                menuWrap.classList.add('menu-wrap--open');
                // menuWrapper.classList.add('menu-wrap--open-id');
            }
        })
        // title elements
        // .to([title.main, title.sub], { 
        //     duration: 0.8,
        //     ease: 'power3.in',
        //     y: -200,
        //     stagger: 0.05
        // }, 0.2)

        // now reveal
        .set(menuItems, { 
            opacity: 0
        })
        .set(overlayPath, { 
            attr: { d: 'M 0 0 V 100 Q 50 100 100 100 V 0 z' }
        })
        .to(overlayPath, { 
            duration: 0.3,
            ease: 'power2.in',
            attr: { d: 'M 0 0 V 50 Q 50 0 100 50 V 0 z' }
        })
        .to(overlayPath, { 
            duration: 0.8,
            ease: 'power4',
            attr: { d: 'M 0 0 V 0 Q 50 0 100 0 V 0 z' }
        })
        // menu items translate animation
        .to(menuItems, { 
            duration: 1.1,
            ease: 'power4',
            startAt: {y: 150},
            y: 0,
            opacity: 1,
            stagger: 0.05
        }, '>-=1.1');

}

// closes the menu
const closeMenu = ()  => {
    
    if ( isAnimating ) return;
    isAnimating = true;
    gsap.timeline({
            onComplete: () => isAnimating = false
        })
        .set(overlayPath, {
            attr: { d: 'M 0 0 V 0 Q 50 0 100 0 V 0 z' }
        })
        .to(overlayPath, { 
            duration: 0.8,
            ease: 'power4.in',
            attr: { d: 'M 0 0 V 50 Q 50 100 100 50 V 0 z' }
        }, 0)
        .to(overlayPath, { 
            duration: 0.3,
            ease: 'power2',
            attr: { d: 'M 0 0 V 100 Q 50 100 100 100 V 0 z' },
            onComplete: () => {
                frame.classList.remove('frame--menu-open');
                menuWrap.classList.remove('menu-wrap--open');
            }
        })
        // now reveal
        .set(overlayPath, { 
            attr: { d: 'M 0 100 V 0 Q 50 0 100 0 V 100 z' }
        })
        .to(overlayPath, { 
            duration: 0.3,
            ease: 'power2.in',
            attr: { d: 'M 0 100 V 50 Q 50 100 100 50 V 100 z' }
        })
        .to(overlayPath, { 
            duration: 0.8,
            ease: 'power4',
            attr: { d: 'M 0 100 V 100 Q 50 100 100 100 V 100 z' }
        })
        // title elements
        // .to([title.main, title.sub], { 
        //     duration: 1.1,
        //     ease: 'power4',
        //     y: 0,
        //     stagger: -0.05
        // }, '>-=1.1')
        // menu items translate animation
        .to(menuItems, { 
            duration: 0.8,
            ease: 'power2.in',
            y: 100,
            opacity: 0,
            stagger: -0.05,
        }, 0)
        .to(menuWrapper, {
                onComplete: () => {
                menuWrapper.classList.remove('menu-wrap--open-id');
            }
        },1.5)

}


// click on menu button
openMenuCtrl.addEventListener('click', openMenu);
// click on close menu button
closeMenuCtrl.addEventListener('click', closeMenu);

//code couleur 
document.querySelector('.code-couleur').addEventListener('click', function(){
    console.log('ok')
})