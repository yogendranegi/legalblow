<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package legalblow
 */

get_header(); 
legalblow_before_title();
legalblow_after_title();

?>

<div id="primary" class="<?php echo esc_attr(get_theme_mod('legalblow_header_menu_style','style1')); ?> content-area">
	<main id="main" class="site-main" role="main">
		<div class="content-page">
			<div class="content-inner">
				<div class="row">
					<?php
						if('right'===esc_html(get_theme_mod('legalblow_blog_sidebar','right'))) {
							?>
								<div class="col-md-8">
									<div class="page-content-area">	
										<h1 class="page-error"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'legalblow' ); ?></h1>
										<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links on right or a search?', 'legalblow' ); ?></p>
										<?php get_search_form(); ?>
									</div>
								</div>
								<div class="col-md-3 col-md-offset-1">
									<?php get_sidebar('sidebar-1'); ?>
								</div>
							<?php
						}
						else if('left'===esc_html(get_theme_mod('legalblow_blog_sidebar','right'))) {
							?>
								<div class="col-md-3">
									<?php get_sidebar('sidebar-1'); ?>
								</div>
								<div class="col-md-8 col-md-offset-1">
									<div class="page-content-area">	
										<h1 class="page-error"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'legalblow' ); ?></h1>
										<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links on right or a search?', 'legalblow' ); ?></p>
										<?php get_search_form(); ?>
									</div>
								</div>
								
							<?php
						}
						else{
							?>
								<div class="col-md-12">
									<div class="page-content-area">	
										<h1 class="page-error"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'legalblow' ); ?></h1>
										<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links on right or a search?', 'legalblow' ); ?></p>
										<?php get_search_form(); ?>
									</div>
								</div>
							<?php
						}
					?>						
				</div>
			</div>
		</div>
	</main>
</div>

<?php
get_footer();