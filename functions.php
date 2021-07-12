<?php
// Custom Menus
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'social-menu' => __( 'Social Media Menu' ),
      'footer-menu' => __( 'Footer Menu' )
     )
   );
 }

add_action( 'init', 'register_my_menus' );

// Meta Tags
add_filter('admin_init', 'adding_meta_tag');

function adding_meta_tag()
{
    register_setting('general', 'keywords', 'esc_attr');
    add_settings_field('my_field', '<label for="Keywrods">'.__('Keywrods (comma seprated):' , 'my_field' ).'</label>' , 'meta_tag_setting_fields_html', 'general');

}

function meta_tag_setting_fields_html()
{
    $value = get_option( 'keywords', '' );
    echo '<input type="text" id="keywords" name="keywords" value="' . $value . '" />';
}

// Widget Area
function header_widgets_init() {

	register_sidebar( array(
		'name'          => 'Website Header Widgets Area',
		'id'            => 'home_top_widget',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'header_widgets_init' );
?>
