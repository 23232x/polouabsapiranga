<?php


/* FUNÇÃO PARA PEGAR O STYLE.CSS */
function polo_css(){
  
    /* ESTE É UM ITEM DE ESTILO, PODE-SE ADICIONAR QUANTOS ESTILOS QUISER 
   -  1.0.0 -  É a verão do meu css, esta versão deverá ser alterada a cada mudança. Caso se esteja
    usando algum plugin de cache e a versão do css não for alterada quando o site for colocado em produção. O estilo do site não
    será aplicado.
    - [] Um array vazio: indica que não há depéndencia alguma.
    - false : Ou omitir o false, indica se há alguma media query.
    */
  /*   wp_register_style('handel-style', get_template_directory_uri() . '/style.css', [], '1.0.0', false); */
  wp_register_style('polo-style', get_template_directory_uri() . '/style.css', [], false);
    
    /* FAZ O REGISTRO */
   wp_enqueue_style('polo-style'); 
  }
  add_action('wp_enqueue_scripts', 'polo_css');








// Se você estiver usando um tema, precisará usar get_stylesheet_directory_uri() em vez de get_template_directory_uri() 
function swiper_scripts_function() {
  wp_enqueue_script( 'myscript', get_template_directory_uri() .'/assets/js/swiper.js');
}
add_action('wp_enqueue_scripts','swiper_scripts_function');








?>