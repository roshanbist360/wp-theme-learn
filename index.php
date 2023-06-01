<?php get_header(); ?>
<?php
    $args = array(
      'post_type' => 'post', //if we have to show posts of project then we will replace post by project here
      'posts_per_page' => 2, //similarly we have many functions like this
    );
    $blogposts = new WP_Query($args);
  while ($blogposts->have_posts()){
    $blogposts->the_post();
  ?>
   <a href="<?php the_permalink(); ?>">
      <h3><?php  the_title(); ?></h3>
   </a>
   <h5><?php  the_excerpt(); ?></h5>

<?php
  }
 ?>

<?php get_footer();?>