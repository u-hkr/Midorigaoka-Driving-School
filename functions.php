<?php 
/**
 * functions and definitions
 */


/**
 * Enqueue scripts and styles.
 */
function get_filemtime($filename){
	$filemtime = @filemtime($filename);
	if($filemtime){
		return date_i18n('YmdHis', $filemtime);
	}else{
		return '1.0.0';
	}
}
function theme_scripts() {
	wp_deregister_script('jquery-core');
	wp_enqueue_script('jquery-core', "https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js", array(),false,false);
	wp_enqueue_script('gsap-js', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js", array(),false,false);
	wp_enqueue_script('scrolltrigger-js', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js", array(),false,false);
	wp_enqueue_script('slick-js', "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", array(),false,false);
  wp_enqueue_style( 'slick-css', "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css", array() );

  wp_enqueue_style( 'reset-css', get_template_directory_uri() . '/assets/css/reset.css', array() );
  wp_enqueue_style( 'style-css', get_template_directory_uri() . '/assets/css/style.css', array() );
  wp_enqueue_style( 'common-css', get_template_directory_uri() . '/assets/css/common.css', array() );

	if(is_home() || is_front_page()){

    $file = "/assets/css/index.css";
		wp_enqueue_style( 'page-index-css', get_template_directory_uri().$file, array(), get_filemtime(get_template_directory().$file) );

	}elseif(is_page()){
		$post_obj = get_queried_object();
		$slug = $post_obj->post_name;

    $file = "/assets/css/${slug}.css";
    wp_enqueue_style( "page-${slug}-css", get_template_directory_uri().$file, array(), get_filemtime(get_template_directory().$file) );

		global $template;
		$template_name = basename($template);
		$template_name = str_replace('page-', '', $template_name);
		$template_name = str_replace('.php', '', $template_name);
		if($slug !== $template_name && $template_name != 'page'){
      $file = "/css/${template_name}.css";
			wp_enqueue_style( "template-${template_name}-css", get_template_directory_uri().$file, array(), get_filemtime(get_template_directory().$file) );
		}
	}elseif(is_archive() || is_category()){

			$file = "/assets/css/news.css";
			wp_enqueue_style( 'news-css', get_template_directory_uri().$file, array(), get_filemtime(get_template_directory().$file) );

		// if(is_post_type_archive("blog")){
		// }

	}elseif(is_single() || is_singular()){
		
		$file = "/assets/css/news.css";
		wp_enqueue_style( 'news-css', get_template_directory_uri().$file, array(), get_filemtime(get_template_directory().$file) );

		// if(is_singular("post")){
		// }elseif(is_singular("blog")){
		// }

	// }elseif(is_search()){
	}

}
add_action( 'wp_enqueue_scripts', 'theme_scripts', 1 );

function theme_footer_script() {
	wp_enqueue_script('theme-js', get_template_directory_uri().'/assets/js/script.js', array(), get_filemtime(get_template_directory()."/js/script.js"));
}
add_action('wp_footer', 'theme_footer_script');

// add_action('admin_enqueue_scripts', function(){
	// wp_enqueue_style( 'theme-admin', get_stylesheet_directory_uri().'/css/admin.css' );
	// wp_enqueue_script('theme-admin', get_stylesheet_directory_uri().'/js/admin.js', array('jquery'));
// });

// add_action( 'enqueue_block_editor_assets', function(){
// 	wp_enqueue_script( 'block-script', get_stylesheet_directory_uri().'/js/editor-block.js',array("wp-blocks"), "", true);
// });
// add_action( 'enqueue_block_assets', function(){
// 	if(is_admin()){
// 		wp_enqueue_style( 'block-style', get_stylesheet_directory_uri().'/css/editor-block.css' );
// 	}
// });

/**
 * Add custom classes to the body.
 */
function theme_body_classes( $classes ) {

	global $post;
	if(is_page()){
		$post_obj = get_queried_object();
		$slug = $post_obj->post_name;
		$classes[] = 'page-'.$slug;
		if($post_obj->post_parent) $classes[] = 'parent-'.get_page_uri($post_obj->post_parent);
	}

	return $classes;
}
add_filter( 'body_class', 'theme_body_classes' );

/**
 * 記事一覧の本文抜粋
 */
function custom_excerpt_length( $length ) {
	return 300;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
remove_filter('the_excerpt', 'wpautop'); // 本文抜粋のpタグ削除
add_filter('excerpt_more', function(){ return '...'; }, 9999);



/**
 * 投稿アーカイブ設定
 */
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'news';
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

function admin_menu_change_label() {
  global $menu;
  global $submenu;
  $name = 'お知らせ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name.'一覧';
  $submenu['edit.php'][10][0] = $name.'の追加';
}
add_action( 'admin_menu', 'admin_menu_change_label' );

/*
	特定の固定ページ(リンク集)でエディタを無効化
*/
// add_filter('use_block_editor_for_post',function($use_block_editor,$post){
// 	if($post->post_type==='page'){
// 			if(in_array($post->post_name,['works', 'works_private'])){
// 					remove_post_type_support('page','editor');
// 					remove_post_type_support('page','custom-fields');
// 					return false;
// 			}
// 	}
// 	return $use_block_editor;
// },10,2);

/*
	ページ存在確認
*/
function get_page_url($pageSlug){
	$page = get_page_by_path($pageSlug);
	if(!$page || !$page->ID) return false;
	if(get_post_status($page->ID) == "publish"){
		return esc_url(get_permalink($page->ID));
	}else{
		return false;
	}
}

/*
	画像URL
*/
function dir_img(){
	return get_template_directory_uri()."/assets/img";
}

?>