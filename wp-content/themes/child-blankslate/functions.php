<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));

}

// function enqueue_custom_fonts() {
//   wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Syne:wght@400;700&display=swap', false);
// }
// add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');
add_filter('wp_nav_menu', 'filtre_menu', 10, 2);
add_filter('wpcf7_autop_or_not', '__return_false');

/**************************HOOKS************************************ */
function filtre_menu($nav_menu, $args) {
  
    if (is_user_logged_in() && current_user_can('administrator')) {
		$nav_menu=str_replace('Nous rencontrer</span></a></li>','Nous rencontrer</span></a></li><li id="menu-item-103" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-103"><a href="http://localhost/planty/wp-admin" itemprop="url"><span itemprop="name">Admin</span></a></li>',$nav_menu);
    }
    $nav_menu=str_replace('<span itemprop="name">Commander','<span itemprop="name" class="bouton-commander">Commander', $nav_menu);
    return $nav_menu;
}
?>