<?php
/**
 * The template for displaying the homepage
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

<section class="homepage">
	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('case-studies') ?>">View Our Work</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->
</section>

<section class="featured-work"> 
    <h4>Featured Work</h4> 
    <ul class="homepage-featured-work"> 
      <?php query_posts('posts_per_page=3 & post_type=case_studies'); ?>
        <?php while ( have_posts() ) : the_post(); 
            $image_1 = get_field("image_1");
            $size = "medium";
        ?>
        <li class="individual-featured-work">
          <figure><a href="<?php the_permalink(); ?>">
            <?php echo wp_get_attachment_image($image_1, $size); ?></a>
          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        </li>
      <?php endwhile; ?>
      <?php wp_reset_query(); ?>
    </ul>  
</section>


<section class="recent-posts"> 
    <div class="blog-post">
    	<h4>From the Blog</h4>
    	<?php query_posts('posts_per_page=1'); ?>
    		<?php while ( have_posts() ) : the_post(); ?>
    		 	<h3><?php the_title(); ?></h3>
       			<p><?php the_excerpt(); ?></p> 
  		<?php endwhile; ?>
  	   <?php wp_reset_query(); ?>
    </div>
    <div class="twitter-feed">
      <div class="twitter-feed-content">
        <h4>Recent Tweets</h4>
        <h3>@Skillcrush</h3>
        <p><?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
          <div id="secondary" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-2' ); ?>
          </div>
        </p>
        <a class = "follow-us" href="http://twitter/skillcrush.com">Follow Us &#8250;</a>  
      </div>
    </div>
    <div class="mailchimp">
      <h4>Sign Up For Our Newsletter</h4>
      <p><?php echo do_shortcode('[mc4wp_form id="47475"]'); ?></p>
    </div>
    <?php endif; ?>
</section>



<?php get_footer(); ?>
