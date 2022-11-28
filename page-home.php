<?php
// Template Name: Home

?>

<!-- importa o header -->
<?php get_header(); ?>

<!-- faz o LOOP principal -->
<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>


        <!-- all the contend page goes here -->
        <main>

            <section class="main-hero">

                <div class="container">


                    <p class="text-intro">

                        Transformando a Educação,
                        criando futuros!
                    </p>

                    <div class="pesquisa">
                        <span>Encontre um curso</span>


                        <!-- this div contais the search form -->
                        <div class="search_form">

                            <!-- <?php get_search_form(); ?> -->


                            <form action="<?php bloginfo('url'); ?>/" method="get">
                                <input type="text" name="s" id="s" placeholder="Buscar" value="<?php the_search_query(); ?> ">

                                <input type="text" name="post_type" value="product" class="hidden">
                                <input type="submit" id="btn_Search" value="buscar">

                            </form>
                        </div>
                    </div>
                </div>
            </section>









            <!-- and now the cool swiper goes down here -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-item">
                            <!-- 1º colunm -->
                            <div class="slide-item-left">
                                <h4>Título</h4>
                                <h2>Escolha um curso e venha estudar no Polo UAB</h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident numquam eaque, nesciunt
                                    mollitia repellendus saepe error amet fuga molestiae magnam quod nihil enim atque,
                                    doloremque facere maxime dolorem aut cumque?
                                </p>
                                <a class="btn-hero" href="">Saiba mais</a>
                            </div>

                            <!-- 2º colunm -->
                            <div class="slide-item-right">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero/hero1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-item">

                            <!-- 1º colunm -->
                            <div class="slide-item-left">
                                <h4>Título</h4>
                                <h2>Venha estudar no Polo UAB</h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident numquam eaque, nesciunt
                                    mollitia repellendus saepe error amet fuga molestiae magnam quod nihil enim atque,
                                    doloremque facere maxime dolorem aut cumque?
                                </p>
                                <a class="btn-hero" href="">Saiba mais</a>
                            </div>

                            <!-- 2º colunm -->
                            <div class="slide-item-right">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero/hero1.jpg" alt="">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>















            <!-- this section contains the universety partner of polo UAB Sapiranga -->

            <section class="partners container">
                <h4 class="title-section">Instituições que trabalham juntas para oferecer a melhor educação no polo UAB em Sapiranga.</h4>
                <ul>
                    <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/partners/furg.png" alt=""></a></li>
                    <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/partners/ifsul.png" alt=""></a></li>
                    <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/partners/pms.png" alt=""></a></li>
                    <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/partners/ufpel.png" alt=""></a></li>
                    <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/partners/ufrgs.png" alt=""></a></li>
                </ul>
            </section>



        </main>










        <!-- fim do loope principal -->
<?php }
} ?>


<!-- importa o footer -->
<?php get_footer(); ?>