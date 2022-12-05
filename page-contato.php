<?php
// Template Name:contato
?>

<?php get_header(); ?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>

        <!-- the contend must be here -->
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
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/whats.svg" alt="whatsapp Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- email -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/email.svg" alt="email Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- print -->
                    <li>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/social-medias-top-page/print.svg" alt="Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>
                </ul>
            </div>

            <!-- tittle -->
            <div class="title-section">
                <h4>Ficou com alguma dúvida? Contate nos</h4>
                <ul class="sub-tittle-section">
                    <li>
                        <span>
                            Se alguma de suas perguntas não for respondida abaixo, envie nos sua pergunta través deste
                            email
                            <a href="mailto:adicicionaremail?subject=Pergunta" class="email-link">polouab@polouab.com.br</a>
                        </span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- page contend -->
        <section class="main-page bg">
            <div class="contend-section container">

                <h1>Contato</h1>


            </div>
        </section>


<?php
    }
}

?>

<?php get_footer(); ?>