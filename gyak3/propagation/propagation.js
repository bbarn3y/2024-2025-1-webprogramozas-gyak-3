const outerRectangleEl =
    document.getElementById('outerRectangle');
const innerRectangleEl =
    document.getElementById('innerRectangle');

document.addEventListener('click', (e) => {
    console.log('document', e, this);
})

outerRectangleEl.addEventListener('click', (e) => {
    console.log('outerRectangleEl', e, this);
    // e.stopPropagation();
})

innerRectangleEl.addEventListener('click', function (e) {
    console.log('innerRectangleEl', e, this);
})



