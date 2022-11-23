<?php
// Template Name: page-sobre
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- conteúdo da página vai aqui -->




        

<?php endwhile;
else : endif ?>
<?php get_footer(); ?>