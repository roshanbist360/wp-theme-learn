<?php get_header(); ?>

  <?php 
     while (have_posts()){
     the_post();  
  ?>
  


  <section class="blog-section py-5" style="overflow: hidden;">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-12 col-12">
                  <div class="blog-left-img ">
                      <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"
                          alt="" class="w-100" />
                      <div class="date-and-comment py-3">
                          <div class="date">
                              <i class="fa fa-calendar" aria-hidden="true"></i>
                              <a href=""><?php echo get_the_date('l, j F Y'); ?></a>
                          </div>
                          <div>
                              <i class="fa fa-commenting-o" aria-hidden="true"></i> <?php echo get_comments_number(); ?>
                              Comments
                          </div>
                      </div>
                      <div class="description my-3">
                          <h3 class="mb-3 post-title">
                               <?php  the_title(); ?>
                          </h3>
                          <p>
                             <?php the_content(); ?>
                          </p>
                      </div>
                  </div>

                  <div class="tags mt-5">
                      <div class="tag-container-section">
                          <p style="font-weight: 600;">Tags: 
                          <div class="tag-item">
                              <?php the_tags('',', &nbsp; ',''); ?>
                          </div>
                          </p>  
                      </div>
                  </div>

                  <!-- ShareThis BEGIN -->
                  <div class="sharethis-inline-share-buttons"></div>
                  <!-- ShareThis END -->
                  <hr>
                  
                  <div class="Related-Post py-3">
                      <h5 class="widget-title">Related Post</h5>
                  </div>
                  <!-- fb comment script -->
                  <div id="fb-root"></div>
                  <script async defer crossorigin="anonymous"
                      src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v17.0&appId=2303212319732285&autoLogAppEvents=1"
                      nonce="tPvfivrA"></script>
                  <!-- comment section -->
                  <div class="fb-comments" data-href="https://jhapatsaud.com/" data-width="auto" data-numposts="5">
                  </div>
              </div>
              <div class="col-lg-4 col-md-12 col-12">
                  <div class="blog-right-content">
                      <div class="author-img pt-2">
                          <img src="https://sofsee.com/default/profile.png" alt="Admin " class="w-100" />
                      </div>
                      <p class="admin-text pt-2">Admin</p>
                  </div>
                  
                  <div class="sidebar">
                     <?php dynamic_sidebar( 'main_sidebar' ); ?>
                  </div>

                  <div class="Recent-Articles py-4">
                      <h5 class="widget-title">Recent Posts</h5>
                      <?php
                       $args = array(
                         'post_type' => 'post', 
                         'posts_per_page' => 4,
                       );
                       $blogposts = new WP_Query($args);
              
                       while ($blogposts->have_posts()){
                        $blogposts->the_post();
                       ?>  

                      <div class="row pt-3">
                          <div class="col-lg-4">
                              <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"
                                  alt="" class="w-100" />
                          </div>
                          <div class="col-lg-8">
                              <div class="date">
                                  <i class="fa fa-calendar" aria-hidden="true"></i>
                                  <a href=""><?php echo get_the_date('l, j F Y'); ?></a>
                              </div>
                              <div>
                                  <h3 class="recent-artical-heading">
                                      <a href=""> <?php  the_title(); ?></a>
                                  </h3>
                              </div>
                          </div>
                      </div>

                      <?php
                       }
                      ?>
                  </div>

                  <div class="Categories py-4">
                      <h5 class="widget-title">Categories</h5>
                      <div class="category-row">
                          <div class="icon-and-category">
                              <i class="fa fa-location-arrow" aria-hidden="true"></i>&nbsp;<a href=""
                                  class="technology"><?php the_category('<br> <i class="fa fa-location-arrow" aria-hidden="true"></i>&nbsp;&nbsp;'); ?></a>
                          </div>
                      </div>
                  </div>

                  <div class="tags py-4">
                      <h5 class="widget-title">Tags</h5>
                      <div class="tag-container">
                          <div class="tag-item">
                                <?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

 <?php
   }
  ?>

<?php get_footer(); ?>