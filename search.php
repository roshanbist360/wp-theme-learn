<?php get_header(); ?>

<section class="blog-section py-5" style="overflow: hidden;">
      <div class="container">        
          <div class="row text-center">
             <h2>Search results for: <?php echo get_search_query(); ?></h2>
          </div>
      </div>
</section>

 <?php if(have_posts()) { ?>  <!--this first line of code is to check if searched results have posts -->
  <?php 
     while (have_posts()){
     the_post();  
  ?>
  
  <section class="blog-section py-5" style="overflow: hidden;">
      <div class="container">        
          <div class="row d-flex justify-content-center">
              <div class="col-lg-8 col-md-10 col-12">
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
          </div>
      </div>
  </section>
  <?php
   }
   ?><!-- closing of while -->
  
 <?php  } else{  ?>
       <div class="container mb-5">        
       <div class="row d-flex justify-content-center">
         <div class="col-lg-5 col-md-8 col-10 d-flex justify-content-center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/images/no-result-found.webp" alt="" />
         </div>
       </div>
       </div>
 <?php }?><!-- closing of have posts -->

<?php get_footer(); ?>