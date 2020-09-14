<?php /*Template Name: About Page */?>
<?php get_header(); ?>
	<div class="hero-section">
			<h3>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.<h3>
	</div>	
	<div id="about-page" class="site-content">	
			<?php while ( have_posts() ) : the_post(); 
				$size = "full";
				$hero = get_field('hero_image');
				$introduction = get_field('introduction');
				$about1_image = get_field('about1_image');
				$about1 = get_field('about1');
				$about1_info = get_field('about1_info');
				$about2_image = get_field('about2_image'); 
				$about2 = get_field('about2');
				$about2_info = get_field('about2_info');
				$about3_image = get_field('about3_image');
				$about3 = get_field('about3');
				$about3_info = get_field('about3_info');
				$about4_image = get_field('about4_image');
				$about4 = get_field('about4');
				$about4_info = get_field('about4_info');   
				?>
			<div class="about-content">
				<div class = "services-intro">
					<h5>Our Services<h5>
					<p>We take pride in or clients and the content we create for them. Here's a brief overview of our offered services</p>	
				</div>
				<div class="services">
						<li id="about_image1"><?php echo wp_get_attachment_image( $about1_image, $size ); ?></li>
						<div id="about1">
							<h3><?php echo $about1 ?></h3>
							<p><?php echo $about1_info?></p>
						</div>
						<div id="about2">
							<h3><?php echo $about2 ?></h3>
							<p><?php echo $about2_info?></p>
						</div>
						<li id="about_image2"> <?php echo wp_get_attachment_image( $about2_image, $size ); ?></li>
						<li id="about_image3"><?php echo wp_get_attachment_image( $about3_image, $size ); ?></li>
						<div id="about3">
							<h3><?php echo $about3 ?></h3>
							<p><?php echo $about3_info?></p>
						</div>
						<div id="about4">
							<h3><?php echo $about4 ?></h3>
							<p><?php echo $about4_info?></p>
						</div>
						<li id="about_image4"> <?php echo wp_get_attachment_image( $about4_image, $size ); ?></li>
				</div>
			</div>	
				<?php the_content(); ?>
				<div id="about-page-button">
					<h4>Interested in working with us?</h4><a class="button" href="<?php echo site_url('contact-us') ?>">Contact Us</a>
				</div>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
