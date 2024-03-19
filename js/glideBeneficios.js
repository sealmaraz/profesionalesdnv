// let anchoPantalla = document.documentElement.clientWidth;
// if (anchoPantalla < 430) {
//   new Glide(".glide", {
//     type: "carousel",
//     perView: 1,
//     gap: 20,
//     startAt: 0,
//   }).mount();
// } else if (anchoPantalla > 431 && anchoPantalla < 768) {
//   new Glide(".glide", {
//     type: "carousel",
//     perView: 2,
//     gap: 30,
//     startAt: 0,
//   }).mount();
// } else if (anchoPantalla > 769) {
//   new Glide(".glide", {
//     type: "carousel",
//     perView: 3,
//     gap: 30,
//     startAt: 0,
//   }).mount();
// }
  new Glide(".glide", {
    type: "carousel",
    perView: 3,
    gap: 20,
    startAt: 0,
    breakpoints: {
      430: {
        perView: 1
      },
      600: {
        perView: 2
      }
    }
  }).mount();
