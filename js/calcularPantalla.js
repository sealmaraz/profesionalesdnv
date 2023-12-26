const element = document.getElementById('footer');
const element2 = document.getElementById('header');
const main = document.getElementById('main');

let altoFooter = element.clientHeight;
let altoHeader = element2.clientHeight;
let altoPantalla = screen.height;

let altoSection = altoPantalla - altoFooter - altoHeader;

main.classList.add('alto_main');
console.log(element.clientHeight);
console.log(element2.clientHeight);
console.log(screen.height);
console.log(altoSection);