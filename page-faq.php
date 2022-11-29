<?php
//Template Name:Faq
?>



<?php get_header(); ?>

<!-- wordpress loop -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



        <div class="section container">
            <!-- all subpages contains this section socials icon on the top page -->
            <div class="social-medias-top-page">

                <!-- Social medias -->
                <ul>
                    <!-- facebook -->
                    <li>
                        <a href="#">
                            <img src="assets/img/icons/social-medias-top-page/face.svg" alt="Facebook Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- instagram -->
                    <li>
                        <a href="#">
                            <img src="assets/img/icons/social-medias-top-page/insta.svg" alt="Instagram Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- youtube -->
                    <li>
                        <a href="#">
                            <img src="assets/img/icons/social-medias-top-page/youtube.svg" alt="Youtube Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- whatsapp -->
                    <li>
                        <a href="#">
                            <img src="assets/img/icons/social-medias-top-page/whats.svg" alt="whatsapp Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- email -->
                    <li>
                        <a href="#">
                            <img src="assets/img/icons/social-medias-top-page/email.svg" alt="email Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>

                    <!-- print -->
                    <li>
                        <a href="#">
                            <img src="assets/img/icons/social-medias-top-page/print.svg" alt="Polo Universitário UAB - Sapiranga">
                        </a>
                    </li>
                </ul>
            </div>

            <!-- tittle -->
            <div class="title-section">
                <h4>FAQ - Perguntas Frequêntes.</h4>
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
                <div class="faq-item">
                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <div class="faq-title">
                        <h4 id="faq01">O que é a UAB?</h4>
                        <img class="cross" src="assets/img/icons/faq/plus.svg" alt="">
                    </div>
                    <p class="faq-answer" style="display: none;">É um programa federal que visa ampliar e interiorizar a
                        oferta de cursos e
                        programas de educação superior, por meio da educação a distância.
                    </p>
                </div>


                <div class="faq-item">

                    <!-- add class 'on' with js - must be like this <div class="faq-title on"> -->
                    <div class="faq-title">
                        <h4 id="faq01">O que é a UAB?</h4>
                        <img class="cross" src="assets/img/icons/faq/plus.svg" alt="">
                    </div>
                    <p class="faq-answer" style="display: none;">É um programa federal que visa ampliar e interiorizar a
                        oferta de cursos e programas de educação superior, por meio da educação a distância.
                    </p>
                </div>
            </div>
        </section>




<?php endwhile;
else : endif ?>

<?php get_footer(); ?>