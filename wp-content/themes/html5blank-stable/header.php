<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="Website description">
        <meta name="baseball training, softball training" content="">
        <meta name="author" content="Gerrett Rice">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,600i" rel="stylesheet">

        <!-- jQuery -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?>>

        <!-- Google Analytics -->
        <?php include_once("analyticstracking.php") ?>

        <header>

            <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In  -->
            <svg id="svg_logo" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" viewbox="0 0 327.1 120.9" style="enable-background:new 0 0 327.1 120.9;" xml:space="preserve">
                <style type="text/css"> .st0{fill:#B3B3B3;} .st1{fill:#001635;} .st2{fill:#FFFFFF;}</style>
                <defs></defs>
                <g>
                    <path class="st0" d="M307.8,100.7l-14.6-3.5L309,31.3c-95.3-21.7-195.6-21.7-290.9,0l15.8,65.9l-14.6,3.5L0,20.2l7.3-1.8c102.2-24.5,210.3-24.5,312.5,0l7.3,1.8L307.8,100.7z"/>
                </g>
                <g>
                    <g>
                        <path class="st0" d="M302.9,120.9l-7.3-1.8c-86.4-20.7-177.7-20.7-264.2,0l-7.3,1.8L0,20.2l7.3-1.8c102.2-24.5,210.3-24.5,312.5,0l7.3,1.8L302.9,120.9z M18.1,31.3l17.2,71.5c84.1-19,172.5-19,256.5,0L309,31.3C213.7,9.6,113.4,9.6,18.1,31.3z"/>
                    </g>
                </g>
                <g>
                    <g>
                        <path class="st1" d="M297.4,111.8c-88-21.1-179.7-21.1-267.7,0C22.8,83.1,15.9,54.4,9,25.7c101.6-24.4,207.5-24.4,309,0C311.2,54.4,304.3,83.1,297.4,111.8z"/>
                    </g>
                </g>
                <g>
                    <path class="st2" d="M78.9,80.4l-6,7.2l-18.9,2.9l-8-5.1l-1.5-9.5l10.9-1.7l0.7,4.8l11-1.7l-2-13.2l-14.9,2.3l-8-5.1l-3.5-22.6l6.1-7.3l18.9-2.9l7.9,5.1l1.5,9.5l-10.9,1.7L61.5,40l-11,1.7l2,13.2l15-2.3l7.9,5.1L78.9,80.4z"/>
                    <path class="st2" d="M140,21.4l0.8,11l-3.6,0.3l-4.6,49.2l-11.2,0.8l-7-25.4l-3.3,26.2l-11.2,0.8L88,36.2l-3.6,0.3l-0.8-11l17.4-1.3l0.8,11l-2.7,0.2l4.3,19.3l3.8-30.9l9.1-0.7l8.2,30.1l1.5-19.7l-2.6,0.2l-0.8-11L140,21.4z"/>
                    <path class="st2" d="M152.6,81.4l0-11l3.2,0l-0.1-37.7l-3.2,0l0-11l17.4-0.1l0,11l-3.2,0l0.1,37.7l3.2,0l0,11L152.6,81.4z"/>
                    <path class="st2" d="M204.7,82.7l-10.4-32L193.3,71l3.2,0.2l-0.6,11l-17.4-0.9l0.6-11l3.2,0.2l2-37.7l-3.2-0.2l0.6-11l15,0.8l10.4,32l1.1-20.3l-3.2-0.2l0.6-11l17.3,0.9l-0.6,11l-3.2-0.2l-2.6,48.7L204.7,82.7z"/>            <path class="st2" d="M262.6,82.4l-7.9,5.3L235,85.2l-6.2-7.1l5.8-46.9l7.9-5.4l19.6,2.4l6.3,7.1l-1.2,9.5l-11-1.4l0.6-4.8L245,37.3l-4.7,37.5l11.9,1.5l1.6-13.2l-7.5-0.9l1.4-11l18.4,2.3L262.6,82.4z"/>
                    <path class="st2" d="M270.7,90.2l1.6-9l9,1.5l-1.6,9L270.7,90.2z M275.3,63.9l5.7-33.4l9,1.5l-5.7,33.4l-2.6,11.4l-7.7-1.3L275.3,63.9z"/>
                </g>
            </svg>

            <nav>
                <?php html5blank_nav();
            //    echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                    ?>
            </nav>

        </header>
        <!-- /header -->
