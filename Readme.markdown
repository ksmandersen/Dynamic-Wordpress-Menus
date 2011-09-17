# Dynamic Wordpress Menus
This simple plugin for Wordpress enables you to select a menu for a 
single page from within the admin interface in Wordpress.

*Notice:* This plugin relies on the 
[Meta Box Script for Wordpress](http://www.deluxeblogtips.com/meta-box-script-for-wordpress/) by 
[RILWIS](http://www.deluxeblogtips.com/) which you can download for free 
[here](http://www.deluxeblogtips.com/meta-box-script-for-wordpress/).

## Usage

When activating the plugin a meta box will apear whenever editing a page like so:

![metabox](https://github.com/ksmandersen/Dynamic-Wordpress-Menus/blob/master/screenshots/metabox.png?raw=true)

You can then access the set menu in your theme like so:

	// Get the ID of the set menu
	$menu_id = get_post_meta($post->ID, 'dpm_page-menu-id', true);
	
	// print the menu
	wp_nav_menu(array('menu' => $menu_id));