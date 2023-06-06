
<?php get_header(); ?>

<section style="overflow: hidden">
  <div class="container latest-press-section py-5">
    <div class="latest-press-heading">
      <div>
        <h1 class="">Gallery Posts:</h1>
      </div>
      <div>
        <p class="view-all" style="font-weight:bold">- ALL POSTS</p>
      </div>
    </div>
    <hr class="latest-press-hr-line" />

   <div class="row mt-5">

      <?php
        $args = array(
            'post_type' => 'image_gallery',
        );
        
        $image_gallery_posts = new WP_Query($args);
        
        if ($image_gallery_posts->have_posts()) :
            while ($image_gallery_posts->have_posts()) :
                $image_gallery_posts->the_post();
       ?>
           <div class="col-lg-3 col-md-6">
            <div class="post mb-4">
              <img
                src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"
                alt=""
                class="w-100"
                alt="jhapat"
              />
              <div class="post-section p-3">
                <div class="admin-div pt-3">
                  <div><p class="post-month"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></p></div>
                </div>
                <p class="fw-bold fs-5 post-details">
                  <?php
                    $gallery_url = esc_url(add_query_arg('post_id', get_the_ID(), home_url('/gallery/')));
                   ?>

                  <a href="<?php echo $gallery_url; ?>"
                    > <?php echo wp_trim_words( get_the_title(), 10) ?> </a
                  >
                </p>
              </div>
             </div>
           </div>

        <?php endwhile;
          else : ?>
         <p>No posts found.</p>
        <?php endif; ?>

    </div>
  </div>
  <?php wp_reset_query(); ?>
</section>

<div class="pagination">
  <?php echo paginate_links(); ?>
</div>

<?php get_footer(); ?>
