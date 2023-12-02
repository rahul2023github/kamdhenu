<?php
/*
 Template Name: home
 */
?>
<?php
global $post;
if (has_post_thumbnail($post->ID)): ?>
  <?php $image = wp_get_attachment_image_src(
      get_post_thumbnail_id($post->ID),
      "single-post-thumbnail"
  ); ?>
<?php endif;
?>

 <?php get_header(); ?>
 <?php
 $page_id = $post->ID;
 $post_fields = get_fields($page_id);
 if (!empty($post_fields)) {
     //  $page_banner = $post_fields['page_banner']?? ' ';
     $home_banner_slider1 = $post_fields["home_banner_slider1"] ?? " ";
     $banner1_title1 = $post_fields["banner1_title1"] ?? " ";
     $banner1_title2 = $post_fields["banner1_title2"] ?? " ";
     $banner1_title3 = $post_fields["banner1_title3"] ?? " "; //banner 2
     $home_banner_slider2 = $post_fields["home_banner_slider2"] ?? " ";
     $banner2_title1 = $post_fields["banner2_title1"] ?? " ";
     $banner2_title2 = $post_fields["banner2_title2"] ?? " ";

     $banner2_title3 = $post_fields["banner2_title3"] ?? " "; //objective section field
     $objectives_title = $post_fields["objectives_title"] ?? " ";
     $objectives_sub_title = $post_fields["objectives_sub_title"] ?? " ";
     $objective_button_text = $post_fields["objective_button_text"] ?? " ";
     $objective_button_url = $post_fields["objective_button_url"] ?? " ";
     $objectives_sub_title_description =
         $post_fields["objectives_sub_title_description"];
     $term = get_queried_object();
     $objective_option = get_field("objective_option_one", $term);
     $termnames = wp_list_pluck($objective_option, "name") ?? " "; // Zebu Breeds gallery section
     $zebu_breeds_heading = $post_fields["zebu_breeds_heading"] ?? " ";
     $zebu_breeds_description = $post_fields["zebu_breeds_description"] ?? " ";
     $zebu_bull_img = $post_fields["zebu_bull_img"] ?? " ";
     $zebu_our_logo_txt = $post_fields["zebu_our_logo_txt"] ?? " "; //newsletter section
     $newsletter_heading = $post_fields["newsletter_heading"] ?? " ";
     $newsletter_description = $post_fields["newsletter_description"] ?? " "; // our partner section
     $our_partners_heading = $post_fields["our_partners_heading"] ?? " ";
     $our_partner1_image = $post_fields["our_partner1_image"] ?? " ";
     $our_partner2_image = $post_fields["our_partner2_image"] ?? " ";
     $our_partner3_image = $post_fields["our_partner3_image"] ?? " ";
     $our_partner4_image = $post_fields["our_partner4_image"] ?? " ";
     $our_partner5_image = $post_fields["our_partner5_image"] ?? " ";
     $our_partner6_image = $post_fields["our_partner6_image"] ?? " "; // header topline section // echo "<pre>"; //  print_r($post_fields ); //  echo "</pre>";
 }
 ?>

<section class="home-banner">
  <div class="banner ">
    <img src="<?php echo $home_banner_slider1; ?>" alt="">
    <div class="content text-white">
        <h2>
        <span class="s1"><?php echo $banner1_title1; ?></span>
        <span class="s2"><?php echo $banner1_title2; ?></span>
         </h2>
         <h2 class="bg-banner">
        <span class="s3"><?php echo $banner1_title3; ?></span>
        </h2>
    </div>
  </div>
  <div class="banner ">
    <img src="<?php echo $home_banner_slider2; ?>" alt="">
    <div class="content slide2 text-white">
      <h2>
        <span class="s1"><?php echo $banner2_title1; ?></span>
        <span class="s2"><?php echo $banner2_title2; ?></span>
        </h2>
        <h2 class="bg-banner">
        <span class="s3"><?php echo $banner2_title3; ?></span>
      </h2>
    </div>
  </div>
</section>
<section class="intro">
  <div class="container">
    <article>
      <div class="row align-items-center">
        <!-- <div class="col">
              <img class="round" src="assets/images/banner2.png" alt="" />
            </div> -->
        <div class="col-md-12">
          <h5 class="tinny-line"><?php echo $objectives_title; ?></h5>
          <h2 class="sub-title"><?php echo $objectives_sub_title; ?></h2>
          <p><?php echo $objectives_sub_title_description; ?> </p>
      	</div>
  	</div>
    </article>
  </div>
</section>
<section class="events">
  <div class="container-fluid">
    <article>
      <div class="text-center event-header">
        <h2 class="sec-title"><?php echo $zebu_breeds_heading; ?></h2>
		  <div class="mb-5 mt-3">
          <img src="<?php echo $zebu_bull_img; ?>" alt="">
        </div>
        <p class="desc"><?php echo $zebu_breeds_description; ?> </p>
      </div>
    </article>
  </div>
</section>

<section class="subscribe">
  <div class="container smaller">
    <h2 class="sec-title"><?php echo $newsletter_heading; ?></h2>
    <p><?php echo $newsletter_description; ?></p>
    <div class="row">
    <?php echo do_shortcode("[news_letter]"); ?>
    </div>
  </div>
</section>

<article class="partners">
  <div class="container">
    <div class="text-center section-header">
      <h2 class="sec-title"><?php echo $our_partners_heading; ?></h2>
    </div>
    <div class="items partners-slick">
      <div class="partners-inner-slide"><img src="<?php echo $our_partner1_image; ?>" alt="" /></div>
      <div class="partners-inner-slide"><img src="<?php echo $our_partner2_image; ?>" alt="" /></div>
      <div class="partners-inner-slide"><img src="<?php echo $our_partner3_image; ?>" alt="" /></div>
      <div class="partners-inner-slide"><img src="<?php echo $our_partner4_image; ?>" alt="" /></div>
      <div class="partners-inner-slide"><img src="<?php echo $our_partner5_image; ?>" alt="" /></div>
      <div class="partners-inner-slide"><img src="<?php echo $our_partner6_image; ?>" alt="" /></div>
    </div>
  </div>
</article>

<?php get_footer(); ?>  