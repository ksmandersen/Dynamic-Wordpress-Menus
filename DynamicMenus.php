<?php 

/*
Plugin Name: Dynamic Page Menus
Plugin URI: http://github.com/ksmandersen/dynamicmenus
Description: Set the page menu for a nav location dynamically from the admin interface
Version: 1.0
Author URI: http://github.com/ksmandersen
*/

require_once 'meta-box.php';

function get_menus(){
    $r = array(-1 => "");
    $menus = wp_get_nav_menus();
		if(is_array($menus) && count($menus) > 0) {
			foreach($menus as $key => $menu) {
				$o = wp_get_nav_menu_object($menu->term_id);
				$r[$menu->term_id] = $o->name;
			}
		}
    return $r;
}

function page_meta() {
	$meta_boxes[] = array(
		'id'			=> 'dpm_page-menu',
		'title'		=> 'Page Menu',
		'pages'		=> array('page'),
		'context'	=> 'normal',
		'fields'	=> array(
			array(
				'name'		=> 'Menu',
				'id'			=> 'dpm_page-menu-id',
				'type'		=> 'select',
				'options'	=> get_menus()
			)
		)
	);
	
	foreach($meta_boxes as $meta_box) {
    $my_box = new RW_Meta_Box($meta_box);
  }
}
	
if(is_admin())
	page_meta();


?>