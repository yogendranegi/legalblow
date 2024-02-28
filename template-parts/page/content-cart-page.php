<?php
/**
 * Template part for displaying cart page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package legalblow
 */

?>

<?php
	if('right'===esc_html(get_theme_mod('legalblow_cart_page_sidebar_layout','no'))) :
		?>
			<?php
				if ( is_active_sidebar('woosidebar')) :
					?>
						<div class="container">
							<div id="cart-wrapper" class="col-md-9">
								<div class="content-page">
									<div class="page-content-area">
										<div class="entry-content">
											<?php
												the_content();
												wp_link_pages( array(
													'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'legalblow' ),
													'after'  => '</div>',
												) );
											?>
										</div><!-- .entry-content -->
										<footer class="entry-footer">
											<?php
												edit_post_link(
													sprintf(
														/* translators: %s: Name of current post */
														esc_html__( 'Edit %s', 'legalblow' ),
														the_title( '<span class="screen-reader-text">"', '"</span>', false )
													),
													'<span class="edit-link">',
													'</span>'
												);
											?>
										</footer><!-- .entry-footer -->
									</div>
								</div>
							</div>
							<div id="sidebar-wrapper" class="col-md-3">
				            	<?php get_sidebar('woosidebar'); ?>
				            </div>
				        </div>
					<?php
				endif;
			?>
		<?php
	elseif('left'===esc_html(get_theme_mod('legalblow_cart_page_sidebar_layout','no'))) :
		?>
			<?php
				if ( is_active_sidebar('woosidebar')) :
					?>
						<div class="container">
							<div id="sidebar-wrapper" class="col-md-3">
				            	<?php get_sidebar('woosidebar'); ?>
				            </div>
							<div id="cart-wrapper" class="col-md-9">
								<div class="content-page">
									<div class="page-content-area">
										<div class="entry-content">
											<?php
												the_content();
												wp_link_pages( array(
													'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'legalblow' ),
													'after'  => '</div>',
												) );
											?>
										</div><!-- .entry-content -->
										<footer class="entry-footer">
											<?php
												edit_post_link(
													sprintf(
														/* translators: %s: Name of current post */
														esc_html__( 'Edit %s', 'legalblow' ),
														the_title( '<span class="screen-reader-text">"', '"</span>', false )
													),
													'<span class="edit-link">',
													'</span>'
												);
											?>
										</footer><!-- .entry-footer -->
									</div>
								</div>
							</div>
						</div>
					<?php
				endif;
			?>
		<?php
	else :
		?>
			<div class="container">
				<div id="cart-wrapper" class="col-md-12">
					<div class="content-page">
						<div class="page-content-area">
							<div class="entry-content">
								<?php
									the_content();
									wp_link_pages( array(
										'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'legalblow' ),
										'after'  => '</div>',
									) );
								?>
							</div><!-- .entry-content -->
							<footer class="entry-footer">
								<?php
									edit_post_link(
										sprintf(
											/* translators: %s: Name of current post */
											esc_html__( 'Edit %s', 'legalblow' ),
											the_title( '<span class="screen-reader-text">"', '"</span>', false )
										),
										'<span class="edit-link">',
										'</span>'
									);
								?>
							</footer><!-- .entry-footer -->
						</div>
					</div>
				</div>
			</div>
		<?php
	endif;
?>