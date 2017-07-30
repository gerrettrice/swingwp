<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


        <!-- post thumbnail -->
    	<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
            <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <div class="post_featured_image" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;background-size: cover;background-position: center center;"></div>
            </a>
        <?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post title -->
		<h2 class="post_title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!-- post details -->
		<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		<!-- /post details -->

        <!-- Post Excerpt -->
        <div class="post_excerpt">
            <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
        </div>

        <!-- Read More Button -->
        <a class="blog_button" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More</a>

		<?php edit_post_link(); ?>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
