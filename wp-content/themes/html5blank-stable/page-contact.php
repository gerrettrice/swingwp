<?php
/*
Template Name: Contact
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- CONTENT HERE -->

    <!-- iFrame Map -->
    <section class="hero_image" id="map">
        <iframe
          width="100%"
          height="100%"
          frameborder="0" style="border:0"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11887753.862080283!2d-98.20270824176532!3d43.32925303524663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880eefbebe54804d%3A0xde59c75cc4df2db3!2sSWING*21+Baseball+and+Softball+Training+Center!5e0!3m2!1sen!2sus!4v1499547421905" allowfullscreen>
        </iframe>
    </section>

    <!-- Phone Call to Action -->
    <div class="contact_phone">
        Call Today! <a href="tel:+1-555-555-1212">555-555-1212</a>
    </div>

    <!-- Site Container -->
    <div class="container">

        <!-- Page Title -->
        <h1 class="page-title page_header"><?php the_title(); ?></h1>

        <!-- WordPress Page Content -->
        <div class="about_text"><?php the_content(); ?></div>
        <?php endwhile; endif; ?>

        <h2>Staff Contacts</h2>

        <!-- Custom Post Type - Pro Staff Profiles -->
        <?php $query = new WP_Query( array(
            'posts_per_page' => '-1',
            'post_type' => 'staff_contact'
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

        <h2> Teams Training with Us

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
