// On inclut le fichier scrollreveal.js contenu dans node_modules 
/* import ScrollReveal from "../../../scrollreveal/dist/scrollreveal.min"; */

// window.sr = ScrollReveal({reset: true})
// sr.reveal('.test-1', {
//     origin: 'right',
//     duration: 1000,
//     delay: 300,
//     timing: 'ease-out',
//      speed: 300
// });


document.addEventListener('DOMContentLoaded', function () {
    $(".num").counterUp({
        "time": "1500",
        "duration": "1500",
        "easing": "easeInOutExpo",
    });


    window.sr = ScrollReveal({
        duration: 2000,
        timing: 'ease-out',
        distance: '100px',
        delay: 300,
        reset: false
    }, 500);

    sr.reveal('.test-1', {
        origin: 'bottom',
    }, 100);
    sr.reveal('.what__us__items--text-1', {
        origin: 'bottom',
    }, 200);
    sr.reveal('.what__us__items--text-2', {
        origin: 'bottom',
    }, 400);
    sr.reveal('.what__us__items--text-3', {
        origin: 'bottom',
    }, 600);
    /* sr.reveal('img', {
        origin: 'bottom',
    }); */
    sr.reveal('.slider-item', {
        duration: 0,
        timing: '0',
        distance: '0',
        delay: 0,
    });
    sr.reveal('.testimonials--left', {
        origin: 'left',
        delay: 600,
    });
    sr.reveal('.testimonials--right', {
        origin: 'right',
    });

    sr.reveal('.contact--items-1', {
        origin: 'bottom',
        delay: 500,
    });
    sr.reveal('.contact--items-2', {
        origin: 'bottom',
        delay: 800,
    });
    sr.reveal('.contact--items-3', {
        origin: 'bottom',
        delay: 1000,
    });

     sr.reveal('.text', {
        origin: 'bottom',
        delay: 1000,
    });


    let boxcontact = document.querySelector('.contact__form--contact')
    let boxicon = document.querySelector('.fa-paper-plane')

    boxcontact.addEventListener("mouseover", function () {
        boxicon.animate([
            {opacity: 1,}
            
        ],{
            duration: 0,
            timing: "ease-in-out",
            delay: 1000,
            Iterations: Infinity,
        });boxicon

        console.log("boxicon")
    }) 
});


createAnimation({
    element: document.querySelector(".testimonials--right, .testimonials--left"),
    keyframes: [
        { transform: "translateX(0)" },
        { transform: "translateX(600px)" },
    ],
    options: {
        duration: 1000,
        iterations: Infinity,
    },
    play: true,
    pause: true,
    currentTime: 0,
    playbackRate: 1,
    cancel: true,
    repeat: true,
    trigger: true,
    direction: "up",
    easing: "ease-in-out",
});