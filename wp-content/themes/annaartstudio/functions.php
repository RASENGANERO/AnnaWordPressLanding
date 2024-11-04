<?
function anna_art_studio(){
    
    wp_enqueue_style('stylecss',get_template_directory_uri().'/assets/css/style.css');
    wp_enqueue_script('mainmyjs',get_template_directory_uri().'/assets/js/main.js');
    
}
add_action( 'wp_enqueue_scripts','anna_art_studio');
add_theme_support('post-thumbnails');
?>