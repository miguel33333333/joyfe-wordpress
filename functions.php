<?php

// CPT Artículos
function cpt_articulos() {
    register_post_type('articulos', [
        'label' => 'Artículos',
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'rewrite' => ['slug' => 'articulos'],
    ]);
}
add_action('init', 'cpt_articulos');

// Segundo CPT (puede ser cualquiera)
function cpt_proyectos() {
    register_post_type('proyectos', [
        'label' => 'Proyectos',
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'rewrite' => ['slug' => 'proyectos'],
    ]);
}
add_action('init', 'cpt_proyectos');
