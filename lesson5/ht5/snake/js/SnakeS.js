class SnakeS {
    constructor() {
        this._s = [];
        this._s[0] = new Snake();
        this._lenght = this._s.length;
    }

    getLength() {
        return this._lenght;
    }

    getS() {
        return this._s;
    }

    removeTail() {
        let old = this._s[this._lenght-1];
        this._s.pop();
        return old;
    }

    newHead(x, y) {
        let newHead = new Snake();
        newHead.setXY(x, y);
        this._s.unshift(newHead);
        this._lenght=this._s.length;
        console.log('Arr l out SnakeS', this._lenght);
    }

    collision (x, y) {
        if (this._lenght < 2) {return false;}
        for (let i=0; i<this._lenght-1; i++) {
            if (x==this._s[i].getX() && y==(this._s[i].getY())) {
                return true;
            }
        }
        return false;
    }



}