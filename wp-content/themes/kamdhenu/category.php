<?php
/**
 * The template for displaying Category pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress

 */

global $post, $wpdb; ?>
 <?php get_header(); ?>

 
 <div id="primary" class="content-area">
     <main id="main" class="site-main" role="main">
         <div class="container">
         <?php
         // Start the loop.
         while (have_posts()):

             the_post();

             // Include the page content template.
             get_template_part("template-parts/content", "page");
             ?>
            <article class="post-category post-<?php echo $post->ID; ?>">
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

             // End of the loop.


         endwhile;
         wp_reset_postdata();
         ?>
        </div>
     </main><!-- .site-main -->
 
     
 
 </div><!-- .content-area -->
 

 <?php get_footer(); ?>
