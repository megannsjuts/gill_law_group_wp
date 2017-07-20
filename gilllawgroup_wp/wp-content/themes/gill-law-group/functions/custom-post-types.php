<?php
/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5()
{
    /*
    register_post_type('html5-blank', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('HTML5 Blank Custom Post', 'html5blank'), // Rename these to suit
            'singular_name' => __('HTML5 Blank Custom Post', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New HTML5 Blank Custom Post', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit HTML5 Blank Custom Post', 'html5blank'),
            'new_item' => __('New HTML5 Blank Custom Post', 'html5blank'),
            'view' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'view_item' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'search_items' => __('Search HTML5 Blank Custom Post', 'html5blank'),
            'not_found' => __('No HTML5 Blank Custom Posts found', 'html5blank'),
            'not_found_in_trash' => __('No HTML5 Blank Custom Posts found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'menu_icon' => 'dashicons-format-status',   // http://www.kevinleary.net/wordpress-dashicons-list-custom-post-type-icons/
        'can_export' => true // Allows export in Tools > Export
    ));
    register_taxonomy(
        'type_of_staff',    // Taxonomy
        'staff',             // Object Type
        array(
            'label' => __( 'Type' ),
            'rewrite' => array( 'slug' => 'type' ),
            'hierarchical' => true, // Is this taxonomy hierarchical like categories or not hierarchical like tags.
        )
    );
    */

    register_post_type('services', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('service', 'html5blank'), // Rename these to suit
            'singular_name' => __('service', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New service', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit service', 'html5blank'),
            'new_item' => __('New service', 'html5blank'),
            'view' => __('View service', 'html5blank'),
            'view_item' => __('View service', 'html5blank'),
            'search_items' => __('Search service', 'html5blank'),
            'not_found' => __('No services found', 'html5blank'),
            'not_found_in_trash' => __('No services found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => false, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'menu_icon' => 'dashicons-format-image',   // http://www.kevinleary.net/wordpress-dashicons-list-custom-post-type-icons/
        'can_export' => true // Allows export in Tools > Export
    ));
    register_taxonomy(
        'type_of_service',    // Taxonomy
        'services',             // Object Type
        array(
            'label' => __( 'Type' ),
            'rewrite' => array( 'slug' => 'type_of_service' ),
            'hierarchical' => true, // Is this taxonomy hierarchical like categories or not hierarchical like tags.
        )
    );

    register_post_type('lawyers', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('lawyer', 'html5blank'), // Rename these to suit
            'singular_name' => __('lawyer', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New lawyer', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit lawyer', 'html5blank'),
            'new_item' => __('New lawyer', 'html5blank'),
            'view' => __('View lawyer', 'html5blank'),
            'view_item' => __('View lawyer', 'html5blank'),
            'search_items' => __('Search lawyer', 'html5blank'),
            'not_found' => __('No lawyers found', 'html5blank'),
            'not_found_in_trash' => __('No lawyers found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => false, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'menu_icon' => 'dashicons-admin-users',   // http://www.kevinleary.net/wordpress-dashicons-list-custom-post-type-icons/
        'can_export' => true // Allows export in Tools > Export
    ));
    register_taxonomy(
        'name_of_lawyer',    // Taxonomy
        'lawyers',             // Object Type
        array(
            'label' => __( 'Name' ),
            'rewrite' => array( 'slug' => 'name_of_lawyer' ),
            'hierarchical' => true, // Is this taxonomy hierarchical like categories or not hierarchical like tags.
        )
    );
}
