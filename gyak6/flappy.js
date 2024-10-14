function random(a, b) {
    return Math.floor(Math.random() * (b - a + 1)) + a;
}

class Bird {
    constructor() {}
}

class Column {
    constructor() {
    }
}

const canvas = document.getElementById('flappyCanvas');
const context = canvas.getContext('2d');

let lastCycleTime = performance.now(); // (new Date()).now();

function cycle(now = performance.now()) {
    const dt = now - lastCycleTime;
    lastCycleTime = now;

    update(dt);
    draw();

    requestAnimationFrame(cycle);
}

function draw() {
    context.fillStyle = 'lightblue';
    context.fillRect(0, 0, canvas.width, canvas.height);

    // context.beginPath();
    // context.moveTo(200, 200);
    // context.lineTo(100, 300);
    // context.lineTo(300, 300);
    // context.lineTo(200, 200);
    // context.closePath();
    // context.stroke();
    //
    // context.clearRect(100, 300, 100, 75);
}

function update(dt) {

}

cycle();

