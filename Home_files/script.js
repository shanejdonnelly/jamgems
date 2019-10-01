$(document).ready(function(){

  $('.fancybox').fancybox();

  function play(){
    var left = 0;
    var top = 0;
    $('.slice').each(function(){
      var color = rand_hex(); 
      $(this)
        .css('left', left)
        .width($('.container').width() / 12)
        .css('background-color', color)
        .smushIn({ 'speed':'slow', 'from_direction':'right'});
      left += $(this).width();
    });
  }
  
  function rand_hex(){
    return '#'+(Math.random()*0xFFFFFF<<0).toString(16); 
  }  
  var first_time = true;
  
  $('#watch_again').on('click', function(){
    play();
    if(first_time){
      setTimeout(function(){
        $('.hero_message').find('h1').first().fadeIn(500);
      }, 500);
      setTimeout(function(){
        $('.hero_message').find('h1').last().fadeIn(500);
      }, 2000);    
          setTimeout(function(){
        $('.hero_message').find('h1').fadeOut(500);
      }, 6000);
      first_time = false;
    }
  });
  
 setTimeout(function(){ play(); }, 200);
    
  //$('ul.nav').highlightCurrentLink();
  
  $('.slice').on('mouseenter', function(){
    $(this).css('background-color', rand_hex());
  });

});
