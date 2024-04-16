const btnRectangle = document.querySelector('.creerRectangles');
const selectBody = document.querySelector('body');

btnRectangle.addEventListener('click', () => {
    const rectangleRouge = document.createElement('div');
    rectangleRouge.className = "rectangle rectRouge";
    selectBody.appendChild(rectangleRouge);
    setTimeout(creerRectangleBleu, 5000);
    rectangleRouge.addEventListener('click', () => {// *Fonction Alternative
       retirerElements(rectangleRouge);
    })
})

function creerRectangleBleu() {
    const rectangleBleu = document.createElement('div');
    rectangleBleu.className = "rectangle rectBleu";
    selectBody.appendChild(rectangleBleu);
    rectangleBleu.addEventListener('click', () => {// *Fonction Alternative
        retirerElements(rectangleBleu);
    })
}

// *Fonction Alternative
function retirerElements(objet) {
    objet.remove();
}


/*
function retirerElements() {
    document.addEventListener('mousedown', event => {
        switch(true) {
            case ((event.button == 0) && (event.target.className != 'creerRectangles')): //Cas ou je fais un clique droit
                selectBody.removeChild(event.target);
                break;

            default:
                break;
        }
    });
}
retirerElements();
*/
