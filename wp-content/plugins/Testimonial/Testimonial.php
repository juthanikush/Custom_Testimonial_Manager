<?php
include('testimonial-submission.php');
include('Display-testimonials.php');

/**
 * Plugin Name: Testimonial
 * Plugin URI: https://www.google.com/
 * Description: Testimonial Plugin
 * Version: 1.0
 * Author: Kush Juthani
 * Author URI: https://github.com/juthanikush
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

 //Creating Custom Post Types for Testimonials
function my_testimonials_post_type() {
    $labels = array(
        'name'               => 'Testimonials',
        'singular_name'      => 'Testimonials',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Testimonials',
        'edit_item'          => 'Edit Testimonials',
        'new_item'           => 'New Testimonials',
        'view_item'          => 'View Testimonials',
        'search_items'       => 'Search Testimonials',
        'not_found'          => 'No Testimonials found',
        'not_found_in_trash' => 'No Testimonials found in trash',
        'parent_item_colon'  => '',
        'menu_name'          => 'Testimonials'
    );
    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'menu_position'       => 5,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'          => array(),
        'menu_icon'           => 'dashicons-testimonial', // Customize the menu icon if desired
        'rewrite'             => array( 'slug' => 'testimonial' ), // Customize the URL slug if desired
    );
  
    register_post_type( 'testimonial', $args );
}
add_action( 'init', 'my_testimonials_post_type' );

//add css
function Testimonials_load_styles(){
    wp_enqueue_style('style',plugins_url('css/style.css',__FILE__));
}
add_action('wp_enqueue_scripts', 'Testimonials_load_styles');
    

function process_testimonial_submission() {
    if (isset($_POST['testimonial_submit'])) {
        $author = sanitize_text_field($_POST['testimonial_author']);
        $content = sanitize_textarea_field($_POST['testimonial_content']);

        $post_data = array(
            'post_title' => $author,
            'post_content' => $content,
            'post_status' => 'draft', // Testimonial will be saved as a draft for review
            'post_type' => 'testimonial', // Assuming the custom post type is 'testimonial'
        );

        $post_id = wp_insert_post($post_data);


        // $fields_list=[
        //     'testimonial_author',
        //     'testimonial_content'
        // ];
        // foreach($fields_list as $field){
        //     if(array_key_exists($field,$_POST)){
        //         update_post_meta($post_id,$field,sanitize_text_field($_POST[$field]));
        //     }
        // }


        if ($post_id) {
            // Display success message or redirect to a thank you page
            echo 'Thank you for submitting your testimonial!';
        } else {
            // Display error message
            echo 'Sorry, there was an error submitting your testimonial. Please try again.';
        }
    }
}
add_action('init', 'process_testimonial_submission');


