<?php 

/*
========================================================
function to enqueue stylesheet and scprits for Hobi
=======================================================
*/

function hobi_script_enqueue($hook)
{
    if('toplevel_page_HOBI_theme_option' != $hook)
    {
        return;
    }
    wp_register_style('hobi_admin_css', get_template_directory_uri() . '/css/HOBI.admin.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('hobi_admin_css');

    wp_register_style('font-awesome' ,get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css', array(), 'all' );
    wp_enqueue_style( 'font-awesome');

}

add_action('admin_enqueue_scripts', 'hobi_script_enqueue');