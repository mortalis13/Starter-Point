<?php

/**
 * Starter functions and definitions
 *
 * @package Starter
 */

if ( ! function_exists( 'starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function starter_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on starter, use a find and replace
	 * to change 'starter' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'starter', get_template_directory() . '/languages' );
  
  if ( ! isset( $content_width ) ) {
    $content_width = 1200;
  }
        
  // Editor style
  add_editor_style( array( 'css/editor-style.css' ) );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'starter' ),
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'starter_custom_background_args', array(
		'default-color' => 'ffffff',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
    'caption',
	) );
  
  // Init post views
  starter_init_post_views();
  
  // Set image cropping on upload on/off
  starter_set_image_cropping_state();
}
endif; // starter_setup
add_action( 'after_setup_theme', 'starter_setup' );

/**
 * Enqueue scripts and styles.
 */
function starter_scripts() {
  wp_enqueue_style( 'starter-style', get_stylesheet_uri() );
  wp_enqueue_style( 'starter-content' , get_template_directory_uri() . '/css/content.css' );
  wp_enqueue_style( 'starter_fontawesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css' );

  wp_enqueue_script( 'starter-enquire', get_template_directory_uri() . '/js/plugins/enquire.min.js', false, '20150317', true );
  wp_enqueue_script( 'starter-superfish', get_template_directory_uri() . '/js/plugins/superfish.min.js', array('jquery'), '20150317', true );
  wp_enqueue_script( 'starter-hover-intent', get_template_directory_uri() . '/js/plugins/jquery.hoverIntent.min.js', array('jquery'), '20150317', true );
  wp_enqueue_script( 'starter-lazy-load', get_template_directory_uri() . '/js/plugins/jquery.lazyload.min.js', array( 'jquery' ), '20150317' );
  wp_enqueue_script( 'starter-scrollto', get_template_directory_uri() . '/js/plugins/jquery.scrollTo.min.js', array( 'jquery' ), '20150317' );
  
  wp_enqueue_script( 'starter-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20150317', true );
  wp_enqueue_script( 'starter-superfish-settings', get_template_directory_uri() . '/js/superfish-settings.js', array('jquery'), '20150317', true );
  wp_enqueue_script( 'starter-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20150317', true );
  wp_enqueue_script( 'starter-functions', get_template_directory_uri() . '/js/functions.js', array('jquery'), '20150317', true );
  
  if(is_attachment()){
    wp_enqueue_script( 'starter-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20150317' );
  }

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'starter_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add theme options page to the admin side.
 */
require ( get_stylesheet_directory() . '/inc/options/theme-options.php' );


// --------------------------------------------------------- additional ------------------------------------------------------

// ----------------------------- options -------------------------------

// image type when it's added through the media manager (default is 'file')
update_option('image_default_link_type','none');

// ----------------------------- helpers -------------------------------

// check if post has readmore link
function starter_has_read_more($content){
  $pos=strpos($content, '<!--more-->');
  if($pos===false) return false;
  return true;
}

function starter_are_comments_disabled() {
  if(function_exists( 'comments_open' ))
  return (!comments_open() && '0' == get_comments_number()) || !post_type_supports( get_post_type(), 'comments' ) || post_password_required();
}

// ----------------------------- post views count -----------------------------

// function to display number of post views.
function getPostViews($postID){
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return '0';
  }
  return $count;
}

// function to count views.
function setPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
    $count = 1;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '1');
  }else{
    $count++;
    update_post_meta($postID, $count_key, $count);
  }
}
 
// Add it to a column in WP-Admin - (Optional)
function posts_column_views($defaults){
  $defaults['post_views'] = __('Views','starter');
  return $defaults;
}
function posts_custom_column_views($column_name, $id){
  if($column_name === 'post_views'){
    echo getPostViews(get_the_ID());
  }
}
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);

// init post views count (create records for each post in the DB)
function starter_init_post_views(){
  global $wpdb;
  $ids=$wpdb->get_col("select id from wp_posts where post_type = 'post' AND (post_status = 'publish' OR post_status = 'private')");
  $key='post_views_count';
  foreach($ids as $pid){
    $res=$wpdb->get_row("select * from wp_postmeta where post_id=".$pid." and meta_key='".$key."'");
    if(!$res){
      $wpdb->insert('wp_postmeta',
        array(
          'post_id'=>$pid,
          'meta_key'=>$key,
          'meta_value'=>0
        ),
        array('%d','%s','%s')
      );
    }
  }
}

// -------------- category filters (posts_per_page, sort columns) --------------

