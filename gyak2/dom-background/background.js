const buttonEl = document.querySelector('#setBackground')
const inputEl = document.querySelector('#colorInput')
const linkEl = document.querySelector('#colorHelp')

let clickCounter = 0;
buttonEl.addEventListener('click', (event) => {
    if (CSS.supports('color', inputEl.value)) {
        document.body.style.background = inputEl.value;
    } else {
        document.body.style.background = 'red';
    }
})

linkEl.addEventListener('click', (event) => {
    if (document.body.style.background === 'blue') {
        event.preventDefault();
    }
})



