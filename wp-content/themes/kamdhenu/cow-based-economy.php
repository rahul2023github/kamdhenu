<?php
/*
 Template Name: cow based economy
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
     $intro_description = $post_fields["intro_description"] ?? " "; //  Indigenous cow based economy
     $milk_production_stats_title =
         $post_fields["milk_production_stats_title"] ?? " ";
     $milk_production_stats_img =
         $post_fields["milk_production_stats_img"] ?? " ";
     $indigenous_title = $post_fields["indigenous_title"] ?? " ";
     $indigenous_img = $post_fields["indigenous_img"] ?? " ";
 }
 ?>
<section>
  <div class="banner sub-page cow-based-banner">
    <img src="<?php echo $image[0]; ?>" alt="">
    <div class="content">
      <h2 class="text-white h1"><?php echo $banner_title; ?></h2>
    </div>
  </div>
</section>
<section class="intro">
  <div class="container">
    <article>
      <div class="row align-items-center gx-5">  
          <h2 class="sub-title"><?php echo $intro_title; ?></h2>
          <p><?php echo $intro_description; ?></p>
      </div>
    </article>
  </div>
</section>
<section class="events">
  <div class="container">
  <article>
      <div class="text-center event-header cow-event-header">
        <h2 class="sec-title"><?php echo $indigenous_title; ?></h2>
        <img src="<?php echo $indigenous_img; ?>"  alt="">
      </div>
    </article>
  </div>
</section>

<?php get_footer(); ?>  