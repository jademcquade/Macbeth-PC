<?php get_header(); ?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<div class="wrapper">

	<h1><?php the_title(); ?></h1>
	
	<?php the_content(); ?>

</div> 

<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>

<?php get_footer(); ?>