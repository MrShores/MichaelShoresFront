<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $page_title; ?></title>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,400italic,700,300italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/style.css" />

</head>
<body class="<?php echo $body_class; ?>">

    <div class="navigation">
        <div class="close">
            <div class="bubble_close bubble_red bubble_small"></div>
        </div>
        <div class="logo">
            <a href="/"><span class="icon-m"></span></a>
        </div>
        <ul class="nav">
            <li class="about"><a href="about.php">About</a></li>
            <!-- <li class="articles"><a href="article_01.php">Articles</a></li> -->
            <li class="contact"><a href="contact.php">Contact</a></li>
            <li class="twitter"><a href="http://www.twitter.com/meshores" target="_blank">Twitter</a></li>
        </ul>
        <div class="copyright">
            &copy; <?php echo date('Y'); ?> Michael Shores
        </div>
    </div>


    <div id="main">

        <div class="header">
            <div class="header_title"><div class="text"><span>Michael</span> Shores</div></div>
            <a id="nav_toggle" href="#">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
