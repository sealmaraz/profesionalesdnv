let anchoPantalla = window.screen.width;

if (anchoPantalla > 435) {
    new Glide('.glide', {
        type: 'carousel',
        perView: 4,
        gap: 30,
        startAt: 0,
    }).mount();
} else {
    new Glide('.glide', {
        type: 'carousel',
        perView: 2,
        gap: 30,
        startAt: 0,
    }).mount();
}