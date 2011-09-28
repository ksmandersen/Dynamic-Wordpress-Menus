# Dynamic Wordpress Menus
This simple plugin for Wordpress enables you to select a menu for a 
single page from within the admin interface in Wordpress. It is also
possible to get the parent menus in nested page structures.

*Notice:* This plugin relies on the 
[Meta Box Script for Wordpress](http://www.deluxeblogtips.com/meta-box-script-for-wordpress/) by 
[RILWIS](http://www.deluxeblogtips.com/) which you can download for free 
[here](http://www.deluxeblogtips.com/meta-box-script-for-wordpress/).

## Usage

When activating the plugin a meta box will appear whenever editing a page like so:

![metabox](https://github.com/ksmandersen/Dynamic-Wordpress-Menus/blob/master/screenshots/metabox.png?raw=true)

You can then access the set menu in your theme like so:

	// Get the ID of the set menu
	$menu_id = get_menu_id($post->ID);
	
	// print the menu if set
	if($menu_id > 0)
		wp_nav_menu(array('menu' => $menu_id));
		
The plugin searches parent pages for set menus if no menu is set 
by default. This can be disabled by calling the the function like so:

	$menu_id = get_menu_id($post->ID, false);

	
## Licensing
This plugin is licensed under a [Creative Commons Attribution-ShareAlike 3.0 Unported License](http://creativecommons.org/licenses/by-sa/3.0/).

[![CC](http://i.creativecommons.org/l/by-sa/3.0/88x31.png)](http://creativecommons.org/licenses/by-sa/3.0/)