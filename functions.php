<?php 

function lomargcg_menus(){
    register_nav_menus(array(
        'menu_principal' => __( 'Menú Principal', 'lomargcg')
    ));
}
add_action('init','lomargcg_menus');

function lomargcg_styles(){
    wp_enqueue_style('normalize', get_template_directory_uri().'/node_modules/normalize.css/normalize.css', array(), '8.0.1');
    wp_enqueue_style('poppins', 'https://fonts.googleapis.com/css?family=Poppins&display=swap', array(), '');
    wp_enqueue_style('raleway', 'https://fonts.googleapis.com/css?family=Raleway&display=swap', array(), '');
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/node_modules/bootstrap/dist/css/bootstrap.css', array(), '4.4.1');
    wp_enqueue_style('sweetalert2', get_template_directory_uri().'/node_modules/sweetalert2/dist/sweetalert2.css', array(), '4.4.1');
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/node_modules/@fortawesome/fontawesome-free/css/all.css', array(), '4.4.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
    
};
add_action('wp_enqueue_scripts','lomargcg_styles');

function lomargcg_scripts() {
    wp_enqueue_script('jquery-boostrap', get_template_directory_uri().'/node_modules/jquery/jquery.min.js', array(), '1.9.1', true);
    wp_enqueue_script('popper', get_template_directory_uri().'/node_modules/popper.js/dist/umd/popper.js', array(), '1.16.1', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/node_modules/bootstrap/dist/js/bootstrap.js', array(), '4.4.1', true);
    wp_enqueue_script('sweetalert2', get_template_directory_uri().'/node_modules/sweetalert2/dist/sweetalert2.js', array(), '9.7.1', false);
    wp_enqueue_script('script', get_template_directory_uri().'/js/script.js', array(), '4.4.1', true);
}
add_action( 'wp_enqueue_scripts', 'lomargcg_scripts' );
