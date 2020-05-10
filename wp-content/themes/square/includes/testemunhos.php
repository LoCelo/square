<?php

register_post_type( 'testemunhos',
    array(
      'labels' => array(
        'name' => 'Testemunhos',
        'singular_name' => 'Testemunho',
        'add_new' => 'Novo Testemunho',
        'add_new_item' => 'Adicionar Testemunho',
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-megaphone',
      'rewrite' => array('slug' => 'testemunho'),
      'supports' => array('title', 'thumbnail', 'page-attributes')
    )
);


?>
