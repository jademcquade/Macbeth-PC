<div class="column1" class="column">

<?php query_posts( 'p=4' );

while (have_posts()) : the_post();
	the_title('<h1>', '</h1>');
	the_content();
endwhile;

?>

<div>
	<span><a href="/investment">INVESTEMENT</a></span>
	<span><a href="/development">DEVELOPMENT</a></span>
	<span><a href="/asset-management">ASSET MANAGEMENT</a></span>
	<span><a href="/sales-purchases">SALES & PURCHASE</a></span>
	<span><a href="/client-representation">CLIENT REPRESENTATION</a></span>
</div>

</div>