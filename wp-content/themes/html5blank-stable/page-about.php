<?php
/*
Template Name: About
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- CONTENT HERE -->

    <!-- Featured Image -->
    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        <section id="hero_about" class="hero_image" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;background-size: cover;background-position: center top;"></section>
    <?php endif; ?>

    <!-- Site Container -->
    <div class="container">

        <!-- Page Title -->
        <h1 class="page-title page_header"><?php the_title(); ?></h1>

        <!-- WordPress Page Content -->
        <div class="about_text"><?php the_content(); ?></div>
        <?php endwhile; endif; ?>

        <h2>Meet the ProStaff</h2>

        <!-- Custom Post Type - Pro Staff Profiles -->
        <?php $query = new WP_Query( array(
            'posts_per_page' => '-1',
            'post_type' => 'prostaff'
        ) );
        if ($query->have_posts()) : ?>

            <div id="grid_about">

                <?php while ($query->have_posts()) : $query->the_post(); ?>

                    <!-- Featured Image -->
                    <div class="headshot">
                        <?php // INSERT POST THUMBNAIL
                            if ( has_post_thumbnail()) {$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                        ?>
                            <img alt="headshot" src="<?php echo $thumbnail[0];?>"/>
                        <?php  } ?>
                    </div>

                    <!-- Content -->
                        <div class="headshot_text">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        </div>

                <?php endwhile; ?>

            </div>
        <?php endif; ?>
        <!-- End of Custom Post Type -->

        <h2> Teams Training with Us</h2>

        <!-- Custom Post Type - Teams -->
        <?php $query = new WP_Query( array(
            'posts_per_page' => '-1',
            'post_type' => 'teams'
        ) );
        if ($query->have_posts()) : ?>

            <section class="teams">

                <?php while ($query->have_posts()) : $query->the_post(); ?>

                    <!-- Featured Image -->
                    <div>
                        <?php // INSERT POST THUMBNAIL
                            if ( has_post_thumbnail()) {$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                        ?>
                            <img alt="<?php the_title(); ?>" src="<?php echo $thumbnail[0];?>"/>
                        <?php  } ?>
                    </div>

                <?php endwhile; ?>

            </section>
        <?php endif; ?>
        <!-- End of Custom Post Type -->

</div>

<?php get_footer(); ?>
