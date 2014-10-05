	</div><!-- Row End -->
</div><!-- Container End -->

<div class="full-width footer-widget">
	<div class="row">
		<?php dynamic_sidebar("Footer"); ?>
	</div>
</div>

<footer class="full-width" role="contentinfo">
	<div class="row">
		<div class="large-12 columns">
			<?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'inline-list')); ?>
		</div>
	</div>
	<div class="row love-reverie">
		<div class="large-12 columns">
			<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e('Made with Love in','reverie'); ?> <a href="http://themefortress.com/reverie/" rel="nofollow" title="Reverie Framework">Reverie</a>.</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<!-- <script type="text/javascript" src="app"></script> -->

<script>
	(function($) {
		$(document).foundation();
	    (function build_hero() {
	        var hero = $('#hero-video'),
		        video = document.getElementById('hero-video'),
	            heroRatio = '16:9',
	            win = $(window),
	            winWidth = win.width();

	            function playPause() {
	            	if (video.paused == false) {
				        video.pause();
				        this.firstChild.nodeValue = 'Play';
				        // pauseCount();
				    } else {
				        video.play();
				        this.firstChild.nodeValue = 'Pause';
				        // startCount();
				    }
	            }

	            hero.on('click', function(e) {
	            	playPause();
	            });

	            document.getElementById('hero-title').addEventListener('click', playPause);

	            hero.width(winWidth)
	            hero.height((winWidth * 9) / 16).css('margin-left', '-3.125rem');
	    }());
	})(jQuery);
</script>

</body>
</html>
