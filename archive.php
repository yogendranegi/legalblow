<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package legalpress
 */

get_header();
legalpress_before_title();
?>
	<div class="page-title">
        <?php legalpress_before_title_content(); ?>
	        <div class="content-section">
		        <div class="container">
		           <h1 class="main-title">
		           		<?php echo the_archive_title(); ?>
		        	</h1>
		            <?php
		                if(get_theme_mod( 'legalpress_enable_page_breadcrumbs',true)) :
		                    do_action('legalpress_breadcrumbs_hook');
		                endif;
		            ?>
		        </div>
		    </div>
	    <?php legalpress_after_title_content(); ?>
    </div>
<?php
legalpress_after_title();
?>

<div id="primary" class="<?php echo esc_attr(get_theme_mod('legalpress_header_menu_style','style1')); ?> content-area">
	<main id="main" class="site-main legalpress-main" role="main">
		<div class="container">
			<div id="blog-section">
				<div class="row">
					<div class="archive heading">
			            <h1 class="main-title"><?php the_archive_title(); ?></h1>
			        </div>
				</div>
		        <div class="row">
		        	<?php
		        		if ( is_active_sidebar('sidebar-1')) :
		        			if('right'===esc_html(get_theme_mod('legalpress_blog_sidebar_layout','right'))) :
			        			?>
			        				<div class="col-md-9">
										<?php
											if(have_posts() ) :
												while(have_posts() ) :
													the_post();
													/*
													 * Include the Post-Format-specific template for the content.
													 * If you want to override this in a child theme, then include a file
													 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
													 */
													get_template_part( 'template-parts/post/content-archive', get_post_format());
												endwhile;
												?>
						                			<nav class="pagination">
						                    			<?php the_posts_pagination(); ?>
						                			</nav>
												<?php	
											endif;
										?>
						            </div>
						            <div class="col-md-3">
						                <?php get_sidebar('sidebar-1'); ?>
						            </div>
			        			<?php
		        			elseif('left'===esc_html(get_theme_mod('legalpress_blog_sidebar_layout','right'))) :
			        			?>
			        				<div class="col-md-3">
						                <?php get_sidebar('sidebar-1'); ?>
						            </div>
						            <div class="col-md-9">
										<?php
											if(have_posts() ) :
												while(have_posts() ) :
													the_post();
													/*
													 * Include the Post-Format-specific template for the content.
													 * If you want to override this in a child theme, then include a file
													 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
													 */
													get_template_part( 'template-parts/post/content-archive', get_post_format());
												endwhile;
												?>
						                			<nav class="pagination">
						                    			<?php the_posts_pagination(); ?>
						                			</nav>
												<?php	
											endif;
										?>
						            </div>
						    	<?php
			        		else :
			        			?>
									<div class="col-md-12">
										<?php
											if(have_posts() ) :
												while(have_posts() ) :
													the_post();
													/*
													 * Include the Post-Format-specific template for the content.
													 * If you want to override this in a child theme, then include a file
													 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
													 */
													get_template_part( 'template-parts/post/content-archive', get_post_format());
												endwhile;
												?>
						                			<nav class="pagination">
						                    			<?php the_posts_pagination(); ?>
						                			</nav>
												<?php	
											endif;
										?>
						            </div>
								<?php
			        		endif;
			        	else:
			        		?>
								<div class="col-md-12">
									<?php
										if(have_posts() ) :
											while(have_posts() ) :
												the_post();
												/*
												 * Include the Post-Format-specific template for the content.
												 * If you want to override this in a child theme, then include a file
												 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
												 */
												get_template_part( 'template-parts/post/content-archive', get_post_format());
											endwhile;
											?>
					                			<nav class="pagination">
					                    			<?php the_posts_pagination(); ?>
					                			</nav>
											<?php	
										endif;
									?>
					            </div>
							<?php
			        	endif;
		        	?>			            
		        </div>
			</div>
		</div>
	</main>
</div>

<?php

get_footer();