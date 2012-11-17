$(document).ready(function(){
  function play(){
    var left = 0;
    $('.slice').each(function(){ 
      $(this)
        .css('left', left)
        .smushIn({ 'speed':'slow'})
        .css('background-color', rand_hex());
      left += $(this).width();
    });
  }
  
  function rand_hex(){
    return '#'+(Math.random()*0xFFFFFF<<0).toString(16); 
  }  
  
  $('#watch_again').on('click', function(){play();});
  
 setTimeout(function(){ play(); }, 800);
    
  $('ul.nav').highlightCurrentLink();
});
