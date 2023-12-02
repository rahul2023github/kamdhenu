<?php
 /*
 Template Name: zebu-breeds
 */
?>
<?php 
global $post,$wp_query;
  if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<?php endif; ?>

 <?php get_header(); ?>
 <?php
// $parent_terms = get_terms( 'cow_breeds_categories' );
$taxonomy = 'cow_breeds_categories';
$terms = get_terms([
  'taxonomy' => $taxonomy,
  'hide_empty' => false,
  'parent' =>0,
  'order' => 'DESC',
]);
 ?>
 <?php
   $page_id = $post->ID;
   $post_fields = get_fields($page_id);

  if(!empty($post_fields)){
  
  // banner heading section 
    $banner_title = $post_fields['banner_title']?? ' ';
   $banner_title2 = $post_fields['banner_title2']?? ' ';
   $banner_title3 = $post_fields['banner_title3']?? ' ';

  //  Cow Breeds of India
  $cow_breed_of_india_title = $post_fields['cow_breed_of_india_title']?? ' ';
  $cow_breed_of_india_description = $post_fields['cow_breed_of_india_description']?? ' ';

  // cow breed gir
  $cow_breed_gir_title = $post_fields['cow_breed_gir_title'] ?? ' ';
  $cow_breed_gir_img = $post_fields['cow_breed_gir_img'] ?? ' ';
  $cow_breed_gir_highlight = $post_fields['cow_breed_gir_highlight'] ?? ' ';
  
  // cow breed sahiwal
  $cow_breed_sahiwal_img = $post_fields['cow_breed_sahiwal_img'] ?? ' ';
  $cow_breed_sahiwal_title = $post_fields['cow_breed_sahiwal_title'] ?? ' ';
  $cow_breed_sahiwal_highlight = $post_fields['cow_breed_sahiwal_highlight'] ?? ' ';

    // cow breed Red Sindhi
  $cow_breed_red_sindhi_img = $post_fields['cow_breed_red_sindhi_img'] ?? ' ';
  $cow_breed_red_sindhi_title = $post_fields['cow_breed_red_sindhi_title'] ?? ' ';
  $cow_breed_red_sindhi_highlight = $post_fields['cow_breed_red_sindhi_highlight'] ?? ' ';

   // Cow Breeds Tharparkar
  $cow_breed_tharparkar_img = $post_fields['cow_breed_tharparkar_img'] ?? ' ';
  $cow_breed_tharparkar_title = $post_fields['cow_breed_tharparkar_title'] ?? ' ';
  $cow_breed_tharparkar_highlight = $post_fields['cow_breed_tharparkar_highlight'] ?? ' ';

   // Cow Breeds Haryana
  $cow_breed_haryana_img = $post_fields['cow_breed_haryana_img'] ?? ' ';
  $cow_breed_haryana_title = $post_fields['cow_breed_haryana_title'] ?? ' ';
  $cow_breed_haryana_highlight = $post_fields['cow_breed_haryana_highlight'] ?? ' ';

    // Cow Breeds Kankrej
  $cow_breed_kankrej_img = $post_fields['cow_breed_kankrej_img'] ?? ' ';
  $cow_breed_kankrej_title = $post_fields['cow_breed_kankrej_title'] ?? ' ';
  $cow_breed_kankrej_highlight = $post_fields['cow_breed_kankrej_highlight'] ?? ' ';

  // Cow Breeds Dangi
  $cow_breed_dangi_img = $post_fields['cow_breed_dangi_img'] ?? ' ';
  $cow_breed_dangi_title = $post_fields['cow_breed_dangi_title'] ?? ' ';
  $cow_breed_dangi_highlight = $post_fields['cow_breed_dangi_highlight'] ?? ' ';

  // Cow Breeds Deoni
  $cow_breed_deoni_img = $post_fields['cow_breed_deoni_img'] ?? ' ';
  $cow_breed_deoni_title = $post_fields['cow_breed_deoni_title'] ?? ' ';
  $cow_breed_deoni_highlight = $post_fields['cow_breed_deoni_highlight'] ?? ' ';

  // Zebu Breeds gallery section
  $zebu_breeds_heading = $post_fields['zebu_breeds_heading'] ?? ' ';
  $zebu_breeds_description = $post_fields['zebu_breeds_description'] ?? ' ';

  // gallery heading section
  $zebu_gallery_heading_col1 = $post_fields['zebu_gallery_heading_col1'] ?? ' ';
  $zebu_gallery_heading_col2 = $post_fields['zebu_gallery_heading_col2'] ?? ' ';
  $zebu_gallery_heading_col3 = $post_fields['zebu_gallery_heading_col3'] ?? ' ';
  $zebu_gallery_heading_col4 = $post_fields['zebu_gallery_heading_col4'] ?? ' ';

    // gallery image section
  $zebu_gallery_img_col1 = $post_fields['zebu_gallery_img_col1'] ?? ' ';
  $zebu_gallery_img_col2 = $post_fields['zebu_gallery_img_col2'] ?? ' ';
  $zebu_gallery_img_col3 = $post_fields['zebu_gallery_img_col3'] ?? ' ';
  $zebu_gallery_img_col4 = $post_fields['zebu_gallery_img_col4'] ?? ' ';

  // Zebu Breeds Genetic Resources section
  $zebu_genetic_resources_title = $post_fields['zebu_genetic_resources_title'] ?? ' ';
  $zebu_genetic_resources_img = $post_fields['zebu_genetic_resources_img'] ?? ' ';

  }
  ?>

