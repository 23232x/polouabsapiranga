<?php
// Template Name: Home

?>

<!-- importa o header -->
<?php get_header(); ?>

<!-- faz o LOOP principal -->
<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>


        <!-- this section contains the universety partner of polo UAB Sapiranga -->



        <section class="partners">

            <ul>
                <li><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/partners/ufrgs.png" alt=""></a></li>
            </ul>



        </section>


        <!-- fim do loope principal -->
<?php }
} ?>


<!-- importa o footer -->
<?php get_footer(); ?>