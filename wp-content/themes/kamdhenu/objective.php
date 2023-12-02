<?php
 /*
 Template Name: Objectives & Programmes
 */
?>
<?php 
global $post;
  if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<?php endif; ?>
 <?php get_header(); ?>
  <?php
   $page_id = $post->ID;
   $post_fields = get_fields($page_id);

  if(!empty($post_fields)){
  
    //  $page_banner = $post_fields['page_banner']?? ' ';

    $banner_title = $post_fields['banner_title']?? ' ';
    $banner_title2 = $post_fields['banner_title2']?? ' ';
    $banner_title3 = $post_fields['banner_title3']?? ' ';


    $intro_title = $post_fields['intro_title']?? ' ';
    $intro_description = $post_fields['intro_description']?? ' ';

    // objective images
    $objectives_programmes1_img = $post_fields['objectives_programmes1_img']?? ' ';
    $objectives_programmes2_img = $post_fields['objectives_programmes2_img']?? ' ';
    $objectives_programmes3_img = $post_fields['objectives_programmes3_img']?? ' ';
    $objectives_programmes4_img = $post_fields['objectives_programmes4_img']?? ' ';
    $objectives_programmes5_img = $post_fields['objectives_programmes5_img']?? ' ';
    $objectives_programmes6_img = $post_fields['objective6_image']?? ' ';


    // objective heading1
    $paragraph_heading1 = $post_fields['paragraph_heading1']?? ' ';
    $paragraph_heading2 = $post_fields['paragraph_heading2']?? ' ';
    $paragraph_heading3 = $post_fields['paragraph_heading3']?? ' ';

    // objective heading2
    $objective2_paragraph_heading1 = $post_fields['objective2_paragraph_heading1']?? ' ';
    $objective2_paragraph_heading2 = $post_fields['objective2_paragraph_heading2']?? ' ';

    // objective heading3
    $objective3_paragraph_heading1 = $post_fields['objective3_paragraph_heading1']?? ' ';
    $objective3_paragraph_heading2 = $post_fields['objective3_paragraph_heading2']?? ' ';
    $objective3_paragraph_heading3 = $post_fields['objective3_paragraph_heading3']?? ' ';

    // objective heading4
    $objective4_paragraph_heading1 = $post_fields['objective4_paragraph_heading1']?? ' ';
    $objective4_paragraph_heading2 = $post_fields['objective4_paragraph_heading2']?? ' ';
    $objective4_paragraph_heading3 = $post_fields['objective4_paragraph_heading3']?? ' ';


    // objective heading5
    $objective5_paragraph_heading1 = $post_fields['objective5_paragraph_heading1']?? ' ';
    $objective5_paragraph_heading2 = $post_fields['objective5_paragraph_heading2']?? ' ';
    $objective5_paragraph_heading3 = $post_fields['objective5_paragraph_heading3']?? ' ';

    // objective heading6
    $objective6_paragraph_heading1 = $post_fields['objective6_paragraph_heading1']?? ' ';
    $objective6_paragraph_heading2 = $post_fields['objective6_paragraph_heading2']?? ' ';
    $objective6_paragraph_heading3 = $post_fields['objective6_paragraph_heading3']?? ' ';
    $objective6_paragraph_heading4 = $post_fields['objective6_paragraph_heading4']?? ' ';
    $objective6_paragraph_heading5 = $post_fields['objective6_paragraph_heading5']?? ' ';


    // objective decscription1
    $paragraph_description1 = $post_fields['paragraph_description1']?? ' ';
    $paragraph_description2 = $post_fields['paragraph_description2']?? ' ';
    $paragraph_description3 = $post_fields['paragraph_description3']?? ' ';

    // objective decscription2
    $objective2_paragraph_description1 = $post_fields['objective2_paragraph_description1']?? ' ';
    $objective2_paragraph_description2 = $post_fields['objective2_paragraph_description2']?? ' ';

    // objective decscription3
    $objective3_paragraph_description1 = $post_fields['objective3_paragraph_description1']?? ' ';
    $objective3_paragraph_description2 = $post_fields['objective3_paragraph_description2']?? ' ';
    $objective3_paragraph_description3 = $post_fields['objective3_paragraph_description3']?? ' ';

    // objective decscription4
    $objective4_paragraph_description1 = $post_fields['objective4_paragraph_description1']?? ' ';
    $objective4_paragraph_description2 = $post_fields['objective4_paragraph_description2']?? ' ';
    $objective4_paragraph_description3 = $post_fields['objective4_paragraph_description3']?? ' ';

    // objective decscription5
    $objective5_paragraph_description1 = $post_fields['objective5_paragraph_description1']?? ' ';
    $objective5_paragraph_description2 = $post_fields['objective5_paragraph_description2']?? ' ';
    $objective5_paragraph_description3 = $post_fields['objective5_paragraph_description3']?? ' ';

    // objective decscription6
    $objective6_paragraph_description1 = $post_fields['objective6_paragraph_description1']?? ' ';
    $objective6_paragraph_description2 = $post_fields['objective6_paragraph_description2']?? ' ';
    $objective6_paragraph_description3 = $post_fields['objective6_paragraph_description3']?? ' ';
    $objective6_paragraph_description4 = $post_fields['objective6_paragraph_description4']?? ' ';
    $objective6_paragraph_description5 = $post_fields['objective6_paragraph_description5']?? ' ';


    // upcoming event section
    $upcoming_main_title = $post_fields['upcoming_main_title']?? ' ';
    $upcoming_events_date = $post_fields['upcoming_events_date']?? ' ';
    $upcoming_events_time = $post_fields['upcoming_events_time']?? ' ';
    $upcoming_events_detail_title = $post_fields['upcoming_events_detail_title']?? ' ';
    $upcoming_events_detail_description = $post_fields['upcoming_events_detail_description']?? ' ';
    $upcoming_events_btn_text = $post_fields['upcoming_events_btn_text']?? ' ';

 }
