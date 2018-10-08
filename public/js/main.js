$(function () {
  'use strict';
  // Adjust Slider Height
  var winH    = $(window).height(),
      upperH  = $('.upper-bar').innerHeight(),
      navH    = $('.navbar').innerHeight();

      $("#item_country").keydown(function(){
        $("#item_c").css("background-color", "yellow");
    });
    $("#item_country").keyup(function(){
        $("#item_c").css("background-color", "pink");
        
    });
    function lookup(arg){
          var id = arg.getAttribute('id');
          var value = arg.value;
          // do your stuff
         }
    

  /*$('.slider, .carousel-item').height(winH - ( upperH + navH ));

  // Featured Work Shuffle
  $('.featured-work ul li').on('click', function () {
    $(this).addClass('active').siblings().removeClass('active');
    if ($(this).data('class') === 'all') {
      $('.shuffle-imgs .col-md').css('opacity', 1);
    } else {
      $('.shuffle-imgs .col-md').css('opacity', '.08');
      $($(this).data('class')).parent().css('opacity', 1);
    }
  });*/

  var myName = document.getElementById('item_name'),
    mydesc = document.getElementById('item_description'),
    myprice = document.getElementById('item_price'),
    mynamelive = document.getElementById('item_n'),
    mydesclive = document.getElementById('item_d'),
    mypricelive = document.getElementById('item_p');


myName.onkeyup = function(){
    
    'use strict';
    mynamelive.textContent = this.value;
};

mydesc.onkeyup = function(){
    
    'use strict';
    mydesclive.textContent = this.value;
};

myprice.onkeyup = function(){
    
    'use strict';
    mypricelive.textContent = "$"+ this.value;
};
});
