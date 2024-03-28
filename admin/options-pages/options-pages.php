<?php


// Create Options Page
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{

    // Include Sub Pages
    require_once('subpages/footer.php');
    require_once('subpages/navigation.php');
    require_once('subpages/404.php');
    require_once('subpages/back-to-top.php');

    // Check function exists.
    if (function_exists('acf_add_options_page')) {

        // Add parent.
        $parent = acf_add_options_page(
            array(
                'page_title' => 'Theme Einstellungen',
                'menu_title' => 'Theme Einstellungen',
                'menu_slug' => 'theme-overview-settings',
                'capability' => 'edit_posts',
                'redirect' => false,
                'show_in_graphql' => true
            )
        );

        // Add sub page.
        $child = acf_add_options_sub_page($options_page_footer);
        $child = acf_add_options_sub_page($options_page_navigation);
        $child = acf_add_options_sub_page($options_page_404);
        $child = acf_add_options_sub_page($options_page_backToTop);
    }
}