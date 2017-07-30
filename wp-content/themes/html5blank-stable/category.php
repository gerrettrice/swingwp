<?php get_header(); ?>

<div class="container">

    <h1 class="page_header"><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>

        <div class="blog_grid">

            <div id="blog_container">

                <?php get_template_part('loop'); ?>

                <?php get_template_part('pagination'); ?>

            </div>

            <?php get_sidebar(); ?>

        </div>

</div>

<?php get_footer(); ?>
