<h2>More News</h2>

<?php

// Query news posts
query_posts( array ( 'category_name' => 'news', 'posts_per_page' => -1 ) );

// Output posts as li with their permalinks
echo '<ul>';

while ( have_posts() ) : the_post();
    echo '<li><a href="';
    echo the_permalink();
    echo '">';
    echo the_title();
    echo '</a></li>';   
endwhile;

echo '</ul>';

// Reset Query
wp_reset_query();

get_template_part( 'all-news' );

?>