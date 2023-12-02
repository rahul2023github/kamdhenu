<!DOCTYPE html>
<html <?php echo language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo("charset"); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/css/style.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/lib/slickSlider/slick.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/lib/slickSlider/slick-theme.css" />
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.js"></script>

  <?php wp_head(); ?>
</head>
<?php
global $post, $wpdb;
$page_id = $post->ID ?? " ";
$post_title = $post->post_name ?? " ";
$cats = get_the_category($page_id);

// print_r($cats);
?>
<body <?php echo body_class(); ?> >
  <div class="overlay"></div>
  <header>
    <div class="container">
      <div class="top-header">
        <div class="site-logo">
          <div class="logo">
          <a href="<?php echo get_home_url(); ?>"> <?php dynamic_sidebar(
    "custom_site_logo"
); ?></a>
          </div>
          <div class="menu-button">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
          </div>
        </div>
        <nav>
          <div class="top-line">
            <div class="call">
              <!-- Call us: <a href="callto:9468847078">+91 9810270253</a> -->
              <?php dynamic_sidebar("topline_call_text"); ?>
            </div>
            <ul class="top-links">
              <?php echo do_shortcode("[topline_menu_short]"); ?>
            </ul>
            <ul class="social">
            <?php dynamic_sidebar("topline_widgets"); ?>
            </ul>
          </div>
          <div class="sidebar">
            <?php wp_nav_menu([
                "menu" => "mobile-header-menu",
                "theme_location" => "mobile-header-menu",
                "menu_class" => "nav ",
            ]); ?>  
            <div class="close-button"><svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/><path d="M0 0h24v24H0z" fill="none"/></svg></div>
          </div>
          <div class= "menu-section">
          <?php wp_nav_menu([
              "menu" => "header menu",
              "theme_location" => "primary",

              "container" => "div",
              "container_class" => "navigation-bar",
              "menu_class" => "nav navbar-nav navbar-right",
          ]); ?>
          </div>
        </nav>
      </div>
      </div>
  </header>