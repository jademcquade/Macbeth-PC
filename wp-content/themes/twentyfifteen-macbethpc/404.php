<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

<div class="article">	

	<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h1>

	<p>If you would like to send us a message use this form.</p>

	<div class="half-desktop">

		<?php echo do_shortcode( '[contact-form-7 id="50" title="Contact form 1"]' ); ?>

	</div>

	<br/>

	<p>Otherwise click <a href="/">here</a> to go to the homepage.</p>

</div> 

<?php get_footer(); ?>