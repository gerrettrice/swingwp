<?php get_header(); ?>

<!-- Hero Image - Post Thumbnail -->
<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
    <section id="hero_about" class="hero_image" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;background-size: cover;background-position: center center;"></section>
<?php endif; ?>
<!-- /Hero Image - Post Thumbnail -->

<div class="container">

    <!-- post title -->
    <h1 class="page_header"><?php the_title(); ?></h1>
    <!-- /post title -->

    <div class="blog_grid">

        <div id="blog_container">

	           <main role="main">
                	<!-- section -->
                	<section>

                	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

                		<!-- article -->
                		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                			<?php the_content(); // Dynamic Content ?>

                            <?php edit_post_link(); // Always handy to have Edit Post Links available ?>

                            <?php comments_template(); ?>

                		</article>
                		<!-- /article -->

                	<?php endwhile; ?>

                	<?php else: ?>

                		<!-- article -->
                		<article>

                			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

                		</article>
                		<!-- /article -->

                	<?php endif; ?>

                	</section>
                	<!-- /section -->
                	</main>

                </div>

                <?php get_sidebar(); ?>

            </div>

</div>

<?php get_footer(); ?>
