<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
 <?php get_header(); ?>

 
 <div id="primary" class="content-area">
	 <main id="main" class="site-main" role="main">
	 	 <div class="container">
		 <?php // Start the loop.
   while (have_posts()):
       the_post();
       // Include the page content template.
       // get_template_part( 'template-parts/content', 'page' );
       ?>
			<article class="post-category gf post-<?php echo $post->ID; ?>">
	            <div class="row align-items-center">
	                <div class="col-md-6 order-sm-2 order-md-1 order-2">
	                    <div class="pe-3">
	                    <h3 class="mb-4"><?php the_title(); ?></h3>
	                    <p class="mb-4"><?php the_content(); ?></p>
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


   endwhile; ?>
 		</div>
	 </main><!-- .site-main -->
 
	 
 
 </div><!-- .content-area -->
 

 <?php get_footer(); ?>
