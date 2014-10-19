<footer class="section footer">
	<h2 class="header contact">Contact</h2>
	<h3 class="subheader">Email</h3>
	<p class="email">
		<a href="mailto:jcstartup@gmail.com">jcstartup@gmail.com</a>
	</p>
	<h3 class="subheader">Phone</h3>
	<p class="phone">
		<a href="tel:8162224444">816.222.4444</a>
	</p>
	<h3 class="subheader hidden">Social</h3>
	<ul class="social-list small-block-grid-4 hidden">
		<li class="social-item icon-facebook"></li>
		<li class="social-item icon-twitter"></li>
		<li class="social-item icon-linkedin"></li>
		<li class="social-item icon-youtube"></li>
	</ul>
</footer>

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/skrollr.min.js"></script>

<!-- <script type="text/javascript" src="app"></script> -->

<script type="text/javascript">
	(function($) {
		// $(document).foundation();

		var s = skrollr.init();
		var fourPoint = $('.four-point');

		function isScrolledIntoView(elem) {
			var docViewTop = $(window).scrollTop();
			var docViewBottom = docViewTop + $(window).height();

			var elemTop = $(elem).offset().top;
			var elemBottom = elemTop + $(elem).height();

			return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
		}

		(function build_nav(){
			var nav     = $('.navbar');

			$('.nav-item.logo').on('click', function(e) {
				// console.log('test');

				e.preventDefault();

				$('html, body').animate({
					scrollTop: 0
				}, 500);
			});

			$('.nav-item.contact').on('click', function(e) {
				e.preventDefault();

				$('html, body').animate({
					scrollTop: $(document).height()
				}, 500);
			});

			$('.nav-item.pricing').on('click', function(e) {
				e.preventDefault();

				$('html, body').animate({
					scrollTop: $('.cities-wrapper').offset().top - 180
				}, 500);
			});

			$('.nav-item.mission').on('click', function(e) {
				e.preventDefault();

				$('html, body').animate({
					scrollTop: $('.section.second').offset().top - 180
				}, 500);
			});

			$('.nav-item.careers').on('click', function(e) {
				e.preventDefault();

				$('html, body').animate({
					scrollTop: $('.four-point-wrapper').offset().top - 180
				}, 500);
			});
		}());

		(function build_first_section(){
			var first = $('.section.first');

			first.children('.left').css('margin-top', ($(window).height() /2) - (first.children('.left').height() / 2));
		}());

		$(document).on('scroll', function() {
			if (!fourPoint.hasClass('in-view')) {
				if (isScrolledIntoView(fourPoint)) {
					fourPoint.addClass('in-view');
				}
			}
		});


		(function build_video() {
				var hero = $('#video'),
						video = document.getElementById('video'),
						heroRatio = '16:9',
						win = $(window),
						winWidth = win.width(),
						wrapper = $('.video-wrapper'),
						mult = 0.9;

						// function playPause() {
						//   if (video.paused == false) {
						//       video.pause();
						//       this.firstChild.nodeValue = 'Play';
						//       // pauseCount();
						//   } else {
						//       video.play();
						//       this.firstChild.nodeValue = 'Pause';
						//       // startCount();
						//   }
						//     }
						//
						// hero.on('click', function(e) {
						//   playPause();
						// });
						//
						// document.getElementById('hero-title').addEventListener('click', playPause);
						if (400 > winWidth * mult) {
							mult = 0.9;
							wrapper.css('left', '5%');
						}

					hero.width(winWidth * mult).height(((winWidth * 9) / 16) * mult);
					wrapper.css('top', (win.height() / 2) - hero.height() / 2);

					if (hero.height() > win.height()) {
						// console.log(win.height() - hero.height());
						// wrapper.css('margin-top', '-' + win.height() - hero.height());
					}

						$('.watch').on('click', function(e) {
							e.preventDefault();

							wrapper.addClass('show');

							video.play();
						});

						$('.close').on('click', function(e) {
							e.preventDefault();

							wrapper.removeClass('show');

							video.pause();

							video.currentTime = 0;
						});

						$('.first').on('click', function(e) {
							// console.log(e.target);
							if (wrapper.hasClass('show') && !($(e.target).hasClass('watch'))) {
								wrapper.removeClass('show');

								video.pause();

								video.currentTime = 0;
							}
						});

						$('#video').on('click', function(e) {
							if (video.paused) {
								video.play();
							} else {
								video.pause();
							}
						});
		}());

		$('.down').on('click', function(e) {
			$('html, body').animate({
				scrollTop: $('.section.first').height() - 80
			}, 500);
		});
	})(jQuery);
</script>

</body>
</html>