function starter_category_queries( $query ) {
  if ( !is_admin() && $query->is_main_query() && is_category()) {
    // add [post_views_count] field
    
    $query->set('meta_key','post_views_count');
    $query->set('meta_type','numeric');
    
    wp_verify_nonce('pca_filter_posts_per_page','pca_nonce_field');
    $ppp=intval(get_query_var('posts_per_page_filter'));
    
    // add [posts_per_page] field
    
    if ($ppp) {
      $query->set( 'posts_per_page', $ppp );
    }
    
    // add [orderby] and [order] fields
    
    $order=esc_html(get_query_var('orderby'));
    $dir=esc_html(get_query_var('order'));
    if($order){
      switch($order){
        case 'date':
          $order='post_date';
          break;
        case 'title':
          $order='post_title';
          break;
        case 'comments':
          $order='comment_count';
          break;
        case 'views':
          $order='post_views_count';
          break;
      }
      
      $query->set( 'orderby', $order );
      $query->set( 'order', $dir );
    }
  }
}
function add_query_vars_filter( $vars ){
  $vars[] = "posts_per_page_filter";
  return $vars;
}
add_filter( 'query_vars', 'add_query_vars_filter' );
add_action( 'pre_get_posts', 'starter_category_queries' );

// ----------------------------- comments form -----------------------------

function starter_customize_comment_form($fields){
  $fields['email'] = '<input id="email" name="email" type="hidden" value="mail@example.com" />';  //removes email field
  $fields['url'] = '';  //removes website field
  return $fields;
}
add_filter('comment_form_default_fields','starter_customize_comment_form');

// ----------------------------- category colors -----------------------------

function add_category_custom_fields($tag) {
  global $wpdb;
  $cat_id=$tag->term_id;
  
  $color="#000000";
  $use_custom=0;
  
  $res=$wpdb->get_row('select * from wp_category_meta where cat_id='.$cat_id);
  if($res){
    $color=$res->meta_color;
    $use_custom=$res->use_custom_color;
  }
?>
  <tr class="form-field">
    <th scope="row" valign="top"><label for="category-color"><?php _e('Color','starter'); ?></label></th>
    <td>
      <input id="category-color" class="color-field" name="category_color" value="<?php echo $color ?>" />
      <div><label><input type="checkbox" id="use-custom-color" name="use_custom_color" <?php echo $use_custom?'checked="checked"':'' ?> /> <?php _e('Use Custom Color','starter') ?></label></div>
    </td>
  </tr>
<?php  
}
add_action( 'edit_category_form_fields', 'add_category_custom_fields' );

function save_category_custom_fields() {
  $use_category_colors=starter_opt('use_category_colors');
  
  // global option (use_category_colors)
  
  if($use_category_colors){
    $cat_id=$_POST['tag_ID'];
    if(isset($_POST['category_color']))
      $color=$_POST['category_color'];
    
    // custom category option to use its color
    
    $use_custom=0;
    if(isset($_POST['use_custom_color']))
      $use_custom=$_POST['use_custom_color'];
    if($use_custom) $use_custom=1;
    
    global $wpdb;
    $category=$wpdb->get_row('select * from wp_category_meta where cat_id='.$cat_id);
    
    // if category is in the wp_category_meta table then update its state (color and its use)
    
    if($category){
      $wpdb->update('wp_category_meta',
        array(
          'meta_color'=>$color,           //set
          'use_custom_color'=>$use_custom,
        ),
        array('cat_id'=>$cat_id),         //where
        array('%s','%d'),                 //set format
        array('%d')                       //where format
      );
    }else if($use_custom){                // else add new category color only if the checkbox is selected
      $wpdb->insert('wp_category_meta',
        array(
          'cat_id'=>$cat_id,
          'meta_color'=>$color,
          'use_custom_color'=>$use_custom,
        ),
        array('%d','%s','%d')
      );
    }
    
  } // if($use_category_colors)
}
add_action( 'edit_category', 'save_category_custom_fields' );

// wpColorPicker() JS function converts the text filed into the color picker
function category_add_color_picker( $hook ) {
  if( is_admin() ) {
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'admin-functions',  get_template_directory_uri() . '/js/admin-functions.js', array( 'wp-color-picker' ), false, true );
  }
}
add_action( 'admin_enqueue_scripts', 'category_add_color_picker' );

// add new table for the colors
function starter_create_category_meta_table() {
  global $wpdb;

  $table_name='wp_category_meta';
  $charset_collate = $wpdb->get_charset_collate();

  $sql = "CREATE TABLE IF NOT EXISTS $table_name (
    cat_id mediumint(9) NOT NULL AUTO_INCREMENT,
    meta_color varchar(7) DEFAULT '',
    use_custom_color tinyint(1) DEFAULT '0',
    UNIQUE KEY cat_id (cat_id)
  ) $charset_collate;";

  require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
  dbDelta( $sql );
}
add_action("after_switch_theme", "starter_create_category_meta_table");

