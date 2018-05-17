<?php
/*
Home/catch-all template
*/

get_header();

?>

	<section role="main">
		
		<header>
			<h2>Blog</h2>
		</header>
		<section class="main-content blog-listing">
			<h2>Posts in <span><?php single_cat_title() ?></span></h2>
		<?php
		while ( have_posts() ) : the_post();
			?>
			<article>
				<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>
				<p class="meta">Posted by <?php the_author_link() ?> in <?php print get_the_category_list( ', ', '', get_the_ID() ) ?> <span>on <?php the_date() ?></span></p>
			</article>
			<?php
		endwhile;
		?>

			<div class="pagination">
				<?php pagination(); ?>
			</div>
		</section>

	</section><!-- #primary -->


<?php get_footer(); ?>