<?php
function register_cft_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_cft_menu' );
function cft_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action('wp_enqueue_scripts','add_frontend_ajax_javascript_file');
function add_frontend_ajax_javascript_file()
{ 
  wp_localize_script('ajax-script-new','cft_js_object',
            array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
        
  wp_enqueue_script('frontend-ajax-script',get_stylesheet_directory_uri() .'/js/frontend-ajax.js',array('jQuery'),'2021',true);
  
}

function ajax_get_post_information()
{
  global $post;
  $post_id = $_POST['post_id'];
  $post = get_post($post_id);
  setup_postdata($post);
  $response = [];
  $response['title'] = get_the_title();
  $response['content'] = get_the_content();
  $response['company_name'] = get_post_meta($post_id,'company',true);
  echo json_encode($response); die();
}
add_action('wp_ajax_get_post_information','ajax_get_post_information');
add_action('wp_ajax_nopriv_get_post_information','ajax_get_post_information');

?>
