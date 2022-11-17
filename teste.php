<?php
//Template Name:teste
?>



<?php
//Template Name:page-home
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- Swiper -->
       
       
       
   

       

        
<?php endwhile;
else : endif ?>
        <?php get_footer(); ?>  