<section>
    <div class="banner sub-page">
        <img src="<?php echo $image[0]; ?>" alt="">
        <div class="content zebu-content">
            <h2 class="text-white "><?php echo $banner_title ?></h2>
        </div>
    </div>
</section>
<section class="events">
    <div class="container-fluid">
       <div class="container zebu_breeds_intro">
      		<div class="align-items-center event-header event-header-head">
      			<h2 class="sec-title"><?php echo $cow_breed_of_india_title ?></h2>
      			<p><?php echo $cow_breed_of_india_description ?></p>
      		</div>
      </div>

        <article class="breed-slider-section">
            <?php
                foreach ($terms as $termkey => $term){
				          $termID = $term->term_id;
                    // echo"<pre>";
                    //   print_r($termkey);
                    //   echo "</pre>";
                  ?>
                  <div class="slider-sec-<?php echo $termID ?>">
                  <div class="container">
                  <div class="text-center event-header breed-head-space">
                    <h4 class="sec-title"><?php echo $term->name; ?></h4>
                  </div>
                  <div class="slider-nav<?php echo $termID ?> events">
                    <?php
                    // $termchildren = get_term_children( $termID, $taxonomy);
                    $ordered_term_children = get_ordered_term_children($termID, $taxonomy);
                      foreach ( $ordered_term_children as $ordered_term) {
                    
                      $child_cat_id = $ordered_term->term_id;
                      // echo"<pre>";
                      // print_r($child_cat_id);
                      // echo "</pre>";
                      // exit;

                        $categories_image = get_field('categories_image','category_'.$child_cat_id);

                          $term = get_term_by( 'id', $child_cat_id, 'cow_breeds_categories', array('orderby' => 'name','order' => 'ASC'));
                          ?>
                            <div class="slider-nav-inner " slider-nav-id = "<?php echo $child_cat_id ?>">
                                <div class="card">
                                        <img src="<?php echo $categories_image ?>" class="card-img" alt="..." />
                                        <div class="card-img-overlay">
                                        <h5 class="card-title"><?php echo $term->name ?></h5>
                                        </div>
                                </div>
                            </div>

                        <?php                      
                        }
                    ?>
                </div>
      		<div class="slider-for<?php echo $termID?>">
                 
                  <?php
                    $args = array(
                      'post_type' => 'cowbreeds',
                      'posts_per_page' => -1, //show all posts
					            'order' => 'ASC',
                      'orderby' => 'name',
                      'tax_query' => array(
                        array(
                          'taxonomy' => 'cow_breeds_categories',
                          'field' => 'term_id',
                          'terms' => $termID ,
                        )
                      )

                    );


                  $wp_query = new WP_Query( $args );

                  if ( $wp_query->have_posts() ):
                  while ( $wp_query->have_posts() ) : $wp_query->the_post();

                    if($termkey === 0){
                      $dots = "true";
                    }else{
                      $dots = "false";
                    }


                   
          
                  $category_post_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'large');
                  $category_post_term = wp_get_post_terms( $post->ID, 'cow_breeds_categories');
                  $post_category_id = $category_post_term[0]->term_taxonomy_id;

                  ?>
                   <div class="slider-inner " slider-for-id = "<?php echo $post_category_id; ?>">
                    <article class="slider-article">
                      <div class="row align-items-center">
                        <div class="col-md-6">
                          <?php if (has_post_thumbnail( $post->ID ) ): ?>
                            <?php $category_post_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>
                                <img src="<?php echo $category_post_image[0]; ?>" alt="category_post_image" class="round">
                          <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                          <div class="ps-md-3">
                            <h3 class="mb-4"><?php the_title(); ?></h3>
                            <p><?php the_content(); ?></p>
                          </div>
                        </div>
                      </div>
                    </article>
                    </div>
                   <?php
                    // End of the loop.
                    endwhile;
                    endif; 
                    wp_reset_postdata();
                    ?>
				            
                </div>

                <script>
                  jQuery(document).ready(function () {
                    var activedots = '<?php echo $dots ?>';
                    var activedot = JSON.parse(activedots);
                    // console.log(activedot)

                        jQuery(".slider-for<?php echo $termID?>").slick({
                          slidesToShow: 1,
                          slidesToScroll: 1,
                          arrows: false,
                          adaptiveHeight: true,
                          fade: true,
                          asNavFor: ".slider-nav<?php echo $termID?>",
                        });
                        jQuery(".slider-nav<?php echo $termID?>").slick({
                          slidesToShow: 4,
                          slidesToScroll: 1,
                          asNavFor: ".slider-for<?php echo $termID?>",
                          dots: activedot,
                          focusOnSelect: true,

                          responsive: [
                            {
                              breakpoint: 991,
                              settings: {
                                slidesToShow: 3,
                              },
                            },
                            {
                              breakpoint: 767,
                              settings: {
                                arrows: false,
                                centerMode: true,
                                centerPadding: "40px",
                                slidesToShow: 2,
                              },
                            },
                            {
                              breakpoint: 575,
                              settings: {
                                arrows: false,
                                centerMode: true,
                                centerPadding: "40px",
                                slidesToShow: 1,
                              },
                            },
                          ],
                        });
                    });
                </script>
                </div>
              </div>
                  <?php
                }
            ?>

        </article>
    </div>
    <div class="container">
    <article>
      <div class="text-center event-header">
        <h2 class="sec-title mt-3"><?php echo $zebu_genetic_resources_title ?></h2>
        <img src="<?php echo $zebu_genetic_resources_img ?>" alt="" />
      </div>
    </article>
  </div>
</section>


<?php get_footer(); ?>  