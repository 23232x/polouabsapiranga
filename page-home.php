<?php
//Template Name:page-home
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- Swiper -->
       
       
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


        
       
        <?php get_footer(); ?>  
        
<?php endwhile;
else : endif ?>




