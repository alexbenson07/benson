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
	<h3 class="subheader">Social</h3>
	<ul class="social-list small-block-grid-4">
		<li class="social-item"></li>
		<li class="social-item"></li>
		<li class="social-item"></li>
		<li class="social-item"></li>
	</ul>
</footer>

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/skrollr.min.js"></script>

<!-- <script type="text/javascript" src="app"></script> -->

<script type="text/javascript">
	(function($) {
		$(document).foundation();

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
				}, 'ease');
			});

			$('.nav-item.contact').on('click', function(e) {
				e.preventDefault();

				$('html, body').animate({
					scrollTop: $(document).height()
				}, 'ease');
			});

			$('.nav-item.pricing').on('click', function(e) {
				e.preventDefault();

				$('html, body').animate({
					scrollTop: $('.pricing-wrapper').offset().top - 180
				}, 'ease');
			});

			$('.nav-item.mission').on('click', function(e) {
				e.preventDefault();

				$('html, body').animate({
					scrollTop: $('.section.second').offset().top - 180
				}, 'ease');
			});

			$('.nav-item.careers').on('click', function(e) {
				e.preventDefault();

				$('html, body').animate({
					scrollTop: $('.four-point-wrapper').offset().top - 180
				}, 'ease');
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
						wrapper = $('.video-wrapper');

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

						hero.width(winWidth * 0.6).height(((winWidth * 9) / 16) * 0.6).css('top', (win.height() / 2) - hero.height() / 2);

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
						})
		}());
	})(jQuery);
</script>

</body>
</html>
