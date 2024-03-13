<?php
$eventrox_redux_demo = get_option('redux_demo');

//Custom fields:
require_once get_template_directory() . '/framework/wp_bootstrap_navwalker.php';
require_once get_template_directory() . '/framework/widget/recent-post.php';
require_once get_template_directory() . '/framework/class-ocdi-importer.php';
//Theme Set up:
function eventrox_theme_setup() {
    /*
     * This theme uses a custom image size for featured images, displayed on
     * "standard" posts and pages.
     */
	add_theme_support( 'custom-header' ); 
	add_theme_support( 'custom-background' );
	$lang = get_template_directory_uri() . '/languages';
  load_theme_textdomain('eventrox', $lang);
    add_theme_support( 'post-thumbnails' );
    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );
    // Switches default core markup for search form, comment form, and comments
    // to output valid HTML5.
    add_theme_support( "title-tag" );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
    'primary' =>  esc_html__( 'Primary Navigation Menu: Chosen menu in  pages ...', 'eventrox' ),
	) );
    // This theme uses its own gallery styles.
}
add_action( 'after_setup_theme', 'eventrox_theme_setup' );
if ( ! isset( $content_width ) ) $content_width = 900;



function eventrox_theme_scripts_styles() {
	$eventrox_redux_demo = get_option('redux_demo');
	$protocol = is_ssl() ? 'https' : 'http';
  wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css');
  wp_enqueue_style( 'eventrox-css', get_template_directory_uri().'/css/style.css');
  wp_enqueue_style( 'responsive', get_template_directory_uri().'/css/responsive.css');
  wp_enqueue_style( 'color-switcher', get_template_directory_uri().'/css/color-switcher-design.css');
  wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '2023-05-27' );
  if(isset($eventrox_redux_demo['chosen-color']) && $eventrox_redux_demo['chosen-color']==1){
  wp_enqueue_style( 'color', get_template_directory_uri().'/framework/color.php');
  }   
    
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );
  //Javascript
    wp_enqueue_script("jquery", get_template_directory_uri()."/js/jquery.js",array(),false,true);
    wp_enqueue_script("popper", get_template_directory_uri()."/js/popper.min.js",array(),false,true);
    wp_enqueue_script("bootstrap-min", get_template_directory_uri()."/js/bootstrap.min.js",array(),false,true);
    wp_enqueue_script("jquery-ui", get_template_directory_uri()."/js/jquery-ui.js",array(),false,true);
    if ( is_page_template( 'page-templates/coming-soon.php' ) ) {
     wp_enqueue_script("jquery-countdown", get_template_directory_uri()."/js/jquery.countdown.js",array(),false,true);
     }
    wp_enqueue_script("fancybox", get_template_directory_uri()."/js/jquery.fancybox.js",array(),false,true);
    if ( is_page_template( 'page-templates/home-2.php' ) || is_page_template( 'page-templates/home-3.php' )|| is_page_template( 'page-templates/home-4.php' )|| is_page_template( 'page-templates/home-5.php' ) ) {
     wp_enqueue_script("jquery-countdown", get_template_directory_uri()."/js/jquery.countdown.js",array(),false,true);
     }
    wp_enqueue_script("appear", get_template_directory_uri()."/js/appear.js",array(),false,true);
    wp_enqueue_script("eventrox-owl", get_template_directory_uri()."/js/owl.js",array(),false,true);
    if ( is_page_template( 'page-templates/home.php' ) ) {
     wp_enqueue_script("jquery-countdown", get_template_directory_uri()."/js/jquery.countdown.js",array(),false,true);
     }
    wp_enqueue_script("eventrox-wow", get_template_directory_uri()."/js/wow.js",array(),false,true);
    if ( is_page_template( 'page-templates/home-2.php' )|| is_page_template( 'page-templates/home-5.php' ) ) {
     wp_enqueue_script("jquery-parallax", get_template_directory_uri()."/js/parallax.min.js",array(),false,true);
     }
    wp_enqueue_script("validate", get_template_directory_uri()."/js/validate.js",array(),false,true);
    wp_enqueue_script("script", get_template_directory_uri()."/js/script.js",array(),false,true);
    wp_enqueue_script("color-settings", get_template_directory_uri()."/js/color-settings.js",array(),false,true);
}
add_action( 'wp_enqueue_scripts', 'eventrox_theme_scripts_styles' );
add_filter('style_loader_tag', 'myplugin_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'myplugin_remove_type_attr', 10, 2);

function myplugin_remove_type_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}

//Custom Excerpt Function
function eventrox_do_shortcode($content) {
    global $shortcode_tags;
    if (empty($shortcode_tags) || !is_array($shortcode_tags))
        return $content;
    $pattern = get_shortcode_regex();
    return preg_replace_callback( "/$pattern/s", 'do_shortcode_tag', $content );
}

add_filter('user_contactmethods', 'my_user_contactmethods');  
               