// echo "<pre>";
// print_r($post_fields);
// echo "</pre>";
 ?>
 <section>
  <div class="banner sub-page objective">
    <img src="<?php echo $image[0]; ?>" alt="">
    <div class="custom-container">
      <div class="content mobile-content">
        <h2 class="h1"><span><?php echo $banner_title ?> </span><?php echo $banner_title2?></h2>
        <p><?php echo $banner_title3 ?></p>
      </div>
  </div>
  </div>
</section>

<section class="intro">
  <div class="container">
    <article>
      <!-- <h3 class="sub-title"><?php //echo $intro_title ?></h3>
      <p><?php //echo $intro_description ?></p> -->
      <div class="row mb-4 mb-sm-5 mb-md-5 mb-lg-5 align-items-center objectives-programmes1 ">
        <div class="col-md-6 order-sm-2 order-md-1 order-2">
          <div class="pe-3">
            <h5><?php echo $paragraph_heading1 ?></h5>
            <p><?php echo $paragraph_description1 ?></p>
            <h5><?php echo $paragraph_heading2 ?></h5>
            <p><?php echo $paragraph_description2 ?></p>
            <h5><?php echo $paragraph_heading3 ?></h5>
            <p><?php echo $paragraph_description3 ?></p>
          </div>
        </div>
        <div class="col-md-6 order-sm-1 order-md-2 order-1">
          <img src="<?php echo $objectives_programmes1_img ?>" class="round" alt="" />
        </div>
      </div>
      <div class="row mb-4 mb-sm-5 mb-md-5 mb-lg-5 mt-4 mt-sm-5 mt-md-5 mt-lg-5 align-items-center objectives-programmes2 ">
        <div class="col-md-6">
          <img src="<?php echo $objectives_programmes2_img ?>" class="round" alt="" />
        </div>
        <div class="col-md-6">
          <div class="ps-md-3">
            <h5><?php echo $objective2_paragraph_heading1 ?></h5>
            <p><?php echo $objective2_paragraph_description1 ?></p>
            <h5><?php echo $objective2_paragraph_heading2 ?></h5>
            <p><?php echo $objective2_paragraph_description2 ?></p>
          </div>
        </div>
  
      </div>
      <div class="row mb-4 mb-sm-5 mb-md-5 mb-lg-5 mt-4 mt-sm-5 mt-md-5 mt-lg-5 align-items-center objectives-programmes3 ">
        <div class="col-md-6 order-sm-2 order-md-1 order-2">
          <div class="pe-3">
            <h5><?php echo $objective3_paragraph_heading1 ?></h5>
            <p><?php echo $objective3_paragraph_description1 ?></p>
            <h5><?php echo $objective3_paragraph_heading2 ?></h5>
            <p><?php echo $objective3_paragraph_description2 ?></p>
            <h5><?php echo $objective3_paragraph_heading3 ?></h5>
            <p><?php echo $objective3_paragraph_description3 ?></p>
          </div>
        </div>
        <div class="col-md-6 order-sm-1 order-md-2 order-1">
          <img src="<?php echo $objectives_programmes3_img ?>" class="round" alt="" />
        </div>
      </div>
      <div class="row mb-4 mb-sm-5 mb-md-5 mb-lg-5 mt-4 mt-sm-5 mt-md-5 mt-lg-5 align-items-center objectives-programmes4 ">
        <div class="col-md-6">
          <img src="<?php echo $objectives_programmes4_img ?>" class="round" alt="" />
        </div>
        <div class="col-md-6">
          <div class="ps-md-3">
            <h5><?php echo $objective4_paragraph_heading1 ?></h5>
            <p><?php echo $objective4_paragraph_description1 ?></p>
            <h5><?php echo $objective4_paragraph_heading2 ?></h5>
            <p><?php echo $objective4_paragraph_description2 ?></p>
            <h5><?php echo $objective4_paragraph_heading3 ?></h5>
            <p><?php echo $objective4_paragraph_description3 ?></p>
          </div>
        </div>
      </div>
      <div class="row mb-4 mb-sm-5 mb-md-5 mb-lg-5 mt-4 mt-sm-5 mt-md-5 mt-lg-5 align-items-center objectives-programmes5 ">
        <div class="col-md-6 order-sm-2 order-md-1 order-2">      
            <h5><?php echo $objective5_paragraph_heading1 ?></h5>
            <p><?php echo $objective5_paragraph_description1 ?></p>
            <h5><?php echo $objective5_paragraph_heading2 ?></h5>
            <p><?php echo $objective5_paragraph_description2 ?></p>
            <h5><?php echo $objective5_paragraph_heading3 ?></h5>
            <p><?php echo $objective5_paragraph_description3 ?></p>
          </div>
       
        <div class="col-md-6 order-sm-1 order-md-2 order-1">
          <div class="ps-md-3">
          <img src="<?php echo $objectives_programmes5_img ?>" class="round" alt="" />
        </div>
        </div>
      </div>

    
    <div class="row mb-5 mt-5 align-items-center objectives-programmes6 ">
        <div class="col-md-6">
          <img src="<?php echo $objectives_programmes6_img ?>" class="round" alt="" />
        </div>
        <div class="col-md-6">
          <div class="ps-md-3">
              <h5><?php echo $objective6_paragraph_heading1 ?></h5>
              <p><?php echo $objective6_paragraph_description1?></p>
              <h5><?php echo $objective6_paragraph_heading2 ?></h5>
              <p><?php echo $objective6_paragraph_description2?></p>
              <h5><?php echo $objective6_paragraph_heading3 ?></h5>
              <p><?php echo $objective6_paragraph_description3?></p>
              <h5><?php echo $objective6_paragraph_heading4 ?></h5>
              <p><?php echo $objective6_paragraph_description4?></p>
              <h5><?php echo $objective6_paragraph_heading5 ?></h5>
              <p><?php echo $objective6_paragraph_description5?></p>
          </div>
        </div>
      </div>
    </article>
  </div>
  
</section>
<section class="intro bg-white">
  <div class="container">
    <article>
      <div class="text-center section-header">
        <h2 class="sec-title"><?php echo $upcoming_main_title ?></h2>
      </div>
      <div class="card programmes">
        <div class="card-header">
          <div class="card-wrapper">
            <div class="date-box">
              <p><?php echo $upcoming_events_date ?></p>
              <p><span><?php echo $upcoming_events_time ?></span></p>
            </div>
            <div class="content">
              <h5><?php echo $upcoming_events_detail_title ?></h5>
              <p><?php echo $upcoming_events_detail_description ?></p>
            </div>
          </div>
          <div class="right-box">
            <button type="button" class="btn btn-outline-secondary">
              <?php echo $upcoming_events_btn_text ?>
            </button>
          </div>
        </div>
      </div>
    </article>
  </div>
</section>
<?php get_footer(); ?>  
