const canvas = document.querySelector('canvas')
const context = canvas.getContext('2d')

const downloadRegionInput = document.querySelector('#region')
const downloadButton = document.querySelector('#download')

const download = {
    state: 0, // 0: no download in progress, 1: download in progress, 2: download finished, 3: download failed
    packagePos: 760,
    region: null
}

// Time-based animation (from the lecture slide)
let lastFrameTime = performance.now()

function next(currentTime = performance.now()) {
  const dt = (currentTime - lastFrameTime) / 1000 // seconds
  lastFrameTime = currentTime

  update(dt) // Update current state
  render() // Rerender the frame
  requestAnimationFrame(next)
}

function update(dt) {
    if (download.state === 1) {
        // g
        download.region = downloadObstacles[downloadRegionInput.value].map(r => {
            return { x: r.start, y: 75, width: r.width, height: 150 };
        })
        // h
        const danger = download.region.some((r) => isCollision(
            r,
            { x: download.packagePos, y: 130, width: 50, height: 50}
        ));
        const speed = danger ? 50 : 100;
        // i
        if (danger) {
            if (random(1, 1000) <= 1) {
                download.state = 3;
            }
        }
        // d
        download.packagePos -= speed * dt;
        // e
        if (download.packagePos < 300 - 50) {
            download.state = 2;
        }
    }
}

function render() {
    // d
    context.clearRect(0, 0, canvas.width, canvas.height);
    // g
    if (download.state !== 0) {
        download.region.forEach((region) => {
            context.fillStyle = 'red';
            context.fillRect(region.x, region.y, region.width, region.height);
        })
    }
    // a
    context.drawImage(serverImage, 850, 75);
    context.drawImage(clientImage, 50, 90);
    // b
    context.beginPath();
    context.moveTo(300, 150);
    context.lineTo(800, 150);
    context.closePath();
    context.stroke();
    // c
    context.drawImage(packageImage, download.packagePos, 130, 50, 50);
    if (download.state === 2) {
        context.font = '30px Arial';
        context.fillStyle = '#008C95';
        context.fillText('Download complete!', 350, 50);
        resetGame();
    }
    // i
    if (download.state === 3) {
        context.font = '30px Arial';
        context.fillStyle = '#1D2530';
        context.fillText('Download failed!', 350, 50);
        resetGame();
    }
}

function resetGame() {
    downloadButton.disabled = false;
}

// Start
const serverImage = new Image()
const clientImage = new Image()
const packageImage = new Image()
serverImage.src = 'img/server.png'
clientImage.src = 'img/client.png'
packageImage.src = 'img/package.png'

next()

downloadButton.addEventListener('click', (e) => {
    download.state = 1;
    download.packagePos = 760;
    download.disabled = true;
});

// =============== Segédfüggvények =================

function isCollision(box1, box2) {
  return !(
    box2.y + box2.height < box1.y ||
    box1.x + box1.width < box2.x ||
    box1.y + box1.height < box2.y ||
    box2.x + box2.width < box1.x
  )
}

function random(a, b) {
  return Math.floor(Math.random() * (b - a + 1)) + a
}
