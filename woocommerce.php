<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
	add_filter( 'woocommerce_product_tabs', 'exetera_custom_product_tabs', 98, 1 );

function exetera_custom_product_tabs( $tabs ) { 

    // Custom description callback.
    $tabs['description']['callback'] = function() {
    
        global $post, $product;
    
        //Start of flex container
        echo '<div class="desc-container">';

        echo '<div class="description">';
        the_content();
        echo '</div>';

        echo '<div class="specifications">';
        echo '<h2>Specifications</h2>';
        do_action( 'woocommerce_product_additional_information', $product );
        echo '</div>';

        //End of flex container
        echo '</div>';
    };

    // Remove the additional information tab.
    unset( $tabs['additional_information'] );

    return $tabs;
}
	
	
	
	?>
</body>
</html>