<?php
$context = Timber::get_context();
$context['page'] = new TimberPost();

// WP_Query $args
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'posts_per_page' => 10,
    'paged' => $paged,
);
$context['articles'] = Timber::get_posts($args);

Timber::render('templates/page-articles.twig', $context);
?>