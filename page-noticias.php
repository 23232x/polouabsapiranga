<?php
// Template Name: noticiais
?>

<?php get_header(); ?>


<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>


        <h1>Página Noticias</h1>




<?php
    }
} ?>




<?php get_footer(); ?>