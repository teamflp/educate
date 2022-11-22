function createAnimation(element, keyframes, options) {
    const animation = element.animate(keyframes, options);
    animation.pause();
    return animation;
}

// Cette fonction permet de jouer l'animation

function playAnimation(animation, options) {
    animation.currentTime = 0;
    if (options) {
        Object.keys(options).forEach((key) => {
            animation[key] = options[key];
        });
    }
    animation.play();
}

// Cette fonction permet de mettre en pause l'animation

function pauseAnimation(animation) {
    animation.pause();
}

// Cette fonction permet de mettre en stop l'animation

function stopAnimation(animation) {
    animation.cancel();
}

// Cette fonction permet de mettre en ralentir l'animation

function slowAnimation(animation, speed) {
    animation.playbackRate = speed;
}

// Cette fonction permet de mettre en accélérer l'animation

function fastAnimation(animation, speed) {
    animation.playbackRate = speed;
}

// Cette fonction permet de répéter l'animation

function repeatAnimation(animation, options) {
    animation.currentTime = 0;
    if (options) {
        Object.keys(options).forEach((key) => {
            animation[key] = options[key];
        });
    }
    animation.play();
}

// Cette fonction permet de déclencher une animation en fonction d'un événement

function triggerAnimation(animation, event, options) {
    event.addEventListener("click", () => {
        animation.currentTime = 0;
        if (options) {
            Object.keys(options).forEach((key) => {
                animation[key] = options[key];
            });
        }
        animation.play
        animation.pause();
        animation.currentTime = 0;
        if (options) {
            Object.keys(options).forEach((key) => {
                animation[key] = options[key];
            });
        }
    });
}

// Utilisation de la fonction createAnimation

