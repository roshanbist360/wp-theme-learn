<?php

 function gt_setup(){
   //adding css files
  wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
  
  //adding js files
  wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true );
 
  //adding google fonts
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com');
  wp_enqueue_style('google-fonts', '//fonts.gstatic.com');
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
  
  //adding font-awesome
  wp_enqueue_style('fontawesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css');

  //adding timeline
  wp_enqueue_style('vertical-timeline', get_theme_file_uri('./assets/dist/vertical-timeline.css'), NULL, microtime(), 'all');
  wp_enqueue_script("vertical-timeline", get_theme_file_uri('./assets/dist/vertical-timeline.js'), NULL, microtime(), true);
}
add_action('wp_enqueue_scripts', 'gt_setup');



//adding theme support: post thumbnails (i.e featured image on posts) and custom site title and other supports
function gt_init(){
   add_theme_support('post-thumbnails');
   add_theme_support('title-tag');
   add_theme_support('html5', array('comment-list', 'comment-form', 'search-form'));
}
add_action('after_setup_theme', 'gt_init');


// Image Gallery Post Type
function gt_custom_post_type(){
  register_post_type('image_gallery', 
      array(
          'rewrite' => array('slug' => 'image-gallery'),
          'labels' => array(
              'name' => 'Image Gallery',
              'singular_name' => ' Image Gallery',
              'add_new_item' => 'Add New Image Gallery',
              'edit_item' => 'Edit Image Gallery'
          ),
          'menu_icon' => 'dashicons-format-gallery', // Use the 'dashicons-images' icon for the menu
          'public' => true,
          'has_archive' => true,
          'supports' => array(
              'title', 'thumbnail', 'editor', 'excerpt', 'comments'
          )
      )
  );
}
add_action('init', 'gt_custom_post_type');

// ======================================== Video Gallery Post Type ==========================================
function gt_custom_post_type2() {
  register_post_type('video_gallery',
      array(
          'rewrite' => array('slug' => 'video-gallery'),
          'labels' => array(
              'name' => 'Video Gallery',
              'singular_name' => 'All Video Gallery',
              'add_new_item' => 'Add New Video Gallery',
              'edit_item' => 'Edit Video Gallery'
          ),
          'menu_icon' => 'dashicons-video-alt2', // Use the 'dashicons-images' icon for the menu
          'public' => true,
          'has_archive' => true,
          'supports' => array(
              'title', 'thumbnail', 'editor', 'excerpt', 'comments'
          ),
          'register_meta_box_cb' => 'gt_add_video_url_meta_box' // Callback function to add meta box for video URL
      )
  );
}
add_action('init', 'gt_custom_post_type2');

function gt_add_video_url_meta_box() {
  add_meta_box(
      'video_url_meta_box',
      'YouTube Video URL',
      'gt_render_video_url_meta_box',
      'video_gallery',
      'normal',
      'high'
  );
}

function gt_render_video_url_meta_box($post) {
  // Retrieve the stored YouTube video URL
  $video_url = get_post_meta($post->ID, 'video_url', true);
  ?>
  <label for="video_url">YouTube Video URL:</label>
  <input type="text" name="video_url" id="video_url" value="<?php echo esc_attr($video_url); ?>" style="width: 100%;" />
  <?php
}

// Save the video URL when the post is saved or updated
function gt_save_video_url_meta_box($post_id) {
  if (isset($_POST['video_url'])) {
      $video_url = sanitize_text_field($_POST['video_url']);
      update_post_meta($post_id, 'video_url', $video_url);
  }
}
add_action('save_post_video_gallery', 'gt_save_video_url_meta_box');


//sidebar
function gt_widgets(){
  register_sidebar(
    array(
      'name' => 'Main Sidebar',
      'id' => 'main_sidebar',
      'before_title' => 'h3',
      'after_title' => 'h3',
    )
    );
}
add_action('widgets_init', 'gt_widgets');



?>