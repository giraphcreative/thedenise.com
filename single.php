<?php
/**
 * The Template for displaying all single posts
 */

get_header();

?>
	<section role="main">
		
		<header>
			<h2>Blog</h2>
		</header>
		<article class="main-content">
		<?php 
		if ( have_posts() ) :
			while ( have_posts() ) : the_post(); 
				?>
				<h1><?php the_title(); ?></h1>
				<div class="post-meta">
					Posted by <?php the_author_link() ?> <span>on <?php the_date() ?></span>
				</div>
				<?php
				the_post_thumbnail( 'square' );

				the_content();
			endwhile;
		endif;
		?>
		</article>

	</section>
<?php

get_footer();

?>