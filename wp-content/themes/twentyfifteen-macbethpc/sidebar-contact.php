<!-- <h2>Contact Us</h2>

<ul>
	<li>Geo-Graphics</li>
	<li>Creative Design Consultants</li>
	<li>1190 Argyle Street</li>
	<li>Glasgow G3 8TE</li>
	<li><span>t.</span> +44 (0)141 337 3333</li>
	<li><span>f.</span> +44 (0)141 337 3335</li>
	<li><span>e.</span> info@geo-graphicsdesign.com</li>
</ul> -->

<h2>Contact Us</h2>

<?php // Grab Address post

	query_posts( 'category_name=Address' );

		while ( have_posts() ) : the_post();

			the_content();

		endwhile;

	wp_reset_query();

?>

<?php // Grab Telephone post

	query_posts( 'category_name=Telephone' );

		while ( have_posts() ) : the_post();

			the_content();

		endwhile;

	wp_reset_query();

?>

<?php // Grab Fax post

	query_posts( 'category_name=Fax' );

		while ( have_posts() ) : the_post();

			the_content();

		endwhile;

	wp_reset_query();

?>

<?php // Grab Email post

	query_posts( 'category_name=Email' );

		while ( have_posts() ) : the_post();

			the_content();

		endwhile;

	wp_reset_query();

?>

