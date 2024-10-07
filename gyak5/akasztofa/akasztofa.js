// Delegation
function delegate(parent, type, selector, handler) {
    parent.addEventListener(type, function (event) {
        console.log('d', this, event.target);
        const targetElement = event.target.closest(selector);

        if (this.contains(targetElement)) {
            handler.call(targetElement, event);
        }
    });
}

function randomNumber(from, to) {
    return Math.floor(Math.random() * to) + from;
}

// Init
const wordEl = document.getElementById('szo');
const scoreEl = document.getElementById('eredmeny');
const svgEl = document.querySelector('svg');

const word = 'akasztófa';
const guesses = new Set();

function guess(char) {
    guesses.add(char);

    refreshWord();
}

function refreshWord() {
    wordEl.innerHTML = word.split('').map((c) =>
        `<span>${guesses.has(c) ? c : ''}</span>`
    ).join('')
}

function refreshScore() {

}

function refreshSvg() {

}

refreshWord();

document.addEventListener('keypress', (event) => {
    // console.log(event);
    const char = event.key;

    guess(event.key);
});




