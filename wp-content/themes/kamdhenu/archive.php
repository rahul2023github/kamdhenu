<?php
global $post, $wpdb;
get_header();
// echo "ok archive";
$category = get_queried_object();
$term_id = $category->term_id;
$term_name = $category->name;
?>
    <div class="archive-container container ">
        <div class="archive-post archive-id-<?php echo $term_id; ?> archive-name-<?php echo $term_name; ?> <?php echo $term_name; ?>">
 <?php
 // Start the loop.
 $args = [
     "post_type" => "cowbreeds",
     "posts_per_page" => -1, //show all posts
     "tax_query" => [
         [
             "taxonomy" => "cow_breeds_categories",
             "field" => "slug",
             "terms" => $term_name,
         ],
     ],
 ];

 $wp_query = new WP_Query($args);
 // echo "<pre>";
 // print_r($wp_query);
 // echo "</pre>";
 // exit;
 if ($wp_query->have_posts()):
     while ($wp_query->have_posts()):
         $wp_query->the_post(); ?>

        <article class="post-category archive-post-<?php echo $post->ID; ?>">
            <div class="row align-items-center">
                <div class="col-md-6 order-sm-2 order-md-1 order-2">
                    <div class="pe-3">
                    <h3 class="mb-4"><?php the_title(); ?></h3>
                    <p class="mb-4"><?php echo get_the_content(); ?></p>
                    </div>
                 </div>

        <?php if (has_post_thumbnail($post->ID)): ?>
          <?php $image = wp_get_attachment_image_src(
              get_post_thumbnail_id($post->ID),
              "single-post-thumbnail"
          ); ?>
             <div class="col-md-6 order-sm-1 order-md-2 order-1 archive-post-img">
                <img src="<?php echo $image[0]; ?>" alt="post img" class="round">
              </div>
        <?php endif; ?>
            </div>
        </article>

        <?php
     endwhile;
 else:
      ?>
    <section>
        <div class="error-404">
            <h2><?php echo "Posts not found"; ?></h2> 
        </div>
    </section>
<?php
 endif;
 wp_reset_postdata();
 ?>
     </div>
</div>
 
<?php get_footer(); ?>
