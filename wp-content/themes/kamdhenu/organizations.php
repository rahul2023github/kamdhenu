<?php
/*
 Template Name: organizations
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
     // banner heading section
     $banner_title = $post_fields["banner_title"] ?? " ";
     $banner_title2 = $post_fields["banner_title2"] ?? " ";
     $banner_title3 = $post_fields["banner_title3"] ?? " ";
     $intro_title = $post_fields["intro_title"] ?? " ";
     $intro_description = $post_fields["intro_description"] ?? " "; // Primary organisations section
     $primary_partner_heading = $post_fields["primary_partner_heading"] ?? " ";
     $primary_partner1_image = $post_fields["primary_partner1_image"] ?? " ";
     $primary_partner2_image = $post_fields["primary_partner2_image"] ?? " ";
     $primary_partner3_image = $post_fields["primary_partner3_image"] ?? " ";
     $primary_partner4_image = $post_fields["primary_partner4_image"] ?? " ";
     $primary_partner5_image = $post_fields["primary_partner5_image"] ?? " ";
     $primary_partner6_image = $post_fields["primary_partner6_image"] ?? " "; // Domestic organisations section
     $domestic_organisations_heading =
         $post_fields["domestic_organisations_heading"] ?? " ";
     $domestic_organisations1_image =
         $post_fields["domestic_organisations1_image"] ?? " ";
     $domestic_organisations2_image =
         $post_fields["domestic_organisations2_image"] ?? " ";
     $domestic_organisations3_image =
         $post_fields["domestic_organisations3_image"] ?? " ";
     $domestic_organisations4_image =
         $post_fields["domestic_organisations4_image"] ?? " ";
     $domestic_organisations5_image =
         $post_fields["domestic_organisations5_image"] ?? " ";
     $domestic_organisations6_image =
         $post_fields["domestic_organisations6_image"] ?? " "; // International organisations section
     $international_organisations_heading =
         $post_fields["international_organisations_heading"] ?? " ";
     $international_organisations1_image =
         $post_fields["international_organisations1_image"] ?? " ";
     $international_organisations2_image =
         $post_fields["international_organisations2_image"] ?? " ";
     $international_organisations3_image =
         $post_fields["international_organisations3_image"] ?? " ";
     $international_organisations4_image =
         $post_fields["international_organisations4_image"] ?? " ";
     $international_organisations5_image =
         $post_fields["international_organisations5_image"] ?? " ";
     $international_organisations6_image =
         $post_fields["international_organisations6_image"] ?? " "; //newsletter section
     $newsletter_heading = $post_fields["newsletter_heading"] ?? " ";
     $newsletter_description = $post_fields["newsletter_description"] ?? " ";
 }
 ?>
  
<section>
  <div class="banner sub-page">
    <img src="<?php echo $image[0]; ?>" alt="">
    <div class="content">
      <h2><span><?php echo $banner_title; ?> </span> <?php echo $banner_title2; ?></h2>
    </div>
  </div>
</section>
<section class="affliate">
  <div class="container-fluid">
    <article class="partners">
        <div class="container">
          <div class="text-center section-header">
            <h2 class="sec-title"><?php echo $primary_partner_heading; ?></h2>
          </div>
          <div class="items partners-slick">
            <div class="partners-inner-slide"><img src="<?php echo $primary_partner1_image; ?>" alt="" /></div>
            <div class="partners-inner-slide"><img src="<?php echo $primary_partner2_image; ?>" alt="" /></div>
            <div class="partners-inner-slide"><img src="<?php echo $primary_partner3_image; ?>" alt="" /></div>
            <div class="partners-inner-slide"><img src="<?php echo $primary_partner4_image; ?>" alt="" /></div>
            <div class="partners-inner-slide"><img src="<?php echo $primary_partner5_image; ?>" alt="" /></div>
            <div class="partners-inner-slide"><img src="<?php echo $primary_partner6_image; ?>" alt="" /></div>
          </div>
        </div>
    </article>

        <article class="partners" style="display:none;">
        <div class="container">
          <div class="text-center section-header">
            <h2 class="sec-title"><?php echo $international_organisations_heading; ?></h2>
          </div>
          <div class="items partners-slick">
            <div class="partners-inner-slide"><img src="<?php echo $international_organisations1_image; ?>" alt="" /></div>
            <div class="partners-inner-slide"><img src="<?php echo $international_organisations2_image; ?>" alt="" /></div>
            <div class="partners-inner-slide"><img src="<?php echo $international_organisations3_image; ?>" alt="" /></div>
            <div class="partners-inner-slide"><img src="<?php echo $international_organisations4_image; ?>" alt="" /></div>
            <div class="partners-inner-slide"><img src="<?php echo $international_organisations5_image; ?>" alt="" /></div>
            <div class="partners-inner-slide"><img src="<?php echo $international_organisations6_image; ?>" alt="" /></div>
          </div>
        </div>
        </article>

        <article class="partners" style="display:none;">
        <div class="container">
          <div class="text-center section-header">
            <h2 class="sec-title"><?php echo $domestic_organisations_heading; ?></h2>
          </div>
          <div class="items partners-slick">
            <div class="partners-inner-slide"><img src="<?php echo $domestic_organisations1_image; ?>" alt="" /></div>
            <div class="partners-inner-slide"><img src="<?php echo $domestic_organisations2_image; ?>" alt="" /></div>
            <div class="partners-inner-slide"><img src="<?php echo $domestic_organisations3_image; ?>" alt="" /></div>
            <div class="partners-inner-slide"><img src="<?php echo $domestic_organisations4_image; ?>" alt="" /></div>
            <div class="partners-inner-slide"><img src="<?php echo $domestic_organisations5_image; ?>" alt="" /></div>
            <div class="partners-inner-slide"><img src="<?php echo $domestic_organisations6_image; ?>" alt="" /></div>
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


<?php get_footer(); ?>  