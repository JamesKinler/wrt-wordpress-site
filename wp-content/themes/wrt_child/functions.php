<?php 

//this enqueues my extra styles and my fonts
function jk_styles(){
	wp_enqueue_style('materialize_css',get_stylesheet_directory_uri().'/css/materialize.css');
	wp_enqueue_style('fonts', "http://fonts.googleapis.com/icon?family=Material+Icons");


}
// this adds to wordpress
add_action('wp_enqueue_scripts','jk_styles');


// this regiesters and enqueues the javascript
function jk_scripts(){
	wp_register_script('materialize-js',get_stylesheet_directory_uri().'/js/materialize.js',array('jquery'),true);
	wp_enqueue_script('materialize-js');
	wp_register_script('myjs',get_stylesheet_directory_uri().'/js/myjs.js',array('jquery'),true);
	wp_enqueue_script('myjs');
}
// this adds to wordpress
add_action('wp_enqueue_scripts', 'jk_scripts');


// this is registers the nav bar to the menus section
register_nav_menus([
	'primary' =>__('primary menu', 'wrt_child'),
	'mobile' =>__('mobile nav', 'wrt_child'),
]);


// function wpdocs_custom_excerpt_length( $length ) {
//     return 8;
// }
// add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

?>
