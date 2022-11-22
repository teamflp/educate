// On vérify que tous les champs sont remplis
// On crée des variables pour les champs
// et les stock dans un tableau
//
/* 
let nom = document.querySelector(".nom")
let email = document.querySelector(".email")
let errors = document.getElementById("errors")
let btn = document.getElementById("btn") */

// On désactive le bouton si tous les champs ne sont pas remplis
// Si tous les champs sont remplis, on active le bouton

/* // Désactive le bouton 
btn.disabled = true

let champs = [nom, email] */
// On crée une boucle pour vérifier que tous les champs sont remplis

/* btn.addEventListener('click', function (e) { 
     e.preventDefault()
     for (let i = 0; i < champs.length; i++) {
          if (champs[i].value == "") {
               champs[i].classList.add("bg")
               errors.textContent = "* Veuillez renseigner tous les champs"
               champs[i].focus();
               btn.classList.add("inactive")
               btn.disabled = true
          } else {
               champs[i].classList.remove("bg")
               errors.textContent = ""
               btn.classList.remove("inactive")
               btn.disabled = false
          }
     }
}) */

// Crée un validateur de formulaire
