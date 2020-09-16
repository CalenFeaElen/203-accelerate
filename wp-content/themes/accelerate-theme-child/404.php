<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<div class="page_404">
				<div id="left">
				 	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/map_image.png" />
				</div>
				<div id="right">
					<h1>Whoops, Took a Wrong Turn...</h1>
					<p>Sorry, this page no longer exists, never existed, or has been moved. We feel like complete jerks for totally misleading you.</p>
					<p>Feel free to take a look around our <a href="<?php echo site_url('blog') ?>"><strong>blog</strong></a> or some of our featured <a href="<?php echo site_url('case-studies') ?>"><span><strong>work</strong></span></a>.</p>
				</div>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

		
	</div><!-- #primary -->

<?php get_footer(); ?>
