<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 */

// if ( ! defined( 'ABSPATH' ) ) {
// 	exit; // Exit if accessed directly.
// }

function mytheme_enqueue_style()
{
    wp_enqueue_style("style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "mytheme_enqueue_style");

add_theme_support("menus");
if (function_exists("register_nav_menus")) {
    register_nav_menus([
        "header-menu" => "Header Menu",
        "footer-menu" => "Footer Menu",
        "topline-menu" => "Top Line Menu",
        "mobile-header-menu" => "Mobile Header Menu",
    ]);
}
function my_nav_menu_submenu_css_class($classes)
{
    $classes[] = "nav-links-dropdown";
    return $classes;
}
add_filter("nav_menu_submenu_css_class", "my_nav_menu_submenu_css_class");

function myplugin_settings()
{
    // Add tag metabox to page
    register_taxonomy_for_object_type("post_tag", "page");
    // Add category metabox to page
    register_taxonomy_for_object_type("category", "page");
}
// Add to the admin_init hook of your theme functions.php file
add_action("init", "myplugin_settings");

add_theme_support("post-thumbnails", ["post", "page", "cowbreeds"]);

// add topline menu
function topline_menu()
{
    wp_nav_menu([
        "menu" => "top line menu",
        "theme_location" => "topline-menu",
        "menu_class" => "topline-menu nav navbar-nav",
    ]);
}
add_shortcode("topline_menu_short", "topline_menu");

//add widgets on theme
function custom_widgets_init()
{
    register_sidebar([
        "name" => "Header Social Icon",
        "id" => "topline_widgets",
        "before_widget" => "<li>",
        "after_widget" => "</li>",
        "before_title" => '<h2 class="topline_title">',
        "after_title" => "</h2>",
    ]);
    register_sidebar([
        "name" => "Header Top Line call ",
        "id" => "topline_call_text",
        "before_widget" => '<div class="topline_call">',
        "after_widget" => "</div>",
        "before_title" => '<h6 class="topline_call-sec">',
        "after_title" => "</h6>",
    ]);
    register_sidebar([
        "name" => "Add site logo",
        "id" => "custom_site_logo",
        'before_widget' => '<div class="custom_site_logo">',
        'after_widget'  => '</div>',
    ]);
    register_sidebar([
        "name" => "footer logo",
        "id" => "footer_site_logo",
        'before_widget' => '<div class="custom_site_footer_logo">',
        'after_widget'  => '</div>',
    ]);
    register_sidebar([
        "name" => "Add footer heading text",
        "id" => "footer_heading_text",
        "before_widget" => '<h6 class="footer-title">',
        "after_widget" => "</h6>",
    ]);
    register_sidebar([
        "name" => "footer quick links menu",
        "id" => "footer_quick_links_menu",
        "before_widget" => '<div class="quick_links_menu">',
        "after_widget" => "</div>",
    ]);
    register_sidebar([
        "name" => "footer quick links2 menu",
        "id" => "footer_quick_links2",
        "before_widget" => '<div class="quick_links_menu2">',
        "after_widget" => "</div>",
    ]);
    register_sidebar([
        "name" => "footer copyright text",
        "id" => "footer_copyright",
        "before_widget" => '<div class="copyright_title">',
        "after_widget" => "</div>",
    ]);
    register_sidebar([
        "name" => "footer info bar event",
        "id" => "info_event",
    ]);
    register_sidebar([
        "name" => "footer info bar location",
        "id" => "info_location",
    ]);
    register_sidebar([
        "name" => "footer info bar queries",
        "id" => "info_queries",
    ]);
    register_sidebar([
        "name" => "our partners",
        "id" => "our_partner",
    ]);
}
add_action("widgets_init", "custom_widgets_init");

// custom post type
function cow_breeds_register()
{
    $labels = [
        "name" => _x("Cow breeds post", "post type general name"),
        "singular_name" => _x("Cow Breeds Item", "post type singular name"),
        "add_new" => _x("Add New", "cow breeds "),
        "add_new_item" => __("Add New Cow Breeds "),
        "edit_item" => __("Edit Cow Breeds "),
        "new_item" => __("New Cow Breeds"),
        "all_item" => __("All Cow Breeds post"),
        "view_item" => __("View Cow Breeds "),
        "search_items" => __("Search Cow Breeds "),
        "not_found" => __("Nothing found"),
        "not_found_in_trash" => __("Nothing found in Trash"),
        "parent_item_colon" => "",
    ];
    $args = [
        "labels" => $labels,
        "can_export" => true,
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "query_var" => true,
        "rewrite" => true,
        "has_archive" => true,
        "capability_type" => "post",
        "hierarchical" => false,
        "menu_position" => 8,
        "menu_icon" =>
            "data:image/svg+xml;base64," .
            base64_encode('<svg version="1.0" xmlns="http://www.w3.org/2000/svg"
 width="66.000000pt" height="66.000000pt" viewBox="0 0 66.000000 66.000000"
 preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,66.000000) scale(0.100000,-0.100000)"
fill="#000000" stroke="none">
<path d="M523 532 l-42 -44 -93 6 c-59 5 -103 4 -121 -3 -46 -18 -105 1 -145
46 l-33 38 6 -30 c11 -51 39 -89 73 -100 25 -7 32 -15 32 -34 0 -22 -1 -23
-18 -8 -29 26 -69 38 -97 27 -34 -13 -31 -36 9 -76 25 -25 43 -34 68 -34 l35
0 27 -87 c14 -49 26 -93 26 -99 0 -17 57 -54 83 -54 24 0 77 38 77 55 0 6 12
49 26 98 l27 87 35 0 c25 0 43 9 68 34 40 40 43 63 9 76 -28 11 -68 -1 -97
-27 -17 -15 -18 -14 -18 10 0 20 7 28 34 37 26 8 39 22 56 57 31 66 21 75 -27
25z m12 -32 c-16 -31 -58 -55 -82 -46 -23 9 -14 23 17 30 17 3 40 16 53 29 29
30 32 26 12 -13z m-339 -20 c27 0 33 -17 9 -26 -27 -11 -60 4 -78 35 -25 42
-21 46 14 17 17 -14 41 -26 55 -26z m161 -52 c10 -23 -12 -108 -28 -108 -14 0
-40 46 -35 61 2 8 7 26 10 42 8 33 39 37 53 5z m-195 -48 l33 -29 -37 -1 c-29
0 -41 6 -58 30 l-21 30 25 0 c14 0 40 -13 58 -30z m398 0 c-17 -24 -29 -30
-58 -30 l-37 1 33 29 c18 17 44 30 58 30 l25 0 -21 -30z m-316 -2 c11 -15 14
-34 10 -59 -4 -20 -1 -53 6 -73 7 -23 8 -41 2 -52 -13 -24 -52 94 -52 158 0
52 10 60 34 26z m206 -26 c0 -64 -39 -182 -52 -158 -6 11 -5 29 2 52 7 20 10
53 6 73 -4 25 -1 44 10 59 24 34 34 26 34 -26z m-74 -184 c-3 -13 -6 -26 -6
-30 0 -5 -18 -8 -40 -8 -22 0 -40 3 -40 8 0 4 -3 17 -6 30 -6 21 -3 22 46 22
49 0 52 -1 46 -22z m-23 -70 c-17 -8 -29 -8 -45 0 -20 9 -18 11 22 11 40 0 42
-2 23 -11z"/>
<path d="M220 358 c0 -18 18 -34 28 -24 3 4 -2 14 -11 23 -16 16 -17 16 -17 1z"/>
<path d="M421 356 c-8 -9 -11 -19 -7 -23 9 -9 29 13 24 27 -2 8 -8 7 -17 -4z"/>
<path d="M296 167 c3 -10 9 -15 12 -12 3 3 0 11 -7 18 -10 9 -11 8 -5 -6z"/>
<path d="M355 169 c-4 -6 -5 -12 -2 -15 2 -3 7 2 10 11 7 17 1 20 -8 4z"/>
</g>
</svg>'),
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "supports" => [
            "title",
            "editor",
            "excerpt",
            "author",
            "thumbnail",
            "custom-fields",
            "revisions",
        ],
        // 'taxonomies'      => array('category', 'post_tag')
    ];
    register_post_type("Cow Breeds", $args);
}
add_action("init", "cow_breeds_register");

// Add texonomi custom post type
function cow_breeds_taxonomies()
{
    $labels = [
        "name" => _x("Categories", "taxonomy general name"),
        "singular_name" => _x("Category", "taxonomy singular name"),
        "search_items" => __("Search Categories"),
        "all_items" => __("All Categories"),
        "parent_item" => __("Parent Category"),
        "parent_item_colon" => __("Parent Category:"),
        "edit_item" => __("Edit Category"),
        "update_item" => __("Update Category"),
        "add_new_item" => __("Add New Category"),
        "new_item_name" => __("New Category Name"),
        "menu_name" => __("Categories"),
    ];

    $args = [
        "hierarchical" => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
        "labels" => $labels,
        "show_ui" => true,
        "show_admin_column" => true,
        "query_var" => true,
        "rewrite" => ["slug" => "categories"],
        "supports" => ["thumbnail"],
    ];

    register_taxonomy("cow_breeds_categories", ["cowbreeds"], $args);
    // register_taxonomy_for_object_type('category', 'page');
}
add_action("init", "cow_breeds_taxonomies", 0);

//  validations of contact form
add_filter("wpcf7_validate_text*", "custom_text_validation", 10, 2);

// text validation
function custom_text_validation($result, $tag)
{
    if ("your-name" === $tag->name && empty($_POST["your-name"])) {
        $result = new WPCF7_Validation();
        $result->invalidate($tag, __("Please enter your name."));
    } elseif (!empty($_POST["your-name"])) {
        $pre = "/^[^\p{N}][\p{L}]*/i";

        if (!preg_match($pre, $_POST["your-name"], $pre)) {
            $result->invalidate($tag, "Please enter valid name!");
        }
    }

    if (
        "your-organization" === $tag->name &&
        empty($_POST["your-organization"])
    ) {
        // $result = new WPCF7_Validation();
        $result->invalidate($tag, __("Please enter your organization."));
    } elseif (!empty($_POST["your-organization"])) {
        $re = "/^[^\p{N}][\p{L}]*/i";

        if (!preg_match($re, $_POST["your-organization"], $re)) {
            $result->invalidate($tag, "Please enter valid organization name!");
        }
    }
    return $result;
}

// textarea validation
function custom_textarea_validation($result, $tag)
{
    if ("your-message" === $tag->name && empty($_POST["your-message"])) {
        $result->invalidate($tag, __("Please enter your message."));
    }
    return $result;
}
add_filter("wpcf7_validate_textarea*", "custom_textarea_validation", 12, 2);

//  email validation
function custom_email_validation($result, $tag)
{
    if ("your-email" == $tag->name && empty($_POST["your-email"])) {
        $your_email = isset($_POST["your-email"])
            ? trim($_POST["your-email"])
            : "";
        $result->invalidate($tag, __("Please enter your email"));
    } elseif (!empty($_POST["your-email"])) {
        $value = $_POST["your-email"];
        $pattern =
            "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
        if (!preg_match($pattern, $value)) {
            //new regex statement
            $result->invalidate($tag, "Please enter vaild Email");
        }
    }
    return $result;
}
add_filter("wpcf7_validate_email*", "custom_email_validation", 9, 2);

// for texomomy order by name
function get_ordered_term_children($term_id, $taxonomy_name)
{
    $term_children = get_term_children($term_id, $taxonomy_name);
    $ordered_term_children = [];
    foreach ($term_children as $child) {
        $term = get_term_by("id", $child, $taxonomy_name);
        $ordered_term_children[$term->name] = $term;
    }

    ksort($ordered_term_children);
    return $ordered_term_children;
}

function get_the_title_tag()
{
    add_theme_support("title-tag");
}
add_action("after_setup_theme", "get_the_title_tag");

// default_banner
$args = [
    "default-image" => "/wp-content/uploads/2023/08/ghee.jpeg",
    "uploads" => true,
];

add_theme_support("custom-header", $args);

// newsletter subscription
add_shortcode("news_letter", "newsletter_function");
function newsletter_function()
{
    ?>
    <div class="tnp tnp-subscription">
    <form method="post" action="https://kamdhenugaukrishimahotsav.com/?na=s">
    <input type="hidden" name="nlang" value="">
    <div class="newslatter-main">
      <div class="tnp-field tnp-field-email"><label for="tnp-1"></label><input class="tnp-email" type="email" name="ne" id="tnp-1" value="" placeholder="Email" required ></div>
      <div class="tnp-field tnp-field-button"><input class="tnp-submit" type="submit" value="Subscribe Now" ></div>
    </div>
    </form>
    </div>
  <?php
}
