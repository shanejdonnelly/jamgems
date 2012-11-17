// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function noop() {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

/*
* Plugin Name : highlightCurrentLink
* Author      : Shane Donnelly
*/
(function($){

  $.fn.highlightCurrentLink = function(){
    return this.each(function() {
      var $element = $(this);
      var pathname = (window.location.pathname.match(/[^\/]+$/)[0]);
      $element.find("li").removeClass("active");
      $element.find("a[href^='" + pathname  + "']").parent('li').addClass("active");
    });
  }
})(jQuery);

/*
* Plugin Name : smushIn
* Author      : Shane Donnelly
*/
;(function ($) {

  "use strict"; 


 /* CLASS DEFINITION
  * ====================== */

  var SmushIn = function ($element, options) {
    this.settings = options;
    this.$el = $element;
    this.setup();
    this.stageRight();
  }

  SmushIn.prototype = {

    constructor: SmushIn,
      
    setup: function(){
      this.height = this.$el.height();
      this.width = this.$el.width();
      this.left = parseInt(this.$el.css('left'));
      this.font_size = parseInt(this.$el.css('font-size'));
      this.window_width = $(window).width();
      this.max_anim_speed = (this.settings.speed === 'slow') ? 130 : 75;          
      
      if(this.settings.overshot === 0){ this.settings.overshot = this.rand(10,70) }
  },  
    
    stageRight: function(){
      var base = this;
      
      //start stage right
      base.$el.css('left', base.rand((base.window_width * 1.1), (base.window_width * 2)) );
      
      //from right
      setTimeout(function(){
        
        //fly in from right
        base.$el.show().animate({'left': (base.left - base.settings.overshot)}, base.rand(200,500 ), function(){
            
            //hit the 'wall'
            base.$el.animate(
            {
              'height': (base.height * base.rand(1,2)), 
              'width': base.width * base.rand(.3, .7), 
              'margin-top': -(base.height * base.rand(.2,.4))
            }, base.max_anim_speed, function(){
              
              //bounce back
              base.$el.animate(
              { 
                'height': base.height, 
                'width': base.width, 
                'margin-top':0, 
                'left':base.left
              }, ( base.max_anim_speed * 1.75));
            });
        });
      }, base.rand(500,1500));      
    },
    
    //returns float
    rand: function(min, max){
      return Math.random() * (max - min) + min;
    }

  }


 /* PLUGIN DEFINITION
  * ======================= */

  $.fn.smushIn = function (options) {
    return this.each(function () {
      var 
        $el = $(this),
        options = $.extend({}, $.fn.smushIn.defaults, options);
      new SmushIn($el, options)
    })
  }

  $.fn.smushIn.defaults = {
    'overshot'  : 0,
    'speed'     : 'slow'      
  }

  $.fn.smushIn.Constructor = SmushIn


})(window.jQuery);
