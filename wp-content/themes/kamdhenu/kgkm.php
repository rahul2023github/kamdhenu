<?php
/*
 Template Name: kgkm
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
 $post_fields = get_fields($page_id); //  echo "<pre>"; //  print_r($post_fields); //  echo "</pre>";
 if (!empty($post_fields)) {
     // banner heading section
     $banner_title = $post_fields["banner_title"] ?? " ";
     $banner_title2 = $post_fields["banner_title2"] ?? " ";
     $banner_title3 = $post_fields["banner_title3"] ?? " "; // pre Event highlight section field
     $event_logo = $post_fields["event_logo"] ?? " ";
     $event_section_title = $post_fields["event_section_title"] ?? " ";
     $event_section_description =
         $post_fields["event_section_description"] ?? " "; // Event highlight section
     $event_highlight_main_title =
         $post_fields["event_highlight_main_title"] ?? " ";
     $zebu_breeds_img1 = $post_fields["zebu_breeds_img1"] ?? " ";
     $zebu_breeds_title1 = $post_fields["zebu_breeds_title1"] ?? " ";
     $zebu_breeds_title2 = $post_fields["zebu_breeds_title2"] ?? " ";
     $zebu_breeds_description1 =
         $post_fields["zebu_breeds_description1"] ?? " ";
     $zebu_breeds_description2 =
         $post_fields["zebu_breeds_description2"] ?? " "; // Milk and related products
     $milk_product_main_img = $post_fields["milk_product_main_img"] ?? " ";
     $milk_product_img = $post_fields["milk_product_img"] ?? " ";
     $milk_product_title1 = $post_fields["milk_product_title1"] ?? " ";
     $milk_product_description1 =
         $post_fields["milk_product_description1"] ?? " "; // Nutrition of zebu Cattle
     $nutrition_zebu_cattle_img =
         $post_fields["nutrition_zebu_cattle_img"] ?? " ";
     $nutrition_zebu_cattle_title1 =
         $post_fields["nutrition_zebu_cattle_title1"] ?? " ";
     $nutrition_zebu_cattle_title2 =
         $post_fields["nutrition_zebu_cattle_title2"] ?? " ";
     $nutrition_zebu_cattle_description1 =
         $post_fields["nutrition_zebu_cattle_description1"] ?? " ";
     $nutrition_zebu_cattle_description2 =
         $post_fields["nutrition_zebu_cattle_description2"] ?? " "; // Traditional handicrafts
     $agriculture_img = $post_fields["agriculture_img"] ?? " ";
     $agriculture_title1 = $post_fields["agriculture_title1"] ?? " ";
     $agriculture_title2 = $post_fields["agriculture_title2"] ?? " ";
     $agriculture_description1 =
         $post_fields["agriculture_description1"] ?? " ";
     $agriculture_description2 =
         $post_fields["agriculture_description2"] ?? " "; // Sustainable international
     $international_img = $post_fields["international_img"] ?? " ";
     $international_title1 = $post_fields["international_title1"] ?? " ";
     $international_description1 =
         $post_fields["international_description1"] ?? " ";
     $international_title2 = $post_fields["international_title2"] ?? " ";
     $international_description2 =
         $post_fields["international_description2"] ?? " ";
     $international_title3 = $post_fields["international_title3"] ?? " ";
     $international_description3 =
         $post_fields["international_description3"] ?? " "; // 	kgkm without img  event highlights
     $featuring_government_image =
         $post_fields["featuring_government_image"] ?? " ";
     $highlight_featuring_title =
         $post_fields["highlight_featuring_title"] ?? " ";
     $highlight_featuring_description =
         $post_fields["highlight_featuring_description"] ?? " ";
     $highlight_traditional_title =
         $post_fields["highlight_traditional_title"] ?? " ";
     $highlight_traditional_description =
         $post_fields["highlight_traditional_description"] ?? " ";
     $highlight_stakeholders_title =
         $post_fields["highlight_stakeholders_title"] ?? " ";
     $highlight_stakeholders_description =
         $post_fields["highlight_stakeholders_description"] ?? " ";
     $highlight_inspiration_title1 =
         $post_fields["highlight_inspiration_title1"] ?? " ";
     $highlight_inspiration_description1 =
         $post_fields["highlight_inspiration_description1"] ?? " ";
     $highlight_active_support_title =
         $post_fields["highlight_active_support_title"] ?? " ";
     $highlight_active_support_description =
         $post_fields["highlight_active_support_description"] ?? " "; //newsletter section
     $newsletter_heading = $post_fields["newsletter_heading"] ?? " ";
     $newsletter_description = $post_fields["newsletter_description"] ?? " "; // our partner section
     $our_partners_heading = $post_fields["our_partners_heading"] ?? " ";
     $our_partner1_image = $post_fields["our_partner1_image"] ?? " ";
     $our_partner2_image = $post_fields["our_partner2_image"] ?? " ";
     $our_partner3_image = $post_fields["our_partner3_image"] ?? " ";
     $our_partner4_image = $post_fields["our_partner4_image"] ?? " ";
     $our_partner5_image = $post_fields["our_partner5_image"] ?? " ";
     $our_partner6_image = $post_fields["our_partner6_image"] ?? " ";
 }
 ?>

<section>
  <div class="banner ">
    <img src="<?php echo $image[0]; ?>" alt="">
    <div class="content slide2 text-white">
      <h2>
        <span class="s1"><?php echo $banner_title; ?></span>
        <span class="s2"><?php echo $banner_title2; ?></span>
      </h2>
      <h2 class="bg-banner"><span class="s3"> <?php echo $banner_title3; ?></span></h2>
    </div>
  </div>
</section>

<section class="events">
  <div class="container">
    <article>
      <div class="text-center event-header">
        <div class="event-logo">
         
          <img src="<?php echo $event_logo; ?>" alt="" />
        </div>
        <h2 class="sec-title"><?php echo $event_section_title; ?></h2>
        <p class="desc"><?php echo $event_section_description; ?></p>
      </div>
    </article>
    <article>
      <div class="text-center event-header">
        <h2 class="sec-title"><?php echo $event_highlight_main_title; ?></h2>
      </div>

      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6">
          <img src="<?php echo $zebu_breeds_img1; ?>" class="" alt="..." />
        </div>
        <div class="col-lg-6 col-md-6">
			<div class="ps-md-3">
            <h4 class="mb-4 mt-4"><?php echo $zebu_breeds_title1; ?></h4>
            <p><?php echo $zebu_breeds_description1; ?></p>
            <h4 class="mb-4 mt-4"><?php echo $zebu_breeds_title2; ?></h4>
            <p><?php echo $zebu_breeds_description2; ?></p>
          </div>
        </div>
      </div>
    </article>
    <article>
      <div class="row align-items-center">
        <div class="col-md-6 order-sm-2 order-md-1 order-2">
          <div class="pe-3">
			<h4 class="mb-4 "><?php echo $milk_product_title1; ?></h4>
            <p><?php echo $milk_product_description1; ?></p>
            <img src="<?php echo $milk_product_img; ?>" class="" alt="..." />
          </div>
        </div>
        <div class="col-md-6 order-sm-1 order-md-2 order-1">
          <img src="<?php echo $milk_product_main_img; ?>" class="round" alt="..." />
        </div>
      </div>
    </article>
  </div>
  <div class="bg-grey py-2 py-sm-5 py-md-5 py-lg-5">
    <div class="container">
      <article>
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6">
            <img src="<?php echo $nutrition_zebu_cattle_img; ?>" class="round" alt="..." />
          </div>
          <div class="col-lg-6 col-md-6">
			<div class="ps-md-3">
            <h4 class="mb-4"><?php echo $nutrition_zebu_cattle_title1; ?></h4>
            <p><?php echo $nutrition_zebu_cattle_description1; ?></p>
            <h4 class="mb-4"><?php echo $nutrition_zebu_cattle_title2; ?></h4>
            <p><?php echo $nutrition_zebu_cattle_description2; ?></p>
          </div>
          </div>
        </div>
      </article>
      <article>
        <div class="row align-items-center">
          <div class="col-md-6 order-sm-2 order-md-1 order-2">
            <div class="pe-3">
            <h4 class="mb-4"><?php echo $agriculture_title1; ?></h4>
            <p><?php echo $agriculture_description1; ?></p>
            <h4 class="mb-4"><?php echo $agriculture_title2; ?></h4>
            <p><?php echo $agriculture_description2; ?></p>
            </div>
          </div>
          <div class="col-md-6 order-sm-1 order-md-2 order-1">
            <img src="<?php echo $agriculture_img; ?>" class="round" alt="..." />
          </div>
        </div>
      </article>
    </div>
  </div>
  <div class="container">
    <article>
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6">
          <img src="<?php echo $international_img; ?>" class="round" alt="..." />
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="ps-md-3">
             <h4 class="mb-4"><?php echo $international_title1; ?></h4>
            <p><?php echo $international_description1; ?></p>
            <h4 class="mb-4"><?php echo $international_title2; ?></h4>
            <p><?php echo $international_description2; ?></p>
			<h4 class="mb-4"><?php echo $international_title3; ?></h4>
            <p><?php echo $international_description3; ?></p>
          </div>
        </div>
      </div>
    </article>
	  <article>
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 order-sm-2 order-md-1 order-2">
          <h4 class="mb-4"><?php echo $highlight_featuring_title; ?></h4>
          <p><?php echo $highlight_featuring_description; ?> </p>
          <h4 class="mb-4"><?php echo $highlight_traditional_title; ?></h4>
          <p><?php echo $highlight_traditional_description; ?></p>
          <h4 class="mb-4"><?php echo $highlight_stakeholders_title; ?></h4>
          <p><?php echo $highlight_stakeholders_description; ?></p>
          <h4 class="mb-4"><?php echo $highlight_inspiration_title1; ?> </h4>
          <p><?php echo $highlight_inspiration_description1; ?></p>
          <h4 class="mb-4"><?php echo $highlight_active_support_title; ?></h4>
          <p><?php echo $highlight_active_support_description; ?></p>
        </div>
        <div class="col-lg-6 col-md-6 order-sm-1 order-md-2 order-1">
          <div class="ps-md-3">
            <img src="<?php echo $featuring_government_image; ?>" class="round" alt="...">
          </div>
        </div>
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