<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="author"
      content="Jhapat Bahadur Saud, Honorable Minister of Social Development, झपट बहादुर साउँद, माननीय सामाजिक विकास मन्त्री"
    />
    <meta
      name="keywords"
      content="Jhapat Bahadur Saud, Honorable Minister of Social Development, झपट बहादुर साउँद, माननीय सामाजिक विकास मन्त्री"
    />
    <meta
      name="description"
      content="Jhapat Bahadur Saud, Honorable Minister of Social Development, झपट बहादुर साउँद, माननीय सामाजिक विकास मन्त्री"
    />

    <meta
      name="twitter:title"
      content="Jhapat Bahadur Saud, Honorable Minister of Social Development, झपट बहादुर साउँद, माननीय सामाजिक विकास मन्त्री"
    />
    <meta
      name="twitter:description"
      content="Jhapat Bahadur Saud, Honorable Minister of Social Development, झपट बहादुर साउँद, माननीय सामाजिक विकास मन्त्री"
    />
    <meta
      name="twitter:image"
      content="Jhapat Bahadur Saud, Honorable Minister of Social Development, झपट बहादुर साउँद, माननीय सामाजिक विकास मन्त्री"
    />
    <meta
      property="og:title"
      content="Jhapat Bahadur Saud, Honorable Minister of Social Development, झपट बहादुर साउँद, माननीय सामाजिक विकास मन्त्री"
    />
    <meta
      property="og:description"
      content="Jhapat Bahadur Saud, Honorable Minister of Social Development, झपट बहादुर साउँद, माननीय सामाजिक विकास मन्त्री"
    />
    <meta property="og:url" content="https://jhapatsaud.com" />
    <meta property="og:image" content="./jhapat_banner.jpg" />
    <title>Jhapat Bahadur Saud</title>

    <meta name="geo.region" content="NP" />
    <meta name="geo.placename" content="Nepal" />
    <meta name="geo.position" content="," />
    <meta name="rating" content="mature" />
    <meta name="twitter:card" content="summary" />
    <meta property="og:type" content="website" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta name="robots" content="index, follow" />
    <meta name="google-site-verification" content="" />

    <!-- bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- cdn for ion icons -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule=""
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"
    ></script>

    <!-- favicon -->
    <link
      rel="icon"
      href="./assets/img/logo/fav-icon.jpg"
      type="image/png"
      sizes="16x16"
    />
    
     <!-- Timeline -->
     <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css"
    />

     <?php wp_head();  ?>
  </head>

  <body>
    <section class="head" id="top">
      <div class="navbar">
        <div class="Leader_name pt-2">
          <h1><a href="<?php echo site_url(''); ?>">Jhapat Bahadur Saud</a></h1>
        </div>

        <div class="header_right">
          <div class="menu" id="menu">
            <ul id="menu_list">
              <!-- <li><a href="index.html" class="activeMenu big_text">ABOUT</a></li> -->
              <li id="nav_team">
                <a onclick="dropdown()" class="big_text">झपट बहादुर साउँद</a>
                <ul id="dropdown_menu">
                  <li><a href="<?php echo site_url('/about'); ?>" class="small_text">मेरो बारेमा</a></li>
                  <li><a href="<?php echo site_url('/dream'); ?>" class="small_text"> सपना</a></li>
                </ul>
              </li>        
              <li id="nav_team">
                <a onclick="dropdown()" class="big_text">मिडिया</a>
                <ul id="dropdown_menu">
                  <li><a href="<?php echo site_url('/news'); ?>" class="small_text">समाचार</a></li>
                  <li><a href="<?php echo site_url('/video-gallery'); ?>" class="small_text">भिडियो ग्यालरी </a></li>
                  <li><a href="<?php echo site_url('/photo-gallery'); ?>" class="small_text">फोटो ग्यालरी</a></li>
                </ul>
              </li>
  
              <li id="nav_team">
                <a onclick="dropdown()" class="big_text">जीवन रेखा</a>
                <ul id="dropdown_menu">
                  <li><a href="<?php echo site_url('/past-life'); ?>" class="small_text">प्रारम्भिक जीवन</a></li>
                  <li><a href="<?php echo site_url('/social'); ?>" class="small_text">सामाजिक</a></li>
                  <li><a href="<?php echo site_url('/political'); ?>" class="small_text">राजनीतिक</a></li>
                </ul>
              </li>
              <li id="nav_team">
                <a onclick="dropdown()" class="big_text">विविध विषय</a>
                <ul id="dropdown_menu">
                  <li><a href="<?php echo site_url('/blog'); ?>" class="small_text">ब्लग</a></li>
                  <li><a href="<?php echo site_url('/article'); ?>" class="small_text">लेख</a></li>
                </ul>
              </li>
            </ul>
          </div>
  
          <div class="menu_bar" onclick="openMenu()"  id="open_menubar">
            <ion-icon name="menu-outline"></ion-icon>
          </div>

          <div class="menu_bar" onclick="closeMenu()" id="close_menubar">
            <ion-icon name="close-outline"></ion-icon>
          </div>
  
          
  
          <div class="social_contact">
            <div class="facebook">
              <a href="https://www.facebook.com/jhapatsaudofficial/"
                ><i class="fa-brands fa-facebook-f"></i
              ></a>
            </div>
            <div class="twitter">
              <a href="https://twitter.com/jhapat_saud"
                ><i class="fa-brands fa-twitter"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section style="overflow: hidden">
      <div class="">
        <div class="row">
          <div class="banner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/banner/banner.jpg" alt="" />
          </div>
        </div>
      </div>
    </section>