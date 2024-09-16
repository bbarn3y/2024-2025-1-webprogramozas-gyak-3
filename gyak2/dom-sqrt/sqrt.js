// 1. Tervezés
// 2. DOM
// 3. Számolás / segédfüggvény
function calculateSQRT(a) {
    return Math.sqrt(a);
}

// 4. Eseménykezelés
const buttonEl = document.querySelector('#submitButton')
const inputEl = document.querySelector('#numberInput')
const resultEl = document.querySelector('#result')

buttonEl.addEventListener('click', (event) => {
    const value = +inputEl.value;

    // 5. Validáció
    if (!isNaN(value)) {
        // resultEl.innerText = '<p>' + calculateSQRT(value) + '</p>';
        resultEl.innerHTML =
            `<p>${calculateSQRT(value)}</p>`;
        inputEl.style.border = '';
    } else {
        inputEl.value = '';
        inputEl.style.border = '1px solid red';
    }
})

// 6. Stílus



