<?php get_header(); ?>

<section style="overflow: hidden">
  <div class="container latest-press-section py-5">
    <div class="latest-press-heading">
      <div>
        <h1 class="">Category: <?php single_cat_title(); ?></h1>
      </div>
      <div>
        <p class="view-all" style="font-weight:bold">- ALL POSTS</p>
      </div>
    </div>
    <hr class="latest-press-hr-line" />

    <div class="row mt-5">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="col-lg-3 col-md-6">
          <div class="post mb-4">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" class="w-100" alt="jhapat" />
            <div class="post-section p-3">
              <div class="admin-div pt-3">
                <div class="admin"><a href=""><?php echo get_the_category_list(', '); ?></a></div>
                <div class="dot"></div>
                <div>
                  <p class="post-month"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></p>
                </div>
              </div>
              <p class="fw-bold fs-5 post-details">
                <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 10); ?></a>
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
</section>

<div class="pagination">
  <?php echo paginate_links(); ?>
</div>

<?php get_footer(); ?>
