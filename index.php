<?php
/*
Author: Feroz Jaffer
Author URI: http://www.bilogic.com
Plugin Name: Woocommerce Wholesale Manager 
Plugin URI: http://www.bilogic.com/woo-wholesale-manager
Description: Add Wholesale functionality to your store easily.
Version: 1.0.1
*/

add_action('admin_menu', 'bg_simple_menu',99);
add_action('admin_init', 'bg_simple_settings');
add_option('bg_save_label', 'You Save', '', 'yes');
add_option('bg_regular_label', 'Regular Price', '', 'yes');
add_option('bg_wholesale_label', 'Wholesale Price', '', 'yes');
add_option('bg_wholesale_role', 'wholesale_customer', '', 'yes');

function bg_simple_menu() {
	add_submenu_page( 'index.php', 'Woo Wholesale Manager', 'Woo Wholesale Manager', 'manage_options', 'manage-wholesale-pricing', 'bg_include_option' ); 
}

function bg_simple_settings() {
	register_setting( 'bg_form_fields', 'bg_savings' );
	register_setting( 'bg_form_fields', 'bg_save_label' );
	register_setting( 'bg_form_fields', 'bg_percentage' );
	register_setting( 'bg_form_fields', 'bg_regular_price' );
	register_setting( 'bg_form_fields', 'bg_regular_label' );
	register_setting( 'bg_form_fields', 'bg_wholesale_label' );
	register_setting( 'bg_form_fields', 'bg_wholesale_role' );
	
}

function bg_include_option() {
	include('bg-form.php');
} 

add_role('wholesale_customer', 'Wholesale Customer', array(
    'read' => true, 
    'edit_posts' => false,
    'delete_posts' => false, 
));

add_action( 'save_post', 'bg_save_wholesale_price' );
function bg_save_wholesale_price( $post_id ) {
	if (isset($_POST['_inline_edit']) && wp_verify_nonce($_POST['_inline_edit'], 'inlineeditnonce'))return;
	$new_price = $_POST['wholesale_price'];
	$post_ID = $_POST['post_ID'];
	update_post_meta($post_ID, '_wholesale_price', $new_price) ;
}

add_action( 'woocommerce_product_options_pricing', 'bg_admin_price_field', 10, 2 );
function bg_admin_price_field( $loop ){ 
$wholesale = get_post_meta( get_the_ID(), '_wholesale_price', true );
?>
<tr>
  <td><div>
      <p class="form-field _regular_price_field ">
        <label><?php echo __( 'Wholesale Price', 'woocommerce' ) . ' ('.get_woocommerce_currency_symbol().')'; ?></label>
        <input step="any" type="number" class="wc_input_price short" name="wholesale_price" value="<?php echo $wholesale; ?>"/>
      </p>
    </div></td>
</tr>
<?php }


add_filter( 'manage_edit-product_columns', 'bg_add_wholesale_column' ) ;
function bg_add_wholesale_column( $columns ) {
$offset = 2;
$newArray = array_slice($columns, 0, $offset, true) +
	array('wholesale' => 'Wholesale') +
	array_slice($columns, $offset, NULL, true);
	return $newArray;
}

add_action( 'manage_product_posts_custom_column', 'bg_manage_wholesale_product_columns', 10, 2 );
function bg_manage_wholesale_product_columns( $column, $post_id ) {
	global $post;
	switch( $column ) {
		case 'wholesale' :
			$wholesale = get_post_meta( get_the_ID(), '_wholesale_price', true );
			if ( empty( $wholesale ) )
				echo __( '--' );
			else
				echo woocommerce_price($wholesale);
			break;
	}
}

add_filter( 'manage_edit-product_sortable_columns', 'bg_sortable_wholesale_column' );
function bg_sortable_wholesale_column( $columns ) {
	$columns['wholesale'] = 'wholesale';
	return $columns;
}

