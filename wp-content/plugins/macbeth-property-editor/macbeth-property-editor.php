<?php 

/*
Plugin Name: Macbeth Property Editor
Plugin URI: http://www.macbethpc.com/
Description: Adds custom fields to the Property custom post type editor.
Version: 0.0.1
Author: Jordan McQuade
Author URI: http://wp.tutsplus.com/
License: Public Domain
*/

add_action( 'add_meta_boxes', 'cd_meta_box_add' );
function cd_meta_box_add()
{
  add_meta_box( 'my-meta-box-id', 'Other Info', 'cd_meta_box_cb', 'Property', 'normal', 'high' );
}

function cd_meta_box_cb( $post )
{
  $values = get_post_custom( $post->ID );
  $cost = isset( $values['cost'] ) ? esc_attr( $values['cost'][0] ) : '';
  $size = isset( $values['size'] ) ? esc_attr( $values['size'][0] ) : '';
  $tagline = isset( $values['tagline'] ) ? esc_attr( $values['tagline'][0] ) : '';
  $tenure = isset( $values['tenure'] ) ? esc_attr( $values['tenure'][0] ) : '';
  $property_type = isset( $values['property_type'] ) ? esc_attr( $values['property_type'][0] ) : '';
  wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
  ?>
  <p>
    <label for="tagline">Tagline</label>
    <input type="text" name="tagline" value="<?php echo $tagline; ?>">
  </p> 
  <p>
    <label for="property_type">Property Type</label>
    <select name="property_type">
      <option value="Retail" <?php selected( $property_type, 'Retail' ); ?>>Retail</option>
      <option value="Office" <?php selected( $property_type, 'Office' ); ?>>Office</option>
      <option value="Industrial" <?php selected( $property_type, 'Industrial' ); ?>>Industrial</option>
      <option value="Development" <?php selected( $property_type, 'Development' ); ?>>Development</option>
      <option value="Investment" <?php selected( $property_type, 'Investment' ); ?>>Investment</option>
    </select>
  </p>
  <p>
    <label for="size">Size</label>
    <input type="text" name="size" value="<?php echo $size; ?>" />
  </p>
  <p>
    <label for="tenure">Tenure</label>
    <select name="tenure">
      <option value="To Let" <?php selected( $tenure, 'To Let' ); ?>>To Let</option>
      <option value="For Sale" <?php selected( $tenure, 'For Sale' ); ?>>For Sale</option>
    </select>
  </p>
  <p>
    <label for="cost">Price</label>
    <input type="text" name="cost" value="<?php echo $cost; ?>" />
  </p>
  <p>
    <label for="bullets">Hightlights</label>
    <textarea name="bullets" class="meta-highlights"><?php if ( isset ( $values['bullets'] ) ) echo $values['bullets'][0]; ?></textarea>
  </p>
  <?php 
}


add_action( 'save_post', 'cd_meta_box_save' );
function cd_meta_box_save( $post_id )
{
  // Bail if we're doing an auto save
  if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
  
  // if our nonce isn't there, or we can't verify it, bail
  if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
  
  // if our current user can't edit this post, bail
  if( !current_user_can( 'edit_post' ) ) return;
  
  // now we can actually save the data
  $allowed = array( 
    'a' => array( // on allow a tags
      'href' => array() // and those anchords can only have href attribute
    )
  );
  
  // Probably a good idea to make sure your data is set
  if( isset( $_POST['cost'] ) )
    update_post_meta( $post_id, 'cost', esc_attr( $_POST['cost'] ) );

  if( isset( $_POST['size'] ) )
    update_post_meta( $post_id, 'size', esc_attr( $_POST['size'] ) );

  if( isset( $_POST['tagline'] ) )
    update_post_meta( $post_id, 'tagline', esc_attr( $_POST['tagline'] ) );
    
  if( isset( $_POST['property_type'] ) )
    update_post_meta( $post_id, 'property_type', esc_attr( $_POST['property_type'] ) );
  
  if( isset( $_POST['tenure'] ) )
    update_post_meta( $post_id, 'tenure', esc_attr( $_POST['tenure'] ) );

  if( isset( $_POST['bullets'] ) )
    update_post_meta( $post_id, 'bullets', esc_attr( $_POST['bullets'] ) );
}