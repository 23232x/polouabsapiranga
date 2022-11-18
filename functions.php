<!-- https://www.origamid.com/curso/wordpress-como-cms/5-19-scripts-e-css -->
<!-- Just another functions files -->
<?php


// Function to registry JS into wordpress pages
function polo_scripts(){  
  wp_register_script('teste', get_template_directory_uri() . '/assets/js/teste.js', [], false, true);
  
  wp_enqueue_script('teste');
}
add_action( 'wp_enqueue_scripts', 'polo_scripts' );




// Function to registry CSS into wordpress pages
// function polo_css(){
//  wp_register_style('polo-style', get_template_directory_uri() . 'style.css', [], false, false);
// wp_enqueue_style('polo-style');
// }
// add_action('wp_enqueue_scripts','polo-style');







?>



