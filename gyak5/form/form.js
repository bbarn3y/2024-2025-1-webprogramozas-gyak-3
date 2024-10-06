// Form

const formEl = document.querySelector('#form');
const availableInputEl = document.querySelector('#availableInCinemas');
const nextInputEl = document.querySelector('#next');
const protagonistInputEl = document.querySelector('#protagonist');
const titleInputEl = document.querySelector('#title');

const stateStorageKey = 'state';

[availableInputEl, nextInputEl].forEach((inputEl) => {
    inputEl.addEventListener('input', (event) => {
        validate();
    })
})

// Handle submission

function init() {
    // Initialize form state from localStorage
}

function save() {
    // Save the form state to localStorage if valid
}

function validate() {
    // Add custom JS validation for available+next
}

init();
validate();
