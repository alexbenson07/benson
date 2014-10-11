// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation().ready(function() {
    console.log('document ready');
    (function build_hero() {
        console.log('building hero');
        var hero = $('#hero-video'),
            heroRatio = '16:9',
            win = $(window),
            winWidth = win.width,
            hero.width = win.width,
            hero.height = (win.width * 9) / 16;
    }());
    (function build_nav(){
      console.log('building nav');
      var nav = $('.navbar'),
          content = $('.content-area');

      content.on('scroll', function(e) {
        var $this = $(this);

        if ($this.offset().top) {
          nav.addClass('scrolled');
        } else {
          nav.removeClass('scrolled');
        }
      });
    }());
});
