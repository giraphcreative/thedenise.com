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
		<div class="main-content blog-listing">
		<?php
		if ( is_search() ) {
			?><h2>Search Results for <span>'<?php print $_REQUEST["s"]; ?>'</span></h2><?php
		} else {
			?><h2>Recent Posts</h2><?php
		}

		while ( have_posts() ) : the_post();
			?>
			<article>
				<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>
				<p class="meta">Posted by <?php the_author_link() ?> in <?php print get_the_category_list( ', ', '', get_the_ID() ) ?> <span>on <?php the_date() ?></span>.</p>
			</article>
			<?php
		endwhile;
		?>

			<div class="pagination">
				<?php pagination(); ?>
			</div>

		</div>

		<div class="text-center cloud">
			<img src="<?php bloginfo('template_url'); ?>/img/word-cloud.png">
		</div>

	</section><!-- #primary -->


<?php get_footer(); ?>