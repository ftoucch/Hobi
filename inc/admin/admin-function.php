<?php

/*
this is not Your Generic function file this is rather used to customize the admin dashboard.

*/


/*
======================================
functions to add admin Dashboard page
======================================
*/


//Global Variable Declaration




function HOBI_add_admin_page()
{
$page_title = 'HOBI Theme Option';
$menu_title ='HOBI';
$capability = 'manage_options';
$menu_slug = 'HOBI_theme_option';
$icon_url = get_template_directory_uri().'/asset/img/hobi-icon-3.png';
    add_menu_page( $page_title, $menu_title,$capability, $menu_slug,'HOBI_create_admin_page',$icon_url, 200 );
}

add_action('admin_menu', 'HOBI_add_admin_page');

function HOBI_create_admin_page()
{
    require_once ( get_template_directory().'/inc/admin/Hobi-admin-page.php');
}