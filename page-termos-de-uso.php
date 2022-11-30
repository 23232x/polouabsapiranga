<?php
// Template Name: termos-de-uso
?>


<?php get_header(); ?>
<?php if (have_posts()) {
    while (have_posts()) {
        the_post() ?>



        <h1>Termos de uso</h1>



<?php
    }
}
?>
<?php get_footer(); ?>