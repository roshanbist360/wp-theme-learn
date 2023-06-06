<?php get_header(); ?>

<section style="overflow:hidden" id="fancy_gallery" class="py-5 my-0">
    <div class="container">
      <div class="latest-press-heading">
        <div>
          <h1 class="">Video Gallery:</h1>
        </div>
        <div>
           <p class="view-all" style="font-weight:bold">- ALL Videos</p>
         </div>
       </div>
      <hr class="latest-press-hr-line" />
    <div class="row myFancyGallery mt-5">

        <?php
        // Get the post ID from the query parameter
        $post_id = isset($_GET['post_id']) ? absint($_GET['post_id']) : 0;

        // Retrieve the images associated with the post ID
        $gallery_images = get_post_gallery_images($post_id);

        if ($gallery_images) {
            $post_title = get_the_title($post_id);
            ?>
            <?php
            foreach ($gallery_images as $image_url) {
                ?>
                <div class="col-lg-2 col-md-3 col-4 fancy_item">
                    <a href="<?php echo esc_url($image_url); ?>" data-fancybox="gallery" data-caption="Caption #1">
                        <img src="<?php echo esc_url($image_url); ?>" alt="gallery" />
                    </a>
                </div>
                <?php
            }
        } else {
            echo '<p>No gallery images found.</p>';
        }
        ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>
