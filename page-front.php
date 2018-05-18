<?php
/**
 * Template Name: Homepage
 */

get_header();

?>

	<section id="about" class="what">
		
		<header>
			<h2>About</h2>
			<h3>Denise</h3>
		</header>

		<div class="inner group">
			<img src="<?php bloginfo('template_url') ?>/img/photo-denise.png" class="alignright">
			<?php 
			$about = get_post( 202 );
			print apply_filters( 'the_content', $about->post_content );
			?>
		</div>

	</section>
			

	<section id="topics" class="what">
		
		<header>
			<h2>Coach &nbsp; &bull; &nbsp; Emcee &nbsp; &bull; &nbsp; Speaker</h3>
		</header>

		<div class="inner">
			<div class="half">
				<h3>Remarkable Coach</h3>
				<ul>
					<li>Executive-level</li>
					<li>Stretch and grow high potentials</li>
					<li>Creating a high-performing culture</li>
					<li>Growing the innovation competency</li>
				</ul>
				<br><br>
				<h3>Professional Emcee</h3>
				<ul>
					<li>Specializes in conferences, corporate events, awards ceremonies, auction and galas
					<li>Contagious energy, delivering clean humor while threading themes throughout content to deliver a high-impact event</li>
				</ul>
				<h3>Dynamic Speaker</h3>
				<ul>
					<li>Leadership</li>
					<li>Change</li>
					<li>Innovation</li>
					<li>Motivation</li>
					<li>Reach Your Full Potential</li>
					<li>Culture Development</li>
				</ul>
			</div>
			<div class="half">
				<img src="<?php bloginfo('template_url'); ?>/img/logo-small.png">
				<p>Want to customize topics? Just Ask!</p>
				<p>Email us at<br>
					<a href="mailto:info@thedenise.com">info@thedenise.com</a></p>
				<p>Or call:<br>
					(888) 665-7774<br>
					(206) 775-8737</p>
			</div>
		</div>

	</section>


	<div class="wrap text-center">
		<img src="<?php bloginfo('template_url') ?>/img/partners.png" />
	</div>


	<section id="testimonials" class="testimonials">
			
		<header>
			<h2>Reviews</h2>
		</header>

		<div class="wrap">
			<div class="inner">

				<img src="<?php bloginfo('template_url') ?>/img/test-1.png" class="quarter">
				<blockquote class="three-quarter">
					<p>Thank you for being AWESOME! Your energy and humor made the awards gala experience even more memorable for us.  I cannot imagine a better Master of Ceremonies. Thank you for being a part of such a special night for us.  I look forward to our paths crossing again!</p>
					<span class="by-line">Stephanie, Executive Director</span>
				</blockquote>

				<img src="<?php bloginfo('template_url') ?>/img/test-2.png" class="quarter">
				<blockquote class="three-quarter">
					<p>Denise most recently emceed the National Marketing and Business Development Conference and also has spoken on many topics throughout my 19 years of knowing her.She is the most dynamic, engaging speaker and emcee; first class comes to mind along with above and beyond! If you have an opportunity to use her vast knowledge I highly recommend her.</p>
					<span class="by-line">Nancy C. Hutchinson. SVP Marketing/Business Development</span>
				</blockquote>

				<img src="<?php bloginfo('template_url') ?>/img/test-3.png" class="quarter">
				<blockquote class="three-quarter">
					<p>Denise is always a pleasure to watch on stage. Her presence in front of an audience will always grab your attention and above all she is a consummate professional.</p>
					<span class="by-line">Cheryl Sorenson, Manager, Conferences and Meetings</span>
				</blockquote>

				<img src="<?php bloginfo('template_url') ?>/img/test-4.png" class="quarter">
				<blockquote class="three-quarter">
					<p>Denise brings an energy and excitement to the dinner that is extremely refreshing. Through her subtle humor and radiant personality, she creates a warm and friendly atmosphere that makes a large group feel much more intimate.</p>
					<span class="by-line">Lynn Heckler, EVP Talent</span>
				</blockquote>

				<img src="<?php bloginfo('template_url') ?>/img/test-1.png" class="quarter">
				<blockquote class="three-quarter">
					<p>You are a strong and passionate facilitator. Bravo.</p>
					<span class="by-line">Greg Mitchell, President/CEO</span>
				</blockquote>

			</div>
		</div>

	</section>


	<section id="video" class="who">
		
		<header>
			<h2>See Denise in Action</h2>
		</header>

		<div class="inner">
			<div class="video-container">
				<?php print apply_filters( 'the_content', 'https://www.youtube.com/watch?v=jCjJOiw32As' ); ?>
				<p><a href="https://www.youtube.com/channel/UC-uNZsOnnrHsK1yiMeHJLrQ"><img src="<?php bloginfo('template_url') ?>/img/subscribe.png"></a>
			</div>
		</div>

	</section>


	<section id="connect" class="connect">
			
		<header>
			<h2>Book Denise for Your Next Event</h2>
		</header>

		<div class="wrap">
			<div class="inner">

				<div class="events third text-center">
					<img src="<?php bloginfo('template_url'); ?>/img/header-events.png">
					<ul>
					<?php
					query_posts(    array(  'post_type' => 'event',
				        'order' => 'ASC',
				        'orderby' => 'meta_value',
				        'meta_query' => array(
	            			array('key' => '_p_event_start'),
							array(
							    'key' => '_p_event_start',
							    'value' => ( time() - ( 86400 * 60 ) ),
							    'compare' => '>'
							),
	            		),
	            		'posts_per_page' => 5
	    			));
					while ( have_posts() ) : the_post();
						$event_time = get_cmb_value( 'event_start' );
						if ( $event_time > ( time() - ( 86400*60 ) ) ) {
							?>
						<li <?php print ( $event_time < time() ? 'class="past"' : '' ) ?>>
							<?php print date( 'F Y', $event_time ); ?><br>
							<?php show_cmb_value( 'event_location_text' ) ?>
						</li>
							<?php
						}
					endwhile;
					?>
					</ul>
				</div>

				<div class="form two-third group">
					<p class="intro">Just 10 hours of coaching can build tomorrows leaders.  Denise invites you to give her an hour either onstage or in person and she will change your organization’s culture and your life. </p>
					<?php print do_shortcode( '[gravityform id="1" title="false" description="false"]' ); ?>
				</div>

			</div>
			
		</div>

	</section>

<?php

get_footer();

?>