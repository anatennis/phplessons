/*var d;
var box = 32;
var stgame;
let snakegame = new Game();
snakegame.initStartPos();
snakegame._start();*/

let button =  document.getElementById('startb');
button.addEventListener('click', startg);
function startg(event) {
    button.classList.add('invis');
    game = setInterval(Draw, 500);
}

scoret = document.getElementById('scoret');
scoret.innerHTML = 0;