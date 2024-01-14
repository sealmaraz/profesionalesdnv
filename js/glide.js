// let anchoPantalla = window.screen.width;

// if (anchoPantalla > 435) {
//     new Glide('.glide', {
//         type: 'carousel',
//         perView: 4,
//         gap: 30,
//         startAt: 0,
//     }).mount();
// } else {
//     new Glide('.glide', {
//         type: 'carousel',
//         perView: 2,
//         gap: 30,
//         startAt: 0,
//     }).mount();
// }

new Glide('.glide', {
    type: 'carousel',
    perView: 4,
    // gap: 10,
    startAt: 1,
    breakpoints: {
        1024: {
          perView: 3
        },
        600: {
          perView: 2
        },
        435:{
            perView:1
        }
      }
}).mount();