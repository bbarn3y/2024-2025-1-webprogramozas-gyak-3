function delegate(parent, type, selector, handler) {
    parent.addEventListener(type, function (event) {
        const targetElement = event.target.closest(selector);

        if (this.contains(targetElement)) {
            handler.call(targetElement, event);
        }
    });
}

// Create the table
const inputEl = document.querySelector('#rows');
const tableEl = document.querySelector('#multiTable');

function maximizeSize(inputNumber) {
    const maximizedNumber = Math.min(200, inputNumber);
    inputEl.value = maximizedNumber
    return maximizedNumber
}

function selectCell(cellEl) {
    if (cellEl.classList.contains('selected')) {
        cellEl.classList.remove('selected')
    } else {
        cellEl.classList.add('selected')
    }
}

inputEl.addEventListener('input', (event) => {
    const size = maximizeSize(+event.target.value);
    console.log('size', size)

    tableEl.innerHTML = '';
    for (let i = 1; i <= size; i++) {
        const rowEl = document.createElement('tr');
        for (let j = 1; j <= size; j++) {
            const cellEl = document.createElement('td');
            cellEl.innerText = i*j;
            cellEl.classList.add('cell')
            cellEl.dataset['x'] = j;
            cellEl.dataset['y'] = i;

            cellEl.addEventListener('click', (e) => {
                selectCell(cellEl);
            })

            rowEl.append(cellEl)
        }
        tableEl.append(rowEl);
    }
})





