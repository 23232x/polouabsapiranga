<?php
// Template Name: graduacao
?>




<?php get_header(); ?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>

        <h1>graduacao</h1>


<?php
    }
} ?>
<!--  -->
<?php get_footer(); ?>