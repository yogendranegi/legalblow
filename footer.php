<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package legalblow
 */

?>
	</div>
	<!-- Begin Footer Section -->
	<footer id="footer" class="legalblow-footer" itemscope itemtype="https://schema.org/WPFooter">
		<div class="container">
			<div class="row">
				<div class="footer-widgets-wrapper">
	                <?php get_sidebar( 'footer' ); ?>
	            </div>
	        </div>
			<div class="footer-copyrights-wrapper">
				<?php
			        /**
			         * Hook - legalblow_action_footer.
			         *
			         * @hooked legalblow_footer_copyrights - 10
			         */
			        do_action( 'legalblow_action_footer' );
		        ?>
		    </div>
		</div>
    </footer>
	<?php wp_footer(); ?>
</body>
</html>