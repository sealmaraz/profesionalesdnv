var swiper = new Swiper(".mySwiper",{
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 3,
    coverflowEffect:{
        rotate:15,
        stretch:0,
        depth:300,
        modifier:1,
        slideShadows:true,
    },
    loop:true,
});