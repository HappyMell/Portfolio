<?php 


function register_acf_block_types() {

    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'heading',
        'title'             => __('Heading'),
       // 'description'       => __('A custom testimonial block.'),
        'render_template'   => 'block/heading.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'testimonial', 'quote' ),
        'mode'              => 'edit'
    ));

    acf_register_block_type(array(
        'name'              => 'experience',
        'title'             => __('Experience'),
       // 'description'       => __('A custom testimonial block.'),
        'render_template'   => 'block/experience.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'testimonial', 'quote' ),
        'mode'              => 'edit'
    ));

    acf_register_block_type(array(
        'name'              => 'skills',
        'title'             => __('Skills'),
       // 'description'       => __('A custom testimonial block.'),
        'render_template'   => 'block/skills.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'testimonial', 'quote' ),
        'mode'              => 'edit'
    ));

    acf_register_block_type(array(
        'name'              => 'examples',
        'title'             => __('Examples'),
       // 'description'       => __('A custom testimonial block.'),
        'render_template'   => 'block/examples.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'testimonial', 'quote' ),
        'mode'              => 'edit'
    ));

    acf_register_block_type(array(
        'name'              => 'education',
        'title'             => __('Education'),
       // 'description'       => __('A custom testimonial block.'),
        'render_template'   => 'block/education.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'testimonial', 'quote' ),
        'mode'              => 'edit'
    ));

    acf_register_block_type(array(
        'name'              => 'interests',
        'title'             => __('Interests'),
       // 'description'       => __('A custom testimonial block.'),
        'render_template'   => 'block/interests.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'testimonial', 'quote' ),
        'mode'              => 'edit'
    ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}