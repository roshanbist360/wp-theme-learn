
<?php get_header(); ?>

<section style="overflow:hidden">
   <div class="container py-5">
   <div class="latest-press-heading">
      <div>
        <h1 class="">Video Gallery:</h1>
      </div>
      <div>
        <p class="view-all" style="font-weight:bold">- ALL Videos</p>
      </div>
    </div>
    <hr class="latest-press-hr-line" />
    <div class="row mt-5">


<?php
$args = array(
    'post_type' => 'video_gallery',
    'posts_per_page' => -1,
);

$videos_query = new WP_Query($args);

if ($videos_query->have_posts()) {
    while ($videos_query->have_posts()) {
        $videos_query->the_post();
        $video_url = get_post_meta(get_the_ID(), 'video_url', true); // Retrieve the stored YouTube video URL

        // Display the video player or thumbnail for each video
        if (!empty($video_url)) {
            $video_id = gt_get_youtube_video_id($video_url); // Function to extract YouTube video ID from the URL

            if ($video_id) {
                ?>

              <div class="col-lg-3 col-md-6">
               <div class="post mb-4">
                <div class="video">
                <iframe width="100%" height="200px"  src="https://www.youtube.com/embed/<?php echo $video_id; ?>" title="YouTube video player" 
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                    picture-in-picture; web-share" allowfullscreen style="border-radius: 5px;"></iframe>
               </div>
               <div class="post-section px-3 py-1">
                <p class="fw-bold fs-5 post-details">
                  <h4><?php echo wp_trim_words( get_the_title(), 10) ?></h4>
                </p>
              </div>
            </div>
             </div>

                <?php
            }
        }
    }

    wp_reset_postdata();
}

function gt_get_youtube_video_id($url) {
    $pattern = '/^(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:embed\/|watch\?v=|v\/|vi?\/|u\/\w\/|user\/\w+\/|playlist\/?))?(?:\?\S*)?(?:\#t\=\d*)?([\w-]{11})$/';
    preg_match($pattern, $url, $matches);

    if (isset($matches[1])) {
        return $matches[1];
    }

    return false;
}
?>

      </div>
    </div>
</section>

<?php get_footer(); ?>