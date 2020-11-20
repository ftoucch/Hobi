<?php 

// Require the admin dasboard functions and the custom enqueue file
require get_template_directory() . '/inc/admin/admin-function.php';
require get_template_directory() .'/inc/enqueue.php';




function hobi_scriptme_enqueue()
{
    wp_register_style('font-awesome' ,get_template_directory_uri() . '/asset/font-awesome/css/font-awesome.min.css', array(), 'all' );
    wp_enqueue_style( 'font-awesome');
}

add_action('wp_enqueue_scripts', 'hobi_scriptme_enqueue');

