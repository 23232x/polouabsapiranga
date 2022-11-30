<?php
// Template Name: biblioteca
?>


<?php get_header(); ?>

<?php if (have_posts()) {
        while (have_posts()) {
                the_post(); ?>

                <!-- get the page tittle -->
                <h1><?php the_title() ?></h1>

                <!--get the page content  -->
                <p><?php the_content(); ?></p>


<?php }
} ?>

<?php get_footer(); ?>