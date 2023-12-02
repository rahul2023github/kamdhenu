<?php
/*
 Template Name: Newsletter confirmation
 */

global $post, $wpdb;
get_header();
?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
			</header>

			<div class="page-wrapper">
				<div class="page-content">
				<section>
					<div class="banner error-404" style="background-image: url('<?php header_image(); ?>')">
						<div class="content text-white">
						<h2>Your subscription has been confirmed</h2>	
					        <button class="btn btn-outline-light">
					          <a href="<?php echo get_home_url(); ?>">Back to Home &nbsp; →</a>
					    </button>
						</div>
					</div>
				</section>
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>
