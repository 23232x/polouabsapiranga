<?php get_header(); ?>


<!-- wordpress loop -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1>Resultados da pesquisa</h1>


<?php endwhile;
else : endif ?>



<?php get_footer(); ?>