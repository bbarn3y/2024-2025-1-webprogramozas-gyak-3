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
const containerEl = document.getElementById('container');
const adversarySelectionClass = 'adversary-selection';
const userSelectionClass = 'user-selection';
const lostSelectionClass = 'lost-selection';
const wonSelectionClass = 'won-selection';

const rowColCount = 5;
const solution = randomNumber(1, rowColCount * rowColCount);
console.log('Solution:', solution);

let gameOver = false;

function adversaryGuess() {
    if (gameOver) {
        return;
    }
    const cells = document.getElementsByClassName('cell');
    const freeCells = [...cells].filter((cell) => cellAvailable(cell));
    const randomCell = freeCells[randomNumber(0, freeCells.length - 1)];
    const guessedNumber = +randomCell.innerText;
    if (guessedNumber === solution) {
        randomCell.classList.add(lostSelectionClass);
        gameOver = true;
    } else {
        randomCell.classList.add(adversarySelectionClass);
    }
}

function cellAvailable(cell) {
    return !cell.classList.contains(adversarySelectionClass) &&
        !cell.classList.contains(userSelectionClass)
}

function createGrid(size) {
    const gridEl = [...new Array(size)].map((_, i) =>`
        <div>
            ${[...new Array(size)].map((_, j) => `<div class="cell">${(i) * rowColCount + (j + 1)}</div>`).join('')}
        </div>`
    );
    containerEl.innerHTML = gridEl.join('');

}

createGrid(rowColCount);

delegate(containerEl, 'click', '.cell', (event) => {
    const clickedCell = event.target;
    if (!gameOver && cellAvailable(clickedCell)) {
        const guessedNumber = +clickedCell.innerText;
        if (guessedNumber === solution) {
            clickedCell.classList.add(wonSelectionClass);
            gameOver = true;
        } else {
            clickedCell.classList.add(userSelectionClass)
        }
    }
});

// @todo The adversary should guess a number in a loop
