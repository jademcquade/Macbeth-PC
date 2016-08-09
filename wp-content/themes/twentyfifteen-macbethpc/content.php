<?php query_posts( array ( 'category_name' => 'web', 'posts_per_page' => -1 ) ); ?>

<?php
if (have_posts()) : while ( have_posts() ) : the_post(); ?>

    <div class="news-item">

    	<div class="news-thumb">
		    <?php echo get_the_post_thumbnail( $post_id, array( 100, 100) ); ?>
	    </div>

	    <div class="news-text">
		    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		    <?php echo wp_trim_words( get_the_content(), 70 ); ?>
		    <a href="<?php get_permalink(); ?>">Continue reading</a>	    
	    </div>
    </div> 

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php wp_reset_query(); ?>