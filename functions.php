
<!-- Just another functions files -->
<?php

// Remove a barra de admin
add_filter('show_admin_bar', '__return_false');

// Carrega código js 
function my_theme_scripts_function() {
  wp_enqueue_script( 'myscript', get_template_directory() . '/assets/js/teste.js');
}
add_action('wp_enqueue_scripts','my_theme_scripts_function');

?>