// On crée une carousel snas jquey

let slideIndex = 1;
showSlides(slideIndex)

// Boutons Précédent et suivant 
function ps(n) {
     showSlides(slideIndex + n); 
}

// Les boutons de control de la carousel
function currentSlide(n) { 
     showSlides(slideIndex + n);
}

// On controles les images 
function showSlides(n) { 
     let i 
     let slides = document.querySelector('.box__cours--item')
     let dots = document.querySelector('.dot') 

     if (n > slides.length) {
          slideIndex = 1;
     }

     if (n < 1) {
          slideIndex = slides.length
     }

     for (i = 0; i < slides.length; i++) { //
          slides[i].style.display = 'none'
     }

     for (i = 0; i < dots.length; i++) { 
          dots[i].classList.replace("active", "")
     }
     slides[slideIndex-1].style.display = "block";
     dots[slideIndex-1].className += " active";
}


// counterup for number
// document.addEventListener('DOMContentLoaded', function () {
//     if (document.readyState === "complete") {
//         init(); // initial
//     } else {
//         document.addEventListener('DOMContentLoaded', init);
//     }
// })
