$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    arrow:false,
    autoplay:true,
    responsive:{
        0:{
            items:1,

        },
        600:{
            items:1 
        },
        1000:{
            items:3
        }
    }
});
$('.counting').each(function() {
    var $this = $(this),
        countTo = $this.attr('data-count');
    
    $({ countNum: $this.text()}).animate({
      countNum: countTo
    },
  
    {
  
      duration: 3000,
      easing:'linear',
      step: function() {
        $this.text(Math.floor(this.countNum));
      },
      complete: function() {
        $this.text(this.countNum);
        //alert('finished');
      }
  
    });  
    
  
  });