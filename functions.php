<!-- https://www.origamid.com/curso/wordpress-como-cms/5-19-scripts-e-css -->
<!-- https://developer.wordpress.org/reference/functions/wp_enqueue_script/ -->
<!-- Just another functions files -->
<?php


// ******* Function to registry JS into wordpress pages *********
function polo_scripts(){  
  wp_register_script('teste', get_template_directory_uri() . '/assets/js/teste.js', [], false, true);
  wp_register_script('swiper', get_template_directory_uri() . '/assets/js/swiper.js', [], false, true);
  
  wp_enqueue_script('teste', 'swiper');
}

// this functions "polo_scripts", run when the
add_action( 'wp_enqueue_scripts', 'polo_scripts' );
// **************************************************************


// add script from CDN
function wptuts_scripts_load_cdn()
{
    // Deregister the included library swiper
    wp_deregister_script( 'jquery' );
     
    // Register the swiper library again from CDN
    wp_register_script( 'jquery', '"https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js', array(), null, false );
     
    // Register the script like this for a plugin on local:
    wp_register_script( 'custom-script', plugins_url( '/assets/js/swiper.js', __FILE__ ), array( 'jquery' ) );
    // or
    // Register the script like this for a theme:
    wp_register_script( 'custom-script', get_template_directory_uri() . '/assets/js/swiper.js', array( 'jquery' ) );
 
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wptuts_scripts_load_cdn' );



//****** Function to registry CSS into wordpress pages **********
function polo_style(){  
  wp_register_style( 'polo_style', get_template_directory_uri() . '/style.css', array(), false, false);
  
  wp_enqueue_style( 'polo_style' );
}
add_action( 'wp_enqueue_scripts', 'polo_style' );

// **************************************************************

?>


<!-- https://code.tutsplus.com/articles/how-to-include-javascript-and-css-in-your-wordpress-themes-and-plugins--wp-24321 -->








