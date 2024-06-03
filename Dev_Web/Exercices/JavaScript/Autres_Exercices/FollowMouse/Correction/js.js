const btnCreate = document.querySelector('.btnCreate')
const body = document.querySelector('body')
let selectDiv = document.querySelector('.selectDiv')

btnCreate.addEventListener('click', () => {
    selectDiv.className = "rectangle"
    body.appendChild(selectDiv)

    const circle = document.createElement('div')
    circle.className = "circle"
    body.appendChild(circle)
})


document.addEventListener('mousemove', (event) => {
    const circle = document.querySelector('.circle')
    console.log(circle.offsetHeight, circle.offsetWidth);

    const middleHeight = circle.offsetHeight / 2
    const middleWidth = circle.offsetWidth / 2
    circle.style.left = (event.clientX - middleWidth) + "px"
    circle.style.top = (event.clientY - middleHeight) + "px"

})