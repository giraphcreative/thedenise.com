<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>	
	<div class="footer-border">&nbsp;</div>

	<footer>
		<div class="wrap">
			<img src="<?php bloginfo( 'template_url' ) ?>/img/logo-small.png" class="alignright logo">
			<div class="info">
				<span><a href="mailto:info@thedenise.com">info@thedenise.com</a><br></span>
				<a href="tel:8886657774">(888) 665-7774</a><br>
				<a href="tel:2067758737">(206) 775-8737</a><br>
				<div class="social">
					<a href="https://www.youtube.com/channel/UC-uNZsOnnrHsK1yiMeHJLrQ" target="_blank"><img src="<?php bloginfo( 'template_url' ) ?>/img/social-youtube.png"></a>
					<a href="https://www.linkedin.com/in/denise-gabel-5010794/" target="_blank"><img src="<?php bloginfo( 'template_url' ) ?>/img/social-linkedin.png"></a>
					<a href="https://www.facebook.com/denise.gabel.1" target="_blank"><img src="<?php bloginfo( 'template_url' ) ?>/img/social-facebook.png"></a>
					<a href="https://mobile.twitter.com/Denise_Gabel" target="_blank"><img src="<?php bloginfo( 'template_url' ) ?>/img/social-twitter.png"></a>
				</div>
			</div>
		</div>
	</footer>

</body>

<?php wp_footer(); ?>
</body>
</html>