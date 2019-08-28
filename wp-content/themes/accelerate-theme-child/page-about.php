<?php
/**
 * The template for displaying the "About" page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="about-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

  <section class="intro">
    <div id="services-intro">
      <h4>Our Services</h4>
      <p>We take pride in our clients and the content we create for them. Here's a brief overview of our offered services.</p>
    </div><!-- .services-intro -->
  </section><!-- .intro -->

  <section class="work-with-us">
    <div id="contact-reference">
      <h3>Interested in working with us?</h3>
      <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
    </div>
  </section>

<?php get_footer(); ?>
