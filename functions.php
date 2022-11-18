<!-- https://www.origamid.com/curso/wordpress-como-cms/5-19-scripts-e-css -->
<!-- Just another functions files -->
<?php


// ******* Function to registry JS into wordpress pages *********
function polo_scripts(){  
  wp_register_script('teste', get_template_directory_uri() . '/assets/js/teste.js', [], false, true);
  // wp_register_script('swipercdn', get_template_directory_uri() . 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js', [], false, true);
  wp_register_script('swiper', get_template_directory_uri() . '/assets/js/swiper.js', [], false, true);
  
  
  wp_enqueue_script('teste', 'swipercdn', 'swiper');
}
// this functions "polo_scripts", run when the
add_action( 'wp_enqueue_scripts', 'polo_scripts' );
// **************************************************************



//****** Function to registry CSS into wordpress pages **********
function polo_style(){  
  wp_register_style( 'polo_style', get_template_directory_uri() . '/style.css', array(), false, false);
  
  wp_enqueue_style( 'polo_style' );
}
add_action( 'wp_enqueue_scripts', 'polo_style' );

// **************************************************************

?>








