<?php
// Template Name: Biblioteca
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- conteúdo da página vai aqui -->


        <section class="section container">
            <!-- all subpages contains this section socials icon on the top page -->
            <div class="social-medias-top-page">

                <!-- Social medias -->
                <ul>
                    <!-- facebook -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/face.svg" alt="Facebook Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- instagram -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/insta.svg" alt="Instagram Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- youtube -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/youtube.svg" alt="Youtube Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- whatsapp -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/whats.svg" alt="WhatsApp Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- email -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/email.svg" alt="E-mail Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- print -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/print.svg" alt=" Versão impressa da página">
                        </a>
                    </li>





                </ul>
            </div>

            <!-- tittle -->
            <div class="title-section">
                <h4><?php the_field('titulo_pagina_biblioteca'); ?></h4>
                <ul class="sub-tittle-section">
                    <li>
                        <span><?php the_field('subtitulo_pagina_biblioteca'); ?></span>
                    </li>
                </ul>
            </div>

            <div class="contend-section">
                <p class="text wrapper"></p>
            </div>


        </section>


        <!-- page contend -->
        <section class="main-page bg">



            <div class="container wraper-contend-section">

                <div class="library-titles">
                    <h4>Bibliotecas Universitárias</h4>
                    <p> Links de acesso aos sites das Bibliotecas das Universidades participantes da UAB, bem como os sites de consulta ao acervo.</p>
                </div>

                <div class="contend-section container">
                    <div class="link-item">
                        <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                        <div class="link-title on">
                            <h4 id="link01">FURG</h4>
                            <img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/faq/plus.svg" alt="">
                        </div>
                        <ul style="display: block;">
                            <li><a href="https://argo.furg.br/" target="_blank">Consulta ao acervo FURG</a></li>
                            <li><a href="http://www.biblioteca.furg.br/">Biblioteca FURG</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </section>



<?php endwhile;
else : endif ?>
<?php get_footer(); ?>