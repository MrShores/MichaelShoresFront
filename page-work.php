<?php
$context = Timber::get_context();
$context['page'] = new TimberPost();

Timber::render('templates/page-work.twig', $context);
?>