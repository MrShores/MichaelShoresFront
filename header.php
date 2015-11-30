<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?php
        if ( is_front_page() ) {
            bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
        } else {
            wp_title(''); echo ' | '; bloginfo( 'name' );
        }?>
    </title>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,400italic,700,300italic' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

    <div class="navigation">
        <div class="close">
            <div class="bubble_close bubble_red bubble_small"></div>
        </div>
        <div class="logo">
            <a href="/"><span class="icon-m"></span></a>
        </div>
        <ul class="nav">
            <li class="about"><a href="<?php echo bloginfo('url'); ?>/about/">About</a></li>
            <!-- <li class="articles"><a href="article_01.php">Articles</a></li> -->
            <li class="contact"><a href="<?php echo bloginfo('url'); ?>/contact/">Contact</a></li>
            <li class="twitter"><a href="http://www.twitter.com/meshores" target="_blank">Twitter</a></li>
        </ul>
        <div class="copyright">
            &copy; <?php echo date('Y'); ?> Michael Shores
        </div>
    </div>


    <div id="main">

        <div class="header">
            <div class="header_title">
                <div class="text">
                    <a href="<?php echo bloginfo('url'); ?>" title="<?php echo bloginfo('title'); ?>: Home"><span>Michael</span> Shores</a>
                </div>
            </div>
            <a id="nav_toggle" href="#">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