// ----------------------------- disable tags -----------------------------

add_action( 'init', 'starter_remove_tags' );
function starter_remove_tags() {
    global $wp_taxonomies;
    $tax = 'post_tag'; 
    if( taxonomy_exists( $tax ) )
        unset( $wp_taxonomies[$tax] );
}

// ----------------------------- disable image cropping -----------------------------

function starter_set_image_cropping_state(){
  $disable_crop=starter_opt('disable_image_cropping');
  if($disable_crop)
    add_filter('intermediate_image_sizes_advanced', 'disable_image_sizes_crop' );
}

function disable_image_sizes_crop($sizes){
  unset( $sizes['thumbnail']);
  unset( $sizes['medium']);
  unset( $sizes['large']);
  return $sizes;
}

// ----------------------------- admin theme options style -----------------------------

function starter_admin_theme_options_style( $hook ) {
  if ( 'appearance_page_theme_options' == $hook ) {
      wp_enqueue_style( 'starter-admin-options' , get_template_directory_uri() . '/css/admin-theme-options.css' );
      
      wp_enqueue_script( 'emmet_js', get_template_directory_uri() . '/js/ace/add/emmet.min.js', array('underscore'), '1.0.0', true );
      
      wp_enqueue_script( 'ace_js', get_template_directory_uri() . '/js/ace/ace-min/ace.js', '', '1.0.0');
      wp_enqueue_script( 'ace_mode_js', get_template_directory_uri() . '/js/ace/ace-min/mode-css.js', array( 'ace_js' ), '1.0.0');
      
      // wp_enqueue_script( 'ace_language_tools_js', get_template_directory_uri() . '/js/ace/ace-min/ext-language_tools.js', array( 'ace_js' ), '1.0.0', true );
      wp_enqueue_script( 'ace_emmet_js', get_template_directory_uri() . '/js/ace/ace-min/ext-emmet.js', array( 'ace_js' ), '1.0.0', true );
      wp_enqueue_script( 'ace_search_js', get_template_directory_uri() . '/js/ace/ace-min/ext-searchbox.js', array( 'ace_js' ), '1.0.0', true );
      wp_enqueue_script( 'ace_theme_js', get_template_directory_uri() . '/js/ace/add/theme-sublime.js', array( 'ace_js' ), '1.0.0', true );
      
      wp_enqueue_script( 'custom_css_js', get_template_directory_uri() . '/js/ace/editor.js', array( 'jquery', 'ace_js' ), '1.0.0', true );
  }
}
add_action( 'admin_enqueue_scripts', 'starter_admin_theme_options_style' );

// ----------------------------- lazy load images -----------------------------

function preg_lazyload($img_match) {
  $img_replace = $img_match[1] . 'src="' . get_template_directory_uri() . '/images/placeholder.gif" data-original' . substr($img_match[2], 3) . $img_match[3];
  
  $img_replace = preg_replace('/class\s*=\s*"/i', 'class="lazy ', $img_replace);
  
  $is_class = preg_match('/class\s*=\s*"/i', $img_replace);
  if(!$is_class)
    $img_replace = preg_replace('/<img /i', '<img class="lazy ', $img_replace);
    
  $img_replace .= '<noscript>' . $img_match[0] . '</noscript>';
  return $img_replace;
}

function filter_lazyload($content) {
  return preg_replace_callback('/(<\s*img[^>]+)(src\s*=\s*"[^"]+")([^>]+>)/i', 'preg_lazyload', $content);
}
add_filter('the_content', 'filter_lazyload');

// ----------------------------- include custom css -----------------------------

function starter_include_custom_options_css() {
  $use_css=starter_opt('use_custom_css');
  $css=starter_opt('custom_css');
  
  if($use_css && $css){
  ?>
    <style id="custom-options-style">
      <?php echo $css ?>
    </style>
  <?php
  }
}
add_action('wp_head', 'starter_include_custom_options_css');

// ----------------------------- admin post editor textarea style -----------------------------

function starter_html_editor_font() { 
?>
  <style type="text/css">
    #wp-content-editor-container textarea#content{
      font-size:15px;
    }
  </style>
<?php 
}
add_action( 'admin_head-post.php', 'starter_html_editor_font' );
add_action( 'admin_head-post-new.php', 'starter_html_editor_font' );

// ----------------------------- get options from db -----------------------------

function starter_opt($name){
  $options = get_option( 'starter_general_options' );
  if($options && isset($options[$name]))
    return $options[$name];
  return false;
}
