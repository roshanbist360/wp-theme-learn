    <?php get_header() ?>

    <section class="about" style="overflow: hidden">
      <div class="container d-flex justify-content-center align-items-center py-5">
        <div class="row text-center myWidth">
          <div class="slogan">
            <p>
              राम्रो भविष्यका लागि भिजन भएको नेता । जनताको सेवा गर्न र साझा
              भलाइलाई अगाडि बढाउन समर्पित। लोकतन्त्र, न्याय र मानव अधिकारको
              प्रबद्र्धन गर्न प्रतिबद्ध
            </p>
          </div>
          <div class="politics">
            <div class="gov_image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo/nepal-govt_0.png" alt="" />
            </div>
            <div class="political_description mt-3">
              <div class="political_name">
                <h5>झपट बहादुर साउँद</h5>
              </div>
              <div class="political_designation">
                <h5>
                  प्रदेश सभा सदस्य [अछाम क्षेत्र नं. १(ख)]  <br>
                  तथा <br>
                  मन्त्री, सामाजिक विकास <br>
                  सुदूरपश्चिम प्रदेश, नेपाल
                </h5>
              </div>
            </div>
          </div>
          <div class="more_about">
            <button><a href="./about.html">Read More</a></button>
          </div>
        </div>
      </div>
    </section>
    
     <!-- ===================== पछिल्लो प्रेस ============-->
    <section style="overflow: hidden">
      <div class="container latest-press-section py-5">
        <div class="latest-press-heading">
          <div>
            <h1 class="">पछिल्लो प्रेस</h1>
          </div>
          <div>
            <p class="view-all"><a href="next-press.html">- VIEW ALL</a></p>
          </div>
        </div>
        <hr class="latest-press-hr-line" />

        <div class="row mt-5">
         <?php
         $args = array(
           'post_type' => 'post', 
           'posts_per_page' => 4,
           'category_name' => 'next-press',  
         );
         $blogposts = new WP_Query($args);

         while ($blogposts->have_posts()){
          $blogposts->the_post();
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
                  <!-- <div class="admin"><a href=""><?php the_author(); ?></a></div> -->
                  <div class="admin"><a href=""><?php echo get_the_category_list(', '); ?></a></div>
                  <div class="dot"></div>
                  <div><p class="post-month"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></p></div>
                </div>
                <p class="fw-bold fs-5 post-details">
                  <a href="<?php the_permalink(); ?>"
                    > <?php echo wp_trim_words( get_the_title(), 10) ?> </a
                  >
                </p>
              </div>
             </div>
           </div>

        <?php
          }
        ?>
        
        </div>
      </div>
     <?php wp_reset_query(); ?>
    </section>
    
     <!-- ===================== पत्रपत्रिकामा ============-->
    <section style="overflow: hidden">
      <div class="container latest-press-section py-5">
        <div class="latest-press-heading">
          <div>
            <h1 class="">पत्रपत्रिकामा</h1>
          </div>
          <div>
            <p class="view-all"><a href="patrapatrika.html">- VIEW ALL</a></p>
          </div>
        </div>
        <hr class="latest-press-hr-line" />

        <div class="row mt-5">
         <?php
         $args = array(
           'post_type' => 'post', 
           'posts_per_page' => 4,
           'category_name' => 'patrapatrika',  
         );
         $blogposts = new WP_Query($args);

         while ($blogposts->have_posts()){
          $blogposts->the_post();
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
                  <!-- <div class="admin"><a href=""><?php the_author(); ?></a></div> -->
                  <div class="admin"><a href=""><?php echo get_the_category_list(', '); ?></a></div>
                  <div class="dot"></div>
                  <div><p class="post-month"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></p></div>
                </div>
                <p class="fw-bold fs-5 post-details">
                  <a href="<?php the_permalink(); ?>"
                    > <?php echo wp_trim_words( get_the_title(), 10) ?> </a
                  >
                </p>
              </div>
             </div>
           </div>

        <?php
          }
        ?>
        
        </div>
      </div>
     <?php wp_reset_query(); ?>
    </section>

    <!-- ===================== मेरा विचार ============-->
    <section style="overflow: hidden">
      <div class="container latest-press-section py-5">
        <div class="latest-press-heading">
          <div>
            <h1 class="">मेरा विचार</h1>
          </div>
          <div>
            <p class="view-all"><a href="mero-bichaar.html">- VIEW ALL</a></p>
          </div>
        </div>
        <hr class="latest-press-hr-line" />

        <div class="row mt-5">
         <?php
         $args = array(
           'post_type' => 'post', 
           'posts_per_page' => 4,
           'category_name' => 'mero-bichaar',  
         );
         $blogposts = new WP_Query($args);

         while ($blogposts->have_posts()){
          $blogposts->the_post();
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
                  <!-- <div class="admin"><a href=""><?php the_author(); ?></a></div> -->
                  <div class="admin"><a href=""><?php echo get_the_category_list(', '); ?></a></div>
                  <div class="dot"></div>
                  <div><p class="post-month"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></p></div>
                </div>
                <p class="fw-bold fs-5 post-details">
                  <a href="<?php the_permalink(); ?>"
                    > <?php echo wp_trim_words( get_the_title(), 10) ?> </a
                  >
                </p>
              </div>
             </div>
           </div>

        <?php
          }
        ?>
        
        </div>
      </div>
     <?php wp_reset_query(); ?>
    </section>

    <?php get_footer() ?>

   