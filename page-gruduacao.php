<?php
// Template Name: graducao
?>

<?php get_header(); ?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <!-- conteúdo da página vai aqui -->





        <div class="section container">

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
                <h4><?php the_field('titulo_graduacao'); ?></h4>
                <ul class="sub-tittle-section">
                    <li>
                        <span><?php the_field('subtitulo_graduacao'); ?></span>

                    </li>
                </ul>
            </div>


        </div>


        <div class="bg-gray">
            <div class="container">
                <ul>
                    <li>
                        <h4 class="title">Cursos de Graduação</h4>
                    </li>
                    <li>
                        <span class="sub-title"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non euismod erat.</span>
                    </li>
                </ul>


                <div class="box-cursos">
                    <!-- secound column -->
                    <ul class="box">
                        <li>
                            <h4 class="title">UFPel</h4>
                        </li>
                        <li>
                            <ul class="bg-write">
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">andamento</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">andamento</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">andamento</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">andamento</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">andamento</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">andamento</span></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="box">
                        <li>
                            <h4 class="title">UFPel</h4>
                        </li>
                        <li>
                            <ul class="bg-write">
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">encerrados</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">encerrados</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">encerrados</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">encerrados</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">encerrados</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">encerrados</span></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="box">
                        <li>
                            <h4 class="title">UFPel</h4>
                        </li>
                        <li>
                            <ul class="bg-write">
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">encerrados</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">encerrados</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">encerrados</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">encerrados</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">encerrados</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">encerrados</span></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="box">
                        <li>
                            <h4 class="title">UFPel</h4>
                        </li>
                        <li>
                            <ul class="bg-write">
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">encerrados</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">encerrados</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">encerrados</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">encerrados</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">encerrados</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">encerrados</span></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="box">
                        <li>
                            <h4 class="title">UFPel</h4>
                        </li>
                        <li>
                            <ul class="bg-write">
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">encerrados</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">encerrados</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">encerrados</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">encerrados</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">encerrados</span></li>
                                <li><a href="">Licenciatura em Letras Espanhol </a><span class="status">encerrados</span></li>
                            </ul>
                        </li>
                    </ul>

                </div>


            </div>
        </div>









<?php }
} ?>
<?php get_footer(); ?>

<!-- importa o footer -->