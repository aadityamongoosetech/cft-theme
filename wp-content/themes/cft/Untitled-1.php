// add_action( 'wp_ajax_my_action', 'map' );
// add_action( 'wp_ajax_nopriv_my_action', 'map' );
// add_action('wp_footer','map');
wp_enqueue_script( 'my_script_handle', MY_JS_URL, array( 'jquery' ) );
wp_localize_script( 'my_script_handle', 'my_ajaxurl', admin_url( 'admin-ajax.php' ) );
function ajax_fetch(){?>
<script>
 jQuery (document).ready(function(){
 jQuery("#map").click(function(){
$.ajax
({
    url:<?php echo admin_url('admin-ajax.php'); ?>
    type:'post',
    data:{action:'map',keyword:jQuery('#map').val()},
    success:function(data){
      jQuery('#map').html(data);
    }
})
 });
 });             
</script>
<?php

}
add_action('wp_ajax_data_fetch','map');
add_action('wp_ajax_nporiv_data_fetch','map');
$the_query = new wp_Query(array('post_per_page'=>-1,'s'=>esc_attr($_POST['keyword'])));
