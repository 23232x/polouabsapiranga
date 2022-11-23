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

<!-- this section contains the universety partner of polo UAB Sapiranga -->
<section class="partners container">
<h4 class="title-section">Instituções Parceiras</h4>
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