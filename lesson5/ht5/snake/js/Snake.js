class Snake {
    constructor() {
        this._x = box*9;
        this._y = box*10;
    }

    getX() {
        return this._x;
    }

    getY() {
        return this._y;
    }

    setXY(x, y) {
        this._x = x;
        this._y = y;
    }
}