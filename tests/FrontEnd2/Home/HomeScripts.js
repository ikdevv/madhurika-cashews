/* Navigation */

$('.nav-close').click(function(){
    $('.nav-menu').css('left','-100%');
    $('.nav-toggle').css('opacity','1')
})

$('.nav-toggle').click(function(){
    $('.nav-menu').css('left','0');
    $('.nav-toggle').css('opacity','0')

})

$('.nav-link').click(function(){
    $('.nav-menu').css('left','-100%')
})

/* Navigation */


/* Home Swipers */

/* titles */
    let swiperTitles = new Swiper('.home-titles', {
    
    loop: true,
    spaceBetween:64,
    grabCursor :true,
    centeredSlides:true,

    autoplay: {
        delay: 2500,
        disableOnInteraction: false
      },
    });
/* titles */

/* images */
    let swiperImages = new Swiper('.home-swiper', {
    
    loop: true,
    spaceBetween:64,
    grabCursor :true,
    centeredSlides:true,

    
  
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },

   /*  pagination: {
        el: '.swiper-pagination',
        }, */
    

    });
/* images */

swiperImages.controller.control = swiperTitles
swiperTitles.controller.control = swiperImages

/* Home Swipers */