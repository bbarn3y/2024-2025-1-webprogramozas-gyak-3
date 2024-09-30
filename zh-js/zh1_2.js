function delegate(parent, type, selector, handler) {
    console.log(parent);
    parent.addEventListener(type, function (event) {
        const targetElement = event.target.closest(selector);

        if (this.contains(targetElement)) {
            handler.call(targetElement, event);
        }
    });
}

const frownEl = document.querySelector('.frown');
const mouthEl = document.querySelector('.mouth');
const rotationControllerButtonEl = document.querySelector('#rotationController');
const smileyEl = document.querySelector('#smileyContainer');
const teethInputEl = document.querySelector('#teethInput');

const colors = ['rgb(69, 123, 157)', 'rgb(163, 190, 0)', 'rgb(230, 57, 70)', 'rgb(255, 235, 59)'];

