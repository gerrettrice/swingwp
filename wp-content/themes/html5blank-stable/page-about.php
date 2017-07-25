<?php
/*
Template Name: About
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- CONTENT HERE -->

    <!-- Featured Image -->
    <section id="hero_about" class="hero_image"></section>

    <!-- Site Container -->
    <div class="container">

        <!-- Page Title -->
        <h1 class="page-title page_header"><?php the_title(); ?></h1>

        <!-- WordPress Page Content -->
        <?php the_content(); ?>
        <?php endwhile; endif; ?>





        <?php $query = new WP_Query( array(
            'posts_per_page' => '-1'
            // 'post_type' => 'prostaff'
        ) );
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

        <!-- CONTENT HERE -->
        <?php endwhile; endif; ?>





        <!-- Pro Staff Grid -->
        <div id="grid_about">

            <div class="headshot">
                <img alt="john doe" src="img/john_doe1.jpg"/>
            </div>
            <div class="headshot_text">
                <h3>John Doe</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a purus diam. Nam massa leo, interdum quis nisl non, vehicula condimentum augue. Pellentesque id enim dapibus, interdum sem sit amet, laoreet leo. Aenean sed ornare urna. Nulla eleifend lorem sed nisi posuere pellentesque. Vestibulum vulputate at dui ac luctus.</p>
            </div>

            <div class="headshot">
                <img alt="john doe" src="img/john_doe1.jpg"/>
            </div>
            <div class="headshot_text">
                <h3>John Doe</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a purus diam. Nam massa leo, interdum quis nisl non, vehicula condimentum augue. Pellentesque id enim dapibus, interdum sem sit amet, laoreet leo. Aenean sed ornare urna. Nulla eleifend lorem sed nisi posuere pellentesque. Vestibulum vulputate at dui ac luctus.</p>
            </div>

            <div class="headshot">
                <img alt="john doe" src="img/john_doe1.jpg"/>
            </div>
            <div class="headshot_text">
                <h3>John Doe</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a purus diam. Nam massa leo, interdum quis nisl non, vehicula condimentum augue. Pellentesque id enim dapibus, interdum sem sit amet, laoreet leo. Aenean sed ornare urna. Nulla eleifend lorem sed nisi posuere pellentesque. Vestibulum vulputate at dui ac luctus.</p>
            </div>

            <div class="headshot">
                <img alt="john doe" src="img/john_doe1.jpg"/>
            </div>
            <div class="headshot_text">
                <h3>John Doe</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a purus diam. Nam massa leo, interdum quis nisl non, vehicula condimentum augue. Pellentesque id enim dapibus, interdum sem sit amet, laoreet leo. Aenean sed ornare urna. Nulla eleifend lorem sed nisi posuere pellentesque. Vestibulum vulputate at dui ac luctus.</p>
            </div>

            <div class="headshot">
                <img alt="john doe" src="img/john_doe1.jpg"/>
            </div>
            <div class="headshot_text">
                <h3>John Doe</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a purus diam. Nam massa leo, interdum quis nisl non, vehicula condimentum augue. Pellentesque id enim dapibus, interdum sem sit amet, laoreet leo. Aenean sed ornare urna. Nulla eleifend lorem sed nisi posuere pellentesque. Vestibulum vulputate at dui ac luctus.</p>
            </div>

            <div class="headshot">
                <img alt="john doe" src="img/john_doe1.jpg"/>
            </div>
            <div class="headshot_text">
                <h3>John Doe</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a purus diam. Nam massa leo, interdum quis nisl non, vehicula condimentum augue. Pellentesque id enim dapibus, interdum sem sit amet, laoreet leo. Aenean sed ornare urna. Nulla eleifend lorem sed nisi posuere pellentesque. Vestibulum vulputate at dui ac luctus.</p>
            </div>

        </div>

        <h2>Teams Training with Us</h2>

        <section class="teams">

            <div>
                <img alt="OBSA Pony" src="img/fury.jpg"/>
            </div>

            <div>
                <img alt="OBSA Pony" src="img/freedom.png"/>
            </div>

            <div>
                <img alt="OBSA Pony" src="img/foxes.jpg"/>
            </div>

            <div>
                <img alt="OBSA Pony" src="img/pony.png"/>
            </div>

        </section>

</div>

<?php get_footer(); ?>
