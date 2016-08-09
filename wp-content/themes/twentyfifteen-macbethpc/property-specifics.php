<?php 
	$size = get_post_meta($post->ID, 'size', true);
	$tenure = get_post_meta($post->ID, 'tenure', true);
	$property_type = get_post_meta($post->ID, 'property_type', true);
	$bullets = get_post_meta($post->ID, 'bullets', true); 
?>

<div class="property-specifics">

	<p><span>Size: </span><?php echo $size; ?></p>

	<p><span>Tenure: </span><?php echo $tenure; ?></p>

	<p><span>Property type: </span><?php echo $property_type; ?></p>

	<?php $bullets = explode( "\n", $bullets ); ?>
	<p><span>Key Features</span></p>
	<ul>
		<?php
		foreach( $bullets as $bullet ) {
			echo '<li>' . $bullet . '</li>';
		}
		?>
	</ul>

	<p><span>Downloads</span></p>

	<ul>
		<?php
		$argy = array( 
			'post_mime_type' => 'application/pdf',
			'post_type' => 'attachment',
			'numberposts' => -1,
			'post_status' => null,
			'post_parent' => $post->ID );

		$attachments = get_posts($argy);
		
		if ( $attachments ) {
        foreach ( $attachments as $attachment ) {
           echo '<li>';
           the_attachment_link( $attachment->ID, true );
           echo '</li>';
          }
     }

		?>
	</ul>

</div>