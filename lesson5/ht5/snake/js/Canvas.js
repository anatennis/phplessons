class Canvas {
    constructor() {
        this.cvs = document.getElementById('canvas');
        this.ctx = this.cvs.getContext('2d');
        this.cvs.height = 608;
        this.cvs.width = 608;
    }

    genField() {
        this.cvs.style.background = 'black';
        this.cvs.style.border = '2px solid red';
    }


}