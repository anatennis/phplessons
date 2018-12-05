let cvs = document.getElementById('canvas');
let ctx = cvs.getContext('2d');
let game;
const box = 32;
let score = 0;
let d;
let scoret;
let old;
let snake = new SnakeS();

cvs.style.background = 'black';
cvs.style.border = '2px solid red';

let food = {
    x: Math.floor(Math.random()*17+1)*box,
    y: Math.floor(Math.random()*15+3)*box
}

//controlSnake
document.body.addEventListener('keydown', direct);
function direct(event) {
    if (event.keyCode == 37) {
        d = "LEFT";
    } else if (event.keyCode == 38) {
        d = "UP";
    } else if (event.keyCode == 39) {
        d = "RIGHT";
    } else if (event.keyCode == 40) {
        d = "DOWN";
    }
}

function Draw() {
    let snakeArr = snake.getS();
    let snakeL = snake.getLength();
    for (let i=0; i<snakeL; i++) {
        //ctx.fillStyle = (i == 0) ? 'red' : 'white';
        if (i==0) {
            let snakeimg = document.createElement('img');
            snakeimg.setAttribute('src', 'pics/s.png');
            snakeimg.onload = function () {
                ctx.drawImage(snakeimg, snakeArr[i].getX(), snakeArr[i].getY());
            }
        }
        else {
            let snakeimg = document.createElement('img');
            snakeimg.setAttribute('src', 'pics/sp.png');
            snakeimg.onload = function () {
                ctx.drawImage(snakeimg, snakeArr[i].getX(), snakeArr[i].getY());
            }
        }
    }
    if (old != undefined) {
        ctx.clearRect(old.getX(), old.getY(), box, box);}


    let img = document.createElement('img');
    img.setAttribute('src', 'pics/apple.png');
    img.onload = function () {
        ctx.drawImage(img, food.x, food.y);
    }


    let snakeOldHX = snake.getS()[0].getX();
    let snakeOldHY = snake.getS()[0].getY();


    if (d=="LEFT" || d==undefined) {snakeOldHX-=box;
    };
    if (d=="RIGHT") {snakeOldHX+=box};
    if (d=="UP") {snakeOldHY-=box};
    if (d=="DOWN") {snakeOldHY+=box};

    if ((snakeOldHX == food.x) && (snakeOldHY == food.y)) {
        score++;

        food = {
            x: Math.floor(Math.random()*17+1)*box,
            y: Math.floor(Math.random()*15+3)*box
        }
        scoret = document.getElementById('scoret');
        scoret.innerHTML = score;
    } else {
        old = snake.removeTail();
    }

    if (snakeOldHX<0 || snakeOldHX>box*18 || snakeOldHY<0 ||
        snakeOldHY>box*18 || snake.collision(snakeOldHX, snakeOldHY)) {
        ctx.font="50px Verdana";
        ctx.fillText('Game Over', 150, 300);
        clearInterval(game);

    }


    snake.newHead(snakeOldHX, snakeOldHY);

}

