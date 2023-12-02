<?php
/*
 Template Name: contactus
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
     $banner_title3 = $post_fields["banner_title3"] ?? " "; // our partner section
     $our_partners_heading = $post_fields["our_partners_heading"] ?? " ";
     $our_partner1_image = $post_fields["our_partner1_image"] ?? " ";
     $our_partner2_image = $post_fields["our_partner2_image"] ?? " ";
     $our_partner3_image = $post_fields["our_partner3_image"] ?? " ";
     $our_partner4_image = $post_fields["our_partner4_image"] ?? " ";
     $our_partner5_image = $post_fields["our_partner5_image"] ?? " ";
     $our_partner6_image = $post_fields["our_partner6_image"] ?? " ";
     $contact_us_form_logo = $post_fields["contact_us_form_logo"] ?? " ";
 }
 ?>


<section class="intro">
  <div class="container">
    <article>
      <div class="card">
        <div class="card-header p-3 p-md-5 text-center">
          <h3 class="sub-title"><?php echo $banner_title; ?></h3>
          <p><?php echo $banner_title2; ?></p>
        </div>
        <div class="card-body p-5">
          <div class="row mb-5 mt-5 align-items-center">
            <div class="col-md-5">
              <div class="ps-md-3">
                <img src="<?php echo $contact_us_form_logo ?>" class="contact_us_form_logo" alt="" />
              </div>
            </div>
            <div class="col-md-7" id="contact-form" >
              <div class="form-wrap">
                <?php echo do_shortcode(
                    '[contact-form-7 id="17e45b5" title="contact form"]'
                ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
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