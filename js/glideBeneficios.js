let anchoPantalla = document.documentElement.clientWidth;
if (anchoPantalla < 1024) {
    new Glide('.glide', {
        type: 'carousel',
        perView: 1,
        gap: 20,
        startAt: 0,
    }).mount();
} else{
    new Glide('.glide', {
        type: 'carousel',
        perView: 3,
        gap: 30,
        startAt: 0,
    }).mount();
}