function my_user_contactmethods($user_contactmethods){  
  
    
  $user_contactmethods['facebook'] = 'Facebook Link';  
  $user_contactmethods['twitter'] = 'Twitter Link';
  $user_contactmethods['googleplus'] = 'Google Plus Link';  
  $user_contactmethods['instagram'] = 'Instagram Link';  
  $user_contactmethods['linkedin'] = 'Linkedin Link'; 
  $user_contactmethods['job'] = 'Job';  
  
  return $user_contactmethods;  
}   
// Widget Sidebar
function eventrox_widgets_init() {
	register_sidebar( array(
    'name'          => esc_html__( 'Primary Sidebar', 'eventrox' ),
    'id'            => 'sidebar-1',        
		'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'eventrox' ),        
		'before_widget' => '<div id="%1$s" class="widget sidebar-widget %2$s" >',        
		'after_widget'  => '</div>',        
		'before_title'  => '<h4 class="sidebar-title">
                                   ',        
		'after_title'   => '</h4>
                              '
    ) );
  register_sidebar( array(
    'name'          => esc_html__( ' Sidebar Ticket', 'eventrox' ),
    'id'            => 'sidebar-2',        
    'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'eventrox' ),        
    'before_widget' => '<aside id="%1$s" class="widget popular-categories %2$s" >',        
    'after_widget'  => '</aside>',        
    'before_title'  => '<div class="sidebar-title">
                                   <h3>',        
    'after_title'   => '</h3>
                              </div>'
    ) );
 
  

    register_sidebar( array(
    'name'          => esc_html__( 'Footer One Widget', 'eventrox' ),
    'id'            => 'footer-area-1',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'eventrox' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => ' ',
    'after_title'   => ' ',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer Two Widget', 'eventrox' ),
    'id'            => 'footer-area-2',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'eventrox' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => ' ',
    'after_title'   => ' ',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer Three Widget', 'eventrox' ),
    'id'            => 'footer-area-3',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'eventrox' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => ' ',
    'after_title'   => ' ',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer Four Widget', 'eventrox' ),
    'id'            => 'footer-area-4',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'eventrox' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => ' ',
    'after_title'   => ' ',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer One Widget Home 2', 'eventrox' ),
    'id'            => 'footer-area-home2-1',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'eventrox' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => ' ',
    'after_title'   => ' ',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer Two Widget Home 2', 'eventrox' ),
    'id'            => 'footer-area-home2-2',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'eventrox' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => ' ',
    'after_title'   => ' ',
  ) );
}
add_action( 'widgets_init', 'eventrox_widgets_init' );

