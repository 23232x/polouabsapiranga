<?php
/*
Template Name: 404
*/
?>


<?php
get_header(); ?>



<!-- this div contais the form -->
<div class="wrap container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <section class="error-404 not-found">
                <header class="page-header">
                    <h1 class="page-title">
                        <?php _e('Oops! Parece que a página não esta disponível.', 'Text Domain'); ?>
                    </h1>
                </header><!-- .page-header -->
                <div class="page-content">
                    <p><?php _e('Parece que nada foi encontrado neste local. Talvez tente uma pesquisa?', 'Text Domain'); ?></p>
                    <?php get_search_form(); ?>
                </div><!-- .page-content -->
            </section><!-- .error-404 -->
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->
<?php
get_footer();
