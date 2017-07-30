
<!-- Slider -->

	<section class="slider">

        <div class="fade">

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <!-- post thumbnail -->
                <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="slider_frame" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;background-size: cover;background-position: center center;">


                            <!-- Gradient -->
                            <div class="black_gradient"></div>

                            <div class="slider_content">

                                <!-- Post Title -->
                                <h1>
                                    <a class="slider_heading" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                </h1>

                                <!-- Post Excerpt -->
                                <div class="slider_text">
                                    <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
                                </div>

                                <!-- Read More Button -->
                                <a class="slider_button" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More</a>

                            </div>

                        </div>
                <?php endif; ?>

            <?php endwhile; endif; ?>

        </div>

	</section>

<!-- End Slider -->
