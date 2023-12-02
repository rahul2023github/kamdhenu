<footer>

<section class="section-info">
 <div class="row g-0">
  <div class="col-md-12 col-lg-4 time p-3">
   <div class="info-box-event">
    <div class="info-box"><?php dynamic_sidebar("info_event"); ?></div>
   </div>
  </div>
  <div class="col-md-12 col-lg-4 location p-3">
   <div class="info-box-event">
    <div class="info-box"><?php dynamic_sidebar("info_location"); ?></div>
   </div>
  </div>
  <div class="col-md-12 col-lg-4 queries p-3">
   <div class="info-box-event">
    <div class="info-box"><?php dynamic_sidebar("info_queries"); ?></div>
   </div>
  </div>
 </div>
</section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 text-center market">
                <div class="f-logo">
                <a href="<?php echo get_home_url(); ?>"> <?php dynamic_sidebar(
    "footer_site_logo"
); ?></a>
                </div>
                <h6>
                <?php dynamic_sidebar("footer_heading_text"); ?>
                </h6>
            </div>
            <div class="col-lg-8">
                <div class="block row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <?php dynamic_sidebar("footer_quick_links_menu"); ?>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 margin-top">
                    <?php dynamic_sidebar("footer_quick_links2"); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
        <?php dynamic_sidebar("footer_copyright"); ?>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/lib/slickSlider/slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/layout.js"></script>
</body>

</html>