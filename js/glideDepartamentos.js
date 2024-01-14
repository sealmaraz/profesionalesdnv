window.addEventListener('load', function(){
  new Glider(document.querySelector('.glider1'), {
      slidesToShow: 1,
      slidesToScroll:'auto',
      dots: '.dots1',
      // draggable: true,
      arrows: {
          prev: '.glider-prev',
          next: '.glider-next'
      },
  });
});