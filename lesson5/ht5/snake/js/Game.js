class Game {
    constructor() {
        this._cvs = document.getElementById('canvas');
        this._ctx = this._cvs.getContext('2d');
        this._snake = new SnakeS();
        this._score = 0;
        this._scoret;
        this._old;
        this._cvs.style.background = 'black';
        this._cvs.style.border = '2px solid red';
        this._food = {
            x: Math.floor(Math.random()*17+1)*box,
            y: Math.floor(Math.random()*15+3)*box
        }
    }

    initStartPos() {
        document.body.addEventListener('keydown', this._direct);
    }

    _direct(event) {
    if (event.keyCode == 37) {
        //console.log('left');
        d = "LEFT";
    } else if (event.keyCode == 38) {
        //console.log('up');
        d = "UP";
    } else if (event.keyCode == 39) {
        d = "RIGHT";
    } else if (event.keyCode == 40) {
        d = "DOWN";
    }
}

    _draw() {
        let snakeArr = this._snake.getS();
        let snakeL = this._snake.getLength();
        for (let i = 0; i < snakeL; i++) {
            if (i == 0) {
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
        if (this._old != undefined) {
            ctx.clearRect(this._old.getX(), this._old.getY(), box, box);
        }


        let img = document.createElement('img');
        img.setAttribute('src', 'pics/apple.png');
        img.onload = function () {
            ctx.drawImage(img, this._food.x, this._food.y);
        }


        let snakeOldHX = this._snake.getS()[0].getX();
        let snakeOldHY = this._snake.getS()[0].getY();

        //console.log(d);

        if (d == "LEFT" || d == undefined) {
            snakeOldHX -= box;
        }
        ;
        if (d == "RIGHT") {
            snakeOldHX += box
        }
        ;
        if (d == "UP") {
            snakeOldHY -= box
        }
        ;
        if (d == "DOWN") {
            snakeOldHY += box
        }
        ;

        if ((snakeOldHX == this._food.x) && (snakeOldHY == this._food.y)) {
            this._score++;
            this._food = {
                x: Math.floor(Math.random() * 17 + 1) * box,
                y: Math.floor(Math.random() * 15 + 3) * box
            }
            this._scoret = document.getElementById('scoret');
            this._scoret.innerHTML = this._score;
        } else {
            this._old = this._snake.removeTail();
        }

        if (snakeOldHX < 0 || snakeOldHX > box * 18 || snakeOldHY < 0 ||
            snakeOldHY > box * 18 || snake.collision(snakeOldHX, snakeOldHY)) {
            this._ctx.font = "50px Verdana";
            this._ctx.fillText('Game Over', 150, 300);
            clearInterval(stgame);
        }

        this._snake.newHead(snakeOldHX, snakeOldHY);
    }

    _start() {
        let button =  document.getElementById('startb');
        button.addEventListener('click', startg);
        function startg(event) {
            button.classList.add('invis');
            stgame = setInterval(this._draw, 500);
        }

    }


}