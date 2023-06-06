  <!-- footer section -->
  <section style="overflow: hidden; background: #2e50ae">
      <div class="footer container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12 footer-contact-content">
            <div class="ms-5 contact-info">
              <h4>सम्पर्क जानकारी</h4>
              <div class="footer-info pt-2">
                <i class="fa-solid fa-location-dot"></i> सुदुरपश्चिम प्रदेश,
                नेपाल
              </div>
              <!-- <div class="footer-info"><i class="fa fa-phone" aria-hidden="true"></i> <a
                             href="tel:9851143781, 096-410125">९८१२४४५६७४, ९८१२४४५६७४</a></div> -->
              <div class="footer-info">
                <i class="fa-regular fa-envelope"></i>
                <a
                  href="mailto:secretariat@jhapatbdrsaud.com"
                  style="word-wrap: break-word"
                  >secretariat@jhapatbdrsaud.com</a
                >
              </div>
              <div class="footer-social-icon">
                <a href="https://www.facebook.com/jhapatsaudofficial/">
                  <i class="fa-brands fa-facebook-f footer-facebook-icon"></i>
                </a>
                <a href="https://twitter.com/jhapat_saud">
                  <i class="fa-brands fa-twitter footer-twitter-icon"></i
                ></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 col-12 extra-section">
            <h4>मिडिया</h4>
            <ul>
              <li>
                <i class="fa fa-caret-right" aria-hidden="true"></i>
                <a href="<?php echo get_category_link(get_category_by_slug('news')->term_id); ?>">समाचार</a>
              </li>
              <li>
                <i class="fa fa-caret-right" aria-hidden="true"></i>
                <a href="<?php echo site_url('/imagegallery'); ?>">फोटो ग्यालरी</a>
              </li>
              <li>
                <i class="fa fa-caret-right" aria-hidden="true"></i>
                <a href="<?php echo site_url('/video-gallery'); ?>">भिडियो ग्यालरी </a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 col-12 extra-section">
            <h4 class="px-lg-0 px-md-4">झपट बहादुर साउँद</h4>
            <ul>
              <li>
                <i class="fa fa-caret-right" aria-hidden="true"></i>
                <a href="<?php echo site_url('/about'); ?>">मेरो बारेमा</a>
              </li>
              <li>
                <i class="fa fa-caret-right" aria-hidden="true"></i>
                <a href="<?php echo get_category_link(get_category_by_slug('dream')->term_id); ?>">सपना</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 col-12 facebook-page">
            <iframe
              src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fjhapatsaudofficial%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=953490256066936"
              width="100%"
              height="200"
              style="border: none; overflow: hidden; margin-bottom: 25px"
              scrolling="no"
              frameborder="0"
              allowfullscreen="true"
              allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
            ></iframe>
          </div>
        </div>
      </div>
    </section>

    <!-- <div class="hr-line"></div> -->
    <section style="overflow: hidden; background: #042173">
      <div class="container copyright-section" style="overflow: hidden">
        <div class="copyright-text">
          प्रतिलिपि अधिकार © 2023, सर्वाधिकार सुरक्षित ।
        </div>
        
      </div>
    </section>

    <!-- JQuery CDN -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
      integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- Bootstrap and Popper Js CDN -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    
    <!-- Share this ------ post share  -->
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=647449eb40353a0019caf05e&product=sop' async='async'></script>
    
    <!-- timeline -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>
      $("#vt1").verticalTimeline();
      $("#vt2").verticalTimeline();
      $("#vt3").verticalTimeline({ startLeft: false });
      $("#vt4").verticalTimeline({
        startLeft: false,
        arrows: false,
        alternate: false,
      });
      $("#vt5").verticalTimeline({ animate: "fade" });
      $("#vt6").verticalTimeline({ animate: "slide" });
    </script>
     

     <!-- for gallery fancybox -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js" integrity="sha512-j7/1CJweOskkQiS5RD9W8zhEG9D9vpgByNGxPIqkO5KrXrwyDAroM9aQ9w8J7oRqwxGyz429hPVk/zR6IOMtSA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
           $('[data-fancybox="gallery"]').fancybox({
            buttons: [
              "share",
              "download",
            //   "zoom",
              "slideShow",
              "fullscreen",
              "thumbs",
              "close"
             ],
           });
        </script>

    <?php wp_footer(); ?>
  </body>
</html>