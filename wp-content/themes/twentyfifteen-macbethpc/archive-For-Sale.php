<?php /* Template Name: For Sale */ ?>

<?php get_header(); ?>

<div class="wrapper margin-bottom-regular"><h1>Properties</h1>

<?php
$numbers = get_post_meta($post->ID, 'cost', true);

$args = array(
	'post_type' => 'Property',
   'meta_query' => array(
       array(
           'key' => 'Tenure',
           'value' => 'For Sale',
           'compare' => '=',
       )
   )
);
$loop = new WP_Query($args);

if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>

<div class="archive-property-item">
<div class="archive-property-thumbnail">

<?php if ( has_post_thumbnail() ) {

echo '<a href="'; the_permalink(); echo '">';
	the_post_thumbnail('medium');
echo '</a>';

}
?>

</div>
<div class="archive-property-overview">

<a href="<?php echo the_permalink(); ?>"><h3> <?php the_title(); ?></h3></a>

<p><?php echo get_post_meta($post->ID, 'Short Description', true); ?></p>
<p><?php the_excerpt(); ?></p>

</div>
</div>

<?php endwhile; else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</div>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>