<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

?>

<li <?php wc_product_class(); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );
	if ( $product->get_sku() ) {
        $sku = $product->get_sku();
//		echo strstr($sku, '#', true);
    }
	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
/*
	if (wc_get_product_terms( $product->id, 'pa_color', array( 'fields' => 'names' ) ) ) {

		$koostis =wc_get_product_terms( $product->id, 'pa_color', array( 'fields' => 'names' ) )   ;
		//print_r($koostis);
	//	echo $koostis[0]. ' | '.  $koostis[1];
	}
*/

//	list($ar1,$ar2) =  rapto_get_sizes();
	$hello =  rapto_get_sizes();
	//$hello;


	if ( in_array('S', $hello[0]) ){
		//echo "asd";
		//print_r($hello[0]);
	}
	else {
			$sort_me = sort($hello[0]);
			//print_r($hello[0]);
		}
	
	//print_r($ar1);

	// edo na gine explode to value gia na paro to klasma!

	foreach($hello[0] as $key => $value ) {
		$exploded = explode(" ", $value);
    	echo "<span class='rapto-available-sizes'>".$exploded[0].'<sup>'.$exploded[1].'</sup>'."</span>";
    //echo "</div>";
    }
   


    //print_r($hello);

	?>
</li>
