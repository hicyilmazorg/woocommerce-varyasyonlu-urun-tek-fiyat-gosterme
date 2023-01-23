add_filter('woocommerce_variable_price_html', 'custom_variation_price', 10, 2); 

function custom_variation_price( $price, $product ) { 

     $price = '';

     $price .= wc_price($product->get_price()); 

     return $price;
}
