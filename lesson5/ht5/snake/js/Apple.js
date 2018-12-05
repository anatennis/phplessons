class Apple {
    constructor () {
        this._apple = new Image();
        this._apple.src = '../pics/apple.png';
        this._x = Math.floor(Math.random()*17+1)*box;
        this._y = Math.floor(Math.random()*15+3)*box;
    }

    getImg() {
        return this._apple;
    }

    getX() {
        return this._x;
    }

    getY() {
        return this._y;
    }
}