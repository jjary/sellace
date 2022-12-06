<?php
function custom_post_type()
{
    $labels = array(
        'name'                => _x('Usługi', 'Post Type General Name', 'golizard-template'),
        'singular_name'       => _x('Usługa', 'Post Type Singular Name', 'golizard-template'),
        'menu_name'           => __('Usługi', 'golizard-template'),
        'parent_item_colon'   => __('Wpis nadrzędny', 'golizard-template'),
        'all_items'           => __('Wszystkie usługi', 'golizard-template'),
        'view_item'           => __('Zobacz usługę', 'golizard-template'),
        'add_new_item'        => __('Dodaj nową usługę', 'golizard-template'),
        'add_new'             => __('Dodaj nową usługę', 'golizard-template'),
        'edit_item'           => __('Edytuj usługę', 'golizard-template'),
        'update_item'         => __('Aktualizuj usługę', 'golizard-template'),
        'search_items'        => __('Szukaj usługi', 'golizard-template'),
        'not_found'           => __('Nie znaleziono', 'golizard-template'),
        'not_found_in_trash'  => __('Nie znaleziono w koszu', 'golizard-template'),
    );
        
    $args = array(
        'label'               => __('Usługi', 'golizard-template'),
        'description'         => __('Sekcja usług firmy', 'golizard-template'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'taxonomies'          => array('genres'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon'           => 'dashicons-clipboard',
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    );
    register_post_type('services', $args);
    
    $labels = array(
        'name'                => _x('Narzędzia', 'Post Type General Name', 'golizard-template'),
        'singular_name'       => _x('Narzędzie', 'Post Type Singular Name', 'golizard-template'),
        'menu_name'           => __('Narzędzia', 'golizard-template'),
        'parent_item_colon'   => __('Wpis nadrzędny', 'golizard-template'),
        'all_items'           => __('Wszystkie narzędzia', 'golizard-template'),
        'view_item'           => __('Zobacz narzędzie', 'golizard-template'),
        'add_new_item'        => __('Dodaj nowe narzędzie', 'golizard-template'),
        'add_new'             => __('Dodaj nowe narzędzie', 'golizard-template'),
        'edit_item'           => __('Edytuj narzędzie', 'golizard-template'),
        'update_item'         => __('Aktualizuj narzędzie', 'golizard-template'),
        'search_items'        => __('Szukaj narzędzia', 'golizard-template'),
        'not_found'           => __('Nie znaleziono', 'golizard-template'),
        'not_found_in_trash'  => __('Nie znaleziono w koszu', 'golizard-template'),
    );
        
    $args = array(
        'label'               => __('Narzędzia', 'golizard-template'),
        'description'         => __('Sekcja narzędzi mobilnych', 'golizard-template'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'taxonomies'          => array('genres'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon'           => 'dashicons-admin-tools',
        'menu_position'       => 6,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    );
    register_post_type('tools', $args);

    $labels = array(
        'name'                => _x('Dane', 'Post Type General Name', 'golizard-template'),
        'singular_name'       => _x('Dane', 'Post Type Singular Name', 'golizard-template'),
        'menu_name'           => __('Dane', 'golizard-template'),
        'parent_item_colon'   => __('Wpis nadrzędny', 'golizard-template'),
        'all_items'           => __('Wszystkie dane', 'golizard-template'),
        'view_item'           => __('Zobacz daną', 'golizard-template'),
        'add_new_item'        => __('Dodaj nową daną', 'golizard-template'),
        'add_new'             => __('Dodaj nową daną', 'golizard-template'),
        'edit_item'           => __('Edytuj daną', 'golizard-template'),
        'update_item'         => __('Aktualizuj daną', 'golizard-template'),
        'search_items'        => __('Szukaj danej', 'golizard-template'),
        'not_found'           => __('Nie znaleziono', 'golizard-template'),
        'not_found_in_trash'  => __('Nie znaleziono w koszu', 'golizard-template'),
    );
        
    $args = array(
        'label'               => __('Dane', 'golizard-template'),
        'description'         => __('Sekcja danych statystycznych', 'golizard-template'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'taxonomies'          => array('genres'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon'           => 'dashicons-editor-ol',
        'menu_position'       => 7,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    );
    register_post_type('report', $args);
}
add_action('init', 'custom_post_type', 0);
