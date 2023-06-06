<?php get_header(); ?>

<section style="overflow:hidden" id="fancy_gallery">
    <div class="container">
        <div class="row myFancyGallery">
        <?php
// Get the post ID from the query parameter
$post_id = isset($_GET['post_id']) ? absint($_GET['post_id']) : 0;

// Retrieve the images associated with the post ID
$gallery_images = get_post_gallery_images($post_id);

if ($gallery_images) {
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
