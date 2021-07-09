<?php 
/* MENU PRINCIPAL */
function menuPrincipal() {
    register_nav_menu('principal', __('Menu Principal', 'theme-slug'));
}
add_action('after_setup_theme', 'menuPrincipal');

function menuFooter() {
	register_nav_menu('footer', __('Footer', 'theme-slug'));
}
add_action('after_setup_theme', 'menuFooter');

function menuMobile() {
	register_nav_menu('menumobile', __('Menu Mobile', 'theme-slug'));
}
add_action('after_setup_theme', 'menuMobile');
?>