add_action( 'woocommerce_get_price_html' , 'bg_get_wholesale_price' );
function bg_get_wholesale_price($price){

	$current_user = new WP_User(wp_get_current_user()->ID);
	$user_roles = $current_user->roles;
	$current_role = get_option('bg_wholesale_role');
	foreach ($user_roles as $roles) {
	if  ($roles == $current_role ){
		$wholesale = get_post_meta( get_the_ID(), '_wholesale_price', true );
		$regular_price = get_post_meta( get_the_ID(), '_price', true );
		$savings  = $regular_price - $wholesale;
		$division = $regular_price ? $savings / $regular_price : 0;
		
		$bg_percentage = get_option( 'bg_percentage' );
		$bg_savings = get_option( 'bg_savings' );
		$bg_regular_price = get_option( 'bg_regular_price' );
		
		$res = $division * 100;
		$res = round($res, 0);
		$res = round($res, 1);
		$res = round($res, 2);
			if ($wholesale){
				
	if ($bg_regular_price == '1' && $bg_percentage == '1' && $bg_savings == '1' ) {
		$price = get_option( 'bg_wholesale_label' ).': '.woocommerce_price($wholesale).'</br>'.get_option( 'bg_regular_label' ).': '.woocommerce_price($regular_price).'</br>'.get_option( 'bg_save_label' ).': '.woocommerce_price($savings).' ('.$res.'%)';	
	} 
	
	elseif ($bg_regular_price == '' && $bg_percentage == '1' && $bg_savings == '1' ) {
		$price = get_option( 'bg_wholesale_label' ).': '.woocommerce_price($wholesale).'</br>'.get_option( 'bg_save_label' ).': '.woocommerce_price($savings).' ('.$res.'%)';
	}
	
	elseif ($bg_regular_price == '' && $bg_percentage == '' && $bg_savings == '1' ) {
		$price = get_option( 'bg_wholesale_label' ).': '.woocommerce_price($wholesale).'</br>'.get_option( 'bg_save_label' ).': '.woocommerce_price($savings);
	}
	
	
	elseif ($bg_regular_price == '' && $bg_percentage == '1' && $bg_savings == '' ) {
		$price = get_option( 'bg_wholesale_label' ).': '.woocommerce_price($wholesale).'</br>'.get_option( 'bg_save_label' ).': ('.$res.'%)';
	}
	
	elseif ($bg_regular_price == '1' && $bg_percentage == '' && $bg_savings == '' ) {
		$price = get_option( 'bg_wholesale_label' ).': '.woocommerce_price($wholesale).'</br>'.get_option( 'bg_regular_label' ).': '.woocommerce_price($regular_price);
	}
	
	elseif ($bg_regular_price == '1' && $bg_percentage == '1' && $bg_savings == '' ) {
		$price = get_option( 'bg_wholesale_label' ).': '.woocommerce_price($wholesale).'</br>'.get_option( 'bg_regular_label' ).': '.woocommerce_price($regular_price).'</br>'.get_option( 'bg_save_label' ).': ('.$res.'%)';
	}
	
	elseif ($bg_regular_price == '1' && $bg_percentage == '' && $bg_savings == '1' ) {
		$price = get_option( 'bg_wholesale_label' ).': '.woocommerce_price($wholesale).'</br>'.get_option( 'bg_regular_label' ).': '.woocommerce_price($regular_price).'</br>'.get_option( 'bg_save_label' ).': '.woocommerce_price($savings);
	}
	
	elseif ($bg_regular_price == '' && $bg_percentage == '' && $bg_savings == '' ) {
		$price = woocommerce_price($wholesale);
	}
		
		}
	}
}
return $price;	

}

add_action( 'woocommerce_before_calculate_totals', 'bg_simple_add_cart_price' );
function bg_simple_add_cart_price( $cart_object ) {
	$current_user = new WP_User(wp_get_current_user()->ID);
	$user_roles = $current_user->roles;
	$current_role = get_option('bg_wholesale_role');
	foreach ($user_roles as $roles) {
	if  ($roles == $current_role ){
 		foreach ( $cart_object->cart_contents as $key => $value ) {
			$wholesale = get_post_meta( $value['data']->id, '_wholesale_price', true );
			$wholesalev = get_post_meta( $value['data']->variation_id, '_wholesale_price', true );
				
				if ($wholesale){$value['data']->price = $wholesale;}
				if ($wholesalev){$value['data']->price = $wholesalev;}


} 
}
}}



function bg_mini_cart_prices( $product_price, $values, $cart_item) {
	
	global $woocommerce;
	
	$current_user = new WP_User(wp_get_current_user()->ID);
	$user_roles = $current_user->roles;
	$current_role = get_option('bg_wholesale_role');
	$simplewp = get_post_meta( $values['product_id'], '_wholesale_price', true );
	$simplenp = get_post_meta( $values['product_id'], '_price', true );
	foreach ($user_roles as $roles) {
	if  ($roles == $current_role ){
			return woocommerce_price($simplenp);
		}				
	}
	
return $product_price;	
}
add_filter( 'woocommerce_cart_item_price', 'bg_mini_cart_prices', 10, 3);

 if( isset($_GET['settings-updated']) ) { ?>
    <div id="message" class="updated">
        <p><strong><?php _e('Settings saved.') ?></strong></p>
    </div>
<?php }
 ?>