//function tag widgets
function eventrox_tag_cloud_widget($args) {
	$args['number'] = 0; //adding a 0 will display all tags
	$args['largest'] = 18; //largest tag
	$args['smallest'] = 11; //smallest tag
	$args['unit'] = 'px'; //tag font unit
	$args['format'] = 'list'; //ul with a class of wp-tag-cloud
	$args['exclude'] = array(20, 80, 92); //exclude tags by ID
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'eventrox_tag_cloud_widget' );
function eventrox_excerpt() {
  $eventrox_redux_demo = get_option('redux_demo');
  if(isset($eventrox_redux_demo['blog_excerpt'])){
    $limit = $eventrox_redux_demo['blog_excerpt'];
  }else{
    $limit = 50;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
function eventrox_excerpt2() {
  $eventrox_redux_demo = get_option('redux_demo');
  if(isset($eventrox_redux_demo['event_excerpt'])){
    $limit = $eventrox_redux_demo['event_excerpt'];
  }else{
    $limit = 50;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

function eventrox_excerpt_3() {
  $eventrox_redux_demo = get_option('redux_demo');
  if(isset($eventrox_redux_demo['blog_excerpt_3'])){
    $limit = $eventrox_redux_demo['blog_excerpt_3'];
  }else{
    $limit = 50;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
function eventrox_excerpt4() {
  $eventrox_redux_demo = get_option('redux_demo');
  if(isset($eventrox_redux_demo['event_excerpt2'])){
    $limit = $eventrox_redux_demo['event_excerpt2'];
  }else{
    $limit = 50;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
function eventrox_excerpt5() {
  $eventrox_redux_demo = get_option('redux_demo');
  if(isset($eventrox_redux_demo['event_excerpt3'])){
    $limit = $eventrox_redux_demo['event_excerpt3'];
  }else{
    $limit = 50;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
//pagination
if (!function_exists( 'next_pagination' )){
 
    function next_pagination(){
 
        if ( $GLOBALS['wp_query']->max_num_pages <2 ){ return ''; }?>
 
            <?php if ( function_exists('wp_pagenavi') ): ?>
 
            <?php wp_pagenavi(); ?> 
 
            <?php else: ?>
                <nav class="pagination" role="navigation">
 
                    <?php if ( get_next_posts_link() ) : ?>
 
                        <li><?php next_posts_link( __('Previous', 'eventrox') ); ?></li>
 
                    <?php endif; ?>
                    
 
                    <?php if ( get_previous_posts_link() ) :?>
 
                        <li><?php previous_posts_link(__('Next', 'eventrox') ); ?></li>
 
                    <?php endif; ?>
 
                </nav>
 
             <?php endif; ?>
 
       <?php }
}
function eventrox_pagination($pages='') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    if($pages==''){
        global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
    }
    $pagination = array(
    'base'      => str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
    'format'    => '',
    'current'     => max( 1, get_query_var('paged') ),
    'total'     => $pages,
    'prev_text' => wp_specialchars_decode(esc_html__( '<i class="fas fa-chevron-left"></i>', 'eventrox' ),ENT_QUOTES),
    'next_text' => wp_specialchars_decode(esc_html__( '<i class="fas fa-chevron-right"></i>', 'eventrox' ),ENT_QUOTES),
    'type'      => 'list',
    'end_size'    => 3,
    'mid_size'    => 3
);
    $return =  paginate_links( $pagination );
  echo str_replace( "<ul class='page-numbers'>", '<ul class="styled-pagination">', $return );
}

function eventrox_search_form( $form ) {
    $form = '

<form action="' . esc_url(home_url('/')) . '">
      
          <input type="text" class="s-input-home" name="s" id="search" required value="' . get_search_query() . '" placeholder="'.esc_attr__('Search…', 'eventrox').'">
          
                  <button class="btn-s-input" type="submit"><i class="fa fa-search"></i></button>
  </form>
	';
    return $form;
}
add_filter( 'get_search_form', 'eventrox_search_form' );
//Custom comment List:

// Comment Form
function eventrox_theme_comment($comment, $args, $depth) {
    //echo 's';
   $GLOBALS['comment'] = $comment; ?>
    <?php if(get_avatar($comment,$size='70' )!=''){?>
    <div class="comment-box">
        <div class="comment">
            <div class="author-thumb"><?php echo get_avatar($comment,$size='60');?></div> 
            <div class="comment-info">
                <div class="name"><?php printf( get_comment_author_link()) ?></div> -
                <div class="date">CEO ART PRO</div>
            </div>      
            <div class="text"><?php comment_text() ?></div>
            <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
          </div>
    </div>         
  <?php }else{?>
    <div class="comment-box">
        <div class="comment">
            <div class="comment-info">
                <div class="name"><?php printf( get_comment_author_link()) ?></div> -
                <div class="date">CEO ART PRO</div>
            </div>      
            <div class="text"><?php comment_text() ?></div>
            <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
          </div>
    </div>
<?php }?>

<?php
}



/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin <thomasgriffinmedia.com>
 * @author     Gary Jones <gamajo.com>
 * @copyright  Copyright (c) 2014, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'eventrox_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
 
 
function eventrox_theme_register_required_plugins() {
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
      array(
            'name'      => esc_html__( 'One Click Demo Import', 'eventrox' ),
            'slug'      => 'one-click-demo-import',
            'required'  => true,
        ), 
      array(
            'name'      => esc_html__( 'Classic Editor', 'eventrox' ),
            'slug'      => 'classic-editor',
            'required'  => true,
        ), 
      array(
            'name'      => esc_html__( 'Classic Widgets', 'eventrox' ),
            'slug'      => 'classic-widgets',
            'required'  => true,
        ),
      array(
            'name'      => esc_html__( 'Widget Importer & Exporter', 'eventrox' ),
            'slug'      => 'widget-importer-&-exporter',
            'required'  => true,
        ), 
      array(
            'name'      => esc_html__( 'Contact Form 7', 'eventrox' ),
            'slug'      => 'contact-form-7',
            'required'  => true,
        ), 
      array(
            'name'      => esc_html__( 'WP Maximum Execution Time Exceeded', 'eventrox' ),
            'slug'      => 'wp-maximum-execution-time-exceeded',
            'required'  => true,
        ), 
      array(
            'name'                     => esc_html__( 'Elementor', 'eventrox' ),
            'slug'                     => 'elementor',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/elementor.zip',
        ),
      array(
            'name'                     => esc_html__( 'Eventrox Common', 'eventrox' ),
            'slug'                     => 'eventrox-common',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/eventrox-common.zip',
        ),
      array(
            'name'                     => esc_html__( 'Eventrox Elementor', 'eventrox' ),
            'slug'                     => 'eventrox-elementor',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/eventrox-elementor.zip',
        ),
    );
    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => esc_html__( 'Install Required Plugins', 'eventrox' ),
            'menu_title'                      => esc_html__( 'Install Plugins', 'eventrox' ),
            'installing'                      => esc_html__( 'Installing Plugin: %s', 'eventrox' ), // %s = plugin name.
            'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'eventrox' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'eventrox' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'eventrox' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'eventrox' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'eventrox' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'eventrox' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'eventrox' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'eventrox' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'eventrox' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'eventrox' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'eventrox' ),
            'return'                          => esc_html__( 'Return to Required Plugins Installer', 'eventrox' ),
            'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'eventrox' ),
            'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'eventrox' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
    tgmpa( $plugins, $config );
}
?>