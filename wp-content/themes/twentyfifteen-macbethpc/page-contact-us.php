<?php /* Template Name: Contact Us */ ?>

<?php get_header(); ?>

	<?php get_template_part( 'googleMap' ); ?>

<div class="wrapper">

	<h2>Send us a message</h2>

	<p>We will reply as soon as we can to your enquiry.</p>

	<?php echo do_shortcode( '[contact-form-7 id="64" title="Contact Page"]' ); ?>

</div>

<?php get_footer(); ?>