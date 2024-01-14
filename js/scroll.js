const headerV = document.querySelector('header');
const imgHeader = document.querySelector('header > div > img');

let prevY = window.scrollY;
window.addEventListener('scroll', function(){
    if(window.scrollY > 60){
        headerV.classList.add('hidden_menu');
        imgHeader.classList.add('change_img');
    }else{
        headerV.classList.remove('hidden_menu');
        imgHeader.classList.remove('change_img')
    }
    prevY = window.scrollY;
});