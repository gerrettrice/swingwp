<?php
/*
Template Name: Home
*/
get_header(); ?>

<!-- Slider -->

	<section class="slider">

        <div class="fade">

            <?php query_posts('category_name=featured-content'); ?>
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <!-- post thumbnail -->
                <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                        <div class="slider_frame" id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="slider_frame" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;background-size: cover;background-position: center center;">

                            <!-- Gradient -->
                            <div class="black_gradient"></div>

                            <!-- Slider Content -->
                            <div class="slider_content">

                                <!-- Post Title -->
                                <h1 class="slider_heading">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                </h1>

                                <!-- Post Excerpt -->
                                <p class="slider_text">
                                    <?php slider_excerpt('slider_excerpt_length'); // Build your custom callback length in functions.php ?>
                                </p>

                                <!-- Read More Button -->
                                <a class="slider_button" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More</a>

                            </div>

                        </div>
                <?php endif; ?>

            <?php endwhile; endif; ?>

        </div>

	</section>

<!-- End Slider -->

<div class="grid">
    <!-- Custom Post Type - Home Content -->

    <?php $query = new WP_Query( array(
        'posts_per_page' => '-1',
        'post_type' => 'home_content'
    ) );
    if ($query->have_posts()) : ?>

        <?php while ($query->have_posts()) : $query->the_post(); ?>

            <div class="box">
                <h2><?php the_title(); ?></h2>
                <hr class="box_hr"/>
                <?php the_content(); ?>
                <a class="button" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Learn More</a>
            </div>

        <?php endwhile; ?>

        </div>

    <?php endif; ?>
    <!-- End of Custom Post Type -->

</div>

<?php get_footer(); ?>
