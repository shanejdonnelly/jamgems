$(document).ready(function(){
  function play(){
    var left = 0;
    $('.slice').each(function(){ 
      $(this)
        .css('left', left)
        .width($('.container').width() / 12)
        .smushIn({ 'speed':'slow'})
        .css('background-color', rand_hex());
      left += $(this).width();
    });
  }
  
  function rand_hex(){
    return '#'+(Math.random()*0xFFFFFF<<0).toString(16); 
  }  
  
  $('#watch_again').on('click', function(){
    play();
    setTimeout(function(){
      $('.hero_message').find('h1').first().fadeIn(500);
    }, 500);
    setTimeout(function(){
      $('.hero_message').find('h1').last().fadeIn(500);
    }, 2000);    
        setTimeout(function(){
      $('.hero_message').find('h1').fadeOut(500);
    }, 6500);
  });
  
 setTimeout(function(){ play(); }, 200);
    
  $('ul.nav').highlightCurrentLink();
  
  $('.slice').on('mouseenter', function(){
    $(this).css('background-color', rand_hex());
  });
  
});
