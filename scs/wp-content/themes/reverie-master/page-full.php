<?php
/*
Template Name: Full Width
*/
get_header(); ?>


<!-- Start the main container -->
<div id="off-skrollr-body" role="document" class="content-area">

	<header class="full-page section first" >
		<div class="left">
			<!-- <h2 class="header">Memories That Last</h2> -->
			<!-- <p class="subheader">Story Corner Studios is a production studio based in Kansas CIty, Missouri. We specialize in capturing personal stories through interview-based video production.</p> -->
			<?php $post = get_post(7);
						echo apply_filters( 'the_content', $post->post_content );
			?>
			<button class="button ghost watch">Watch Video</button>
		</div>
		<div class="video-wrapper">
			<video autobuffer controls id="video">
				<source src="<?php echo get_template_directory_uri(); ?>/vid/scs-flight-stories.mp4" type="video/mp4"></source>
			</video>
			<span class="close icon-cancel icon"></span>
		</div>
		<div class="down-wrapper">
			<span class="down icon icon-down-open"></span>
		</div>
	</header>

	<section class="section second">
		<!-- <h2 class="header">Pillars of Practice</h2>
		<ul class="small-block-grid-3 pillars">
			<li class="pillars-item preservation" data-bottom-top="transform: translate(-100px, 100px); opacity: 0;" data-bottom-bottom="transform: translate(0px, 0px); opacity: 1">
				<div class="circle hidden"></div>
				<h3 class="header">Preservation</h3>
				<p class="desc">Our mission is to make memories last forever.</p>
			</li>
			<li class="pillars-item presentation" data-bottom-top="transform: translateY(100px); opacity: 0" data-bottom-bottom="transform: translateY(0px); opacity: 1">
				<div class="circle hidden"></div>
				<h3 class="header">Presentation</h3>
				<p class="desc">We will always make professional work.</p>
			</li>
			<li class="pillars-item education" data-bottom-top="transform: translate(100px, 100px); opacity: 0" data-bottom-bottom="transform: translate(0px, 0px); opacity: 1">
				<div class="circle hidden"></div>
				<h3 class="header">Education</h3>
				<p class="desc">We mentor and build up our student associates through training and employment.</p>
			</li>
		</ul> -->

		<?php $post = get_post(9);
					echo apply_filters( 'the_content', $post->post_content );
		?>
	</section>

	<section class="section third clearfix">
		<div class="left">
			<!-- <h2 class="header">Headline</h2>
			<p class="subheader">
				Lorem ipsum dolor sit amet, in vitae gravida ac iaculis. Porttitor vitae pellentesque elementum eu magna, cupidatat nec pellentesque vestibulum sed vitae. Nam natoque, sit tincidunt cras ut, nullam mauris felis suspendisse tellus per mauris, id in diam turpis arcu in.
			</p>
			<button class="button ghost">Call to Action</button> -->
			<?php $post = get_post(12);
						echo apply_filters( 'the_content', $post->post_content );
			?>
		</div>
		<div class="right show-for-medium-up">
			<img class="img" src="<?php echo get_template_directory_uri(); ?>/img/people.png" alt="People" />
		</div>
	</section>

	<section class="section fourth">
		<div class="picture-wrapper">
			<img class="picture" src="<?php echo get_template_directory_uri(); ?>/img/Family.jpg" alt="Family" />
		</div>
		<div class="four-point-wrapper">
			<ul class="four-point small-block-grid-1 medium-block-grid-4">
				<!-- <li class="point-item">
					<div>
						<span class="circle first">1</span>
						<p>
							Every person is unique. We tailor our interviews to each individual to best capture their personal Story.
						</p>
					</div>
				</li>
				<li class="point-item">
					<div>
						<span class="circle second">2</span>
						<p>
							Our innovative buisness model allows us to  offer professional quality services at family friendly prices.
						</p>
					</div>
				</li>
				<li class="point-item">
					<div>
						<span class="circle third">3</span>
						<p>
							We deliver a professional quality video in a two-week turnaround.
						</p>
					</div>
				</li>
				<li class="point-item">
					<div>
						<span class="circle fourth">4</span>
						<p>
							We bring a youthful and fun experience in every interview we conduct.
						</p>
					</div>
				</li> -->

				<?php $post = get_post(14);
							echo apply_filters( 'the_content', $post->post_content );
				?>
			</ul>
		</div>
		<h2 class="header testimonials">Testimonials</h2>
		<div class="testimonials-grid-wrapper">
			<ul class="small-block-grid-1 medium-block-grid-3 testimonial-grid">
				<li class="testimonial-item clearfix">
					<img src="<?php echo get_template_directory_uri(); ?>/img/test1.png" alt="Terri" class="picture left"/>
					<!-- <p class="testimonial right">
						I wish we would've done this sooner! <br /> - Terri Blake
					</p> -->
					<?php $post = get_post(21);
								echo apply_filters( 'the_content', $post->post_content );
					?>
				</li>
				<li class="testimonial-item clearfix">
					<img src="<?php echo get_template_directory_uri(); ?>/img/test2.png" alt="Cori" class="picture left"/>
					<!-- <p class="testimonial right">
						This is the greatest gift a family can recieve. <br /> - Cori Watkins
					</p> -->
					<?php $post = get_post(23);
								echo apply_filters( 'the_content', $post->post_content );
					?>
				</li>
				<li class="testimonial-item clearfix">
					<img src="<?php echo get_template_directory_uri(); ?>/img/test3.png" alt="Rick" class="picture left"/>
					<!-- <p class="testimonial right">
						My family will cherish this forever. <br /> - Rick Bickford
					</p> -->
					<?php $post = get_post(25);
								echo apply_filters( 'the_content', $post->post_content );
					?>
				</li>
			</ul>
		</div>
		<div class="pricing-wrapper hidden">
			<ul class="small-block-grid-3 pricing">
				<!-- <li class="price-point">
					<div class="inner-price">
						<p class="price">$500</p>
						<ul class="desc-list">
							<li class="desc">Massa at sodales, morbi mattis lectus, etiam nec nec arcu dictum vestibulum morbi, praesent suscipit.</li>
							<li class="desc">Massa at sodales, morbi mattis lectus, etiam nec nec arcu dictum vestibulum morbi, praesent suscipit.</li>
							<li class="desc">Massa at sodales, morbi mattis lectus, etiam nec nec arcu dictum vestibulum morbi, praesent suscipit.</li>
						</ul>
						<button class="button purchase">Purchase</button>
					</div>
				</li>
				<li class="price-point">
					<div class="inner-price">
						<p class="price">$500</p>
						<ul class="desc-list">
							<li class="desc">Massa at sodales, morbi mattis lectus, etiam nec nec arcu dictum vestibulum morbi, praesent suscipit.</li>
							<li class="desc">Massa at sodales, morbi mattis lectus, etiam nec nec arcu dictum vestibulum morbi, praesent suscipit.</li>
							<li class="desc">Massa at sodales, morbi mattis lectus, etiam nec nec arcu dictum vestibulum morbi, praesent suscipit.</li>
						</ul>
						<button class="button purchase">Purchase</button>
					</div>
				</li>
				<li class="price-point">
					<div class="inner-price">
						<p class="price">$500</p>
						<ul class="desc-list">
							<li class="desc">Massa at sodales, morbi mattis lectus, etiam nec nec arcu dictum vestibulum morbi, praesent suscipit.</li>
							<li class="desc">Massa at sodales, morbi mattis lectus, etiam nec nec arcu dictum vestibulum morbi, praesent suscipit.</li>
							<li class="desc">Massa at sodales, morbi mattis lectus, etiam nec nec arcu dictum vestibulum morbi, praesent suscipit.</li>
						</ul>
						<button class="button purchase">Purchase</button>
					</div>
				</li> -->

				<?php $post = get_post(18);
							echo apply_filters( 'the_content', $post->post_content );
				?>
			</ul>
		</div>

		<div class="cities-wrapper">
			<div class="cities">
				<!-- <h3 class="header">Cities we cover</h3>
				<p class="cities-list">
					Kansas City
					<span class="pipe">|</span>
					Olathe, KS
					<span class="pipe">|</span>
					Topeka, KS
					<span class="pipe">|</span>
					Lawrence, KS
					<span class="pipe">|</span>
					Wichita, KS *
					<span class="pipe">|</span>
					Colombia, MO *
					<span class="pipe">|</span>
					Manhattan, KS *
					<br />
				</p>
				<p class="cost">
					*Travel cost not included
				</p> -->

				<?php $post = get_post(27);
							echo apply_filters( 'the_content', $post->post_content );
				?>
			</div>

			<div class="cities-img">
				<img class="img" src="<?php echo get_template_directory_uri(); ?>/img/locations.png" alt="Our Locations" />
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
