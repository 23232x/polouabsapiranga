<?php

/*
Template Name: page matematica

*/

?>

<?php get_header(); ?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>






<?php
    }
}
?>
<?php get_footer(); ?>