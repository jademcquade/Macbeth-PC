<div class="column2">

<h2>Latest Property</h2>

<?php

$args = array( 'post_type' => 'Property', 'posts_per_page' => 1 );
$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();

$the_content = get_the_content();
$pattern = '/\[([^]]+)\]/'; // Regex for anything in []
$the_content = preg_replace($pattern, '', $the_content);  # strip shortcodes, keep shortcode content ?>

	<div class="home-news-item">

		<div class="home-news-thumb">
			<?php echo get_the_post_thumbnail( $post, array( 70, 70) ); ?>
		</div>

		<div class="home-news-text">

			<a href="<?php the_permalink(); ?>"><?php the_title('<h3>', '</h3>'); ?></a>

		 	<?php echo wp_trim_words( $the_content, 40 ); ?>

	    </div>

    </div>

	<a href="<?php the_permalink(); ?>" class="more-link">Continue reading</a>

<?php endwhile; ?>

<?php wp_reset_query(); 
?>

</div>