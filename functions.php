<?php
function my_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support( 'title-tag' );
}
add_action('after_setup_theme', 'my_setup');
function my_menu_init()
{
  register_nav_menus(
  array(
    'global' => 'ヘッダーメニュー',
    'drawer' => 'ドロワーメニュー',
    'footer' => 'フッターメニュー',
  )
  );
}
add_action('init', 'my_menu_init');
function my_script_init()
{
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.15.3/css/all.css', array(), '5.15.3', 'all');
  wp_enqueue_style('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1', 'all');
  wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0.0', 'all');
  wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0.0', 'all');
  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
  wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.min.js', array( 'jquery' ), '1.0.0', true);
  wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js' , array('jquery'), '1.8.1', true);
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'blogs'; // ページ名
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 ); //3つ目は優先度（数値が小さいほど早く実行）。4つ目は引数の数。
function get_five_posts($query) {
  if($query->is_home() && $query->is_main_query()){
    $query->set('post_type', 'post');
    $query->set('posts_per_page', '5');
  }
}
add_action('pre_get_posts','get_five_posts'); ?>