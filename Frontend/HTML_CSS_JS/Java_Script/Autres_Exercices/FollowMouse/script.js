/*const rectangle = document.querySelectorAll('.rectangle');

rectangle.forEach(element => {
    element.addEventListener('click', (event) => {
        const rectId = document.getElementById(event.target.id);
        rectId.style.backgroundColor = 'purple';
        switch (event.target.id) {
            case 'rect1':
                const rect1 = document.getElementById(event.target.id);
                rect1.style.transition = "rotate(7deg)";

                break;
            
            case 'rect2':
                console.log(event.target.id);
                break;

            case 'rect3':
                console.log(event.target.id);
                break;

            case 'rect4':
                console.log(event.target.id);
                break;
            
            default:
                console.log("probleme");
        }
    });
});*/


const btnDiv = document.querySelector('.bouton');
const body = document.querySelector('body');
let rectangle = document.querySelector('.selectDiv');

btnDiv.addEventListener('click', () => {
    rectangle.className = 'rectangle';
    body.appendChild(rectangle);
    
    const rond = document.createElement('div');
    rond.className = 'rond';
    body.appendChild(rond);
    
    rectangle.addEventListener ('mousemove', (event) => {
        document.querySelector('.rond');
        console.log(`position souris : \nX : ${event.clientX}\nY : ${event.clientY}`);

        const middleHeight = rond.offsetHeight /2;
        const middleWidth = rond.offsetWidth /2;
        rond.style.left = (event.clientX - middleHeight) + 'px';
        rond.style.top = (event.clientY - middleWidth)+ 'px';
    });
});

