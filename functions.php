<!-- https://www.origamid.com/curso/wordpress-como-cms/5-19-scripts-e-css -->
<!-- Just another functions files -->
<?php
// Função para registrar script e css 
function polo_scripts(){  
  wp_register_script('jsDoSwiper', get_template_directory_uri() . '/assets/js/teste.js', [],false, true);
  wp_enqueue_script('jsDoSwiper');
}


?>