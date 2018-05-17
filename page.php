<?php
/**
 * The Template for displaying all single posts
 */

get_header();

?>
	<section role="main">
		
		<article class="main-content">
		<?php 
		if ( have_posts() ) :
			while ( have_posts() ) : the_post(); 
				?>
				<h1><?php the_title(); ?></h1>
				<div class="post-meta"></div>
				<?php
				the_content();
			endwhile;
		endif;
		?>
		</article>

	</section>
<?php

get_footer();

?>
