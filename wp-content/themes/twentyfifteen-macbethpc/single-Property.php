<?php

$numbers = get_post_meta($post->ID, 'cost', true);
$tagline = get_post_meta($post->ID, 'tagline', true);

get_header(); ?>

<div class="wrapper">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="property-vitals">

		<?php the_title('<h1>', '</h1>'); ?>

		<div class="property-vitals-price">

		<?php if (preg_match('/^[1-9]*$/', $numbers[0] )) {
			echo '<h2>£' . get_post_meta($post->ID, 'cost', true) . '</h2>';
		} else {
			echo '<h2>' . get_post_meta($post->ID, 'cost', true) . '</h2>';
		} ?>

		</div>

		<h3><?php $tagline; ?></h3>

	</div>	

	<div class="property-content">

		<?php the_content(); ?>

	</div>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php wp_reset_query(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 

	<div class="property-sidebar">

		<?php get_template_part( 'property-specifics' ); ?>

		<?php get_template_part( 'property-filter' ); ?>

	</div>

	<div class="property-contact-form">

	<h3>Enquire now</h3>

	<?php echo do_shortcode( '[contact-form-7 id="63" title="Quick Contact"]' ); ?>

	</div>

	<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>