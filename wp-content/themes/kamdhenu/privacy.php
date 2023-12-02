<?php
/*
 Template Name: privacy page 
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
     $banner_title = $post_fields["banner_title"] ?? " ";
     $banner_title2 = $post_fields["banner_title2"] ?? " ";
     $banner_title3 = $post_fields["banner_title3"] ?? " ";
     $intro_title = $post_fields["intro_title"] ?? " ";
     $intro_description = $post_fields["intro_description"] ?? " ";
 }
 ?>
<section>
  <div class="banner sub-page" >
  <img src="<?php echo $image[0]; ?>" alt="">
    <div class="content">
      <h2><span><?php echo $banner_title; ?> </span> </h2>
      <h4><?php echo $banner_title2; ?></h4>
    </div>
  </div>
</section>
<section class="intro bg-white">
  <div class="container">
    <article>
      <h3 class="sub-title"><?php the_title(); ?></h3>
      <p>
     <?php the_content(); ?>
      </p>


    </article>
  </div>
</section>

<?php get_footer(); ?>  