<?php
// Template Name: pos-graduacao
?>


<?php get_header(); ?>


<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>


        <h1>Página pós-graduação</h1>



<?php
    }
}
?>


<?php get_footer(); ?>