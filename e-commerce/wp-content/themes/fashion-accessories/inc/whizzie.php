<?php 
if (isset($_GET['import-demo']) && $_GET['import-demo'] == true) {

    // Function to install and activate plugins
    function fashion_accessories_import_demo_content() {
        // Define the plugins you want to install and activate
        $plugins = array(
            array(
                'slug' => 'woocommerce',
                'file' => 'woocommerce/woocommerce.php',
                'url'  => 'https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip'
            ),
             array(
                'slug' => 'yith-woocommerce-wishlist',
                'file' => 'yith-woocommerce-wishlist/yith-woocommerce-wishlist.php',
                'url'  => 'https://downloads.wordpress.org/plugin/yith-woocommerce-wishlist.latest-stable.zip'
            ),
        );

        // Include required files for plugin installation
        include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
        include_once(ABSPATH . 'wp-admin/includes/file.php');
        include_once(ABSPATH . 'wp-admin/includes/misc.php');
        include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

        // Loop through each plugin
        foreach ($plugins as $plugin) {
            $plugin_file = WP_PLUGIN_DIR . '/' . $plugin['file'];

            // Check if the plugin is installed
            if (!file_exists($plugin_file)) {
                // If the plugin is not installed, download and install it
                $upgrader = new Plugin_Upgrader();
                $result = $upgrader->install($plugin['url']);

                // Check for installation errors
                if (is_wp_error($result)) {
                    error_log('Plugin installation failed: ' . $plugin['slug'] . ' - ' . $result->get_error_message());
                    echo 'Error installing plugin: ' . esc_html($plugin['slug']) . ' - ' . esc_html($result->get_error_message());
                    continue;
                }
            }

            // If the plugin exists but is not active, activate it
            if (file_exists($plugin_file) && !is_plugin_active($plugin['file'])) {
                $result = activate_plugin($plugin['file']);

                // Check for activation errors
                if (is_wp_error($result)) {
                    error_log('Plugin activation failed: ' . $plugin['slug'] . ' - ' . $result->get_error_message());
                    echo 'Error activating plugin: ' . esc_html($plugin['slug']) . ' - ' . esc_html($result->get_error_message());
                }
            }
        }
    }

    // Call the import function
    fashion_accessories_import_demo_content();

    // ------- Create Nav Menu --------
$fashion_accessories_menuname = 'Main Menus';
$fashion_accessories_bpmenulocation = 'primary-menu';
$fashion_accessories_menu_exists = wp_get_nav_menu_object($fashion_accessories_menuname);

if (!$fashion_accessories_menu_exists) {
    $fashion_accessories_menu_id = wp_create_nav_menu($fashion_accessories_menuname);

    // Create Home Page
    $fashion_accessories_home_title = 'Home';
    $fashion_accessories_home = array(
        'post_type' => 'page',
        'post_title' => $fashion_accessories_home_title,
        'post_content' => '',
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'home'
    );
    $fashion_accessories_home_id = wp_insert_post($fashion_accessories_home);

    // Assign Home Page Template
    add_post_meta($fashion_accessories_home_id, '_wp_page_template', 'page-template/front-page.php');

    // Update options to set Home Page as the front page
    update_option('page_on_front', $fashion_accessories_home_id);
    update_option('show_on_front', 'page');

    // Add Home Page to Menu
    wp_update_nav_menu_item($fashion_accessories_menu_id, 0, array(
        'menu-item-title' => __('Home', 'fashion-accessories'),
        'menu-item-classes' => 'home',
        'menu-item-url' => home_url('/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $fashion_accessories_home_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create About Us Page with Dummy Content
    $fashion_accessories_about_title = 'About Us';
    $fashion_accessories_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $fashion_accessories_about = array(
        'post_type' => 'page',
        'post_title' => $fashion_accessories_about_title,
        'post_content' => $fashion_accessories_about_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'about-us'
    );
    $fashion_accessories_about_id = wp_insert_post($fashion_accessories_about);

    // Add About Us Page to Menu
    wp_update_nav_menu_item($fashion_accessories_menu_id, 0, array(
        'menu-item-title' => __('About Us', 'fashion-accessories'),
        'menu-item-classes' => 'about-us',
        'menu-item-url' => home_url('/about-us/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $fashion_accessories_about_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Services Page with Dummy Content
    $fashion_accessories_services_title = 'Services';
    $fashion_accessories_services_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $fashion_accessories_services = array(
        'post_type' => 'page',
        'post_title' => $fashion_accessories_services_title,
        'post_content' => $fashion_accessories_services_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'services'
    );
    $fashion_accessories_services_id = wp_insert_post($fashion_accessories_services);

    // Add Services Page to Menu
    wp_update_nav_menu_item($fashion_accessories_menu_id, 0, array(
        'menu-item-title' => __('Services', 'fashion-accessories'),
        'menu-item-classes' => 'services',
        'menu-item-url' => home_url('/services/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $fashion_accessories_services_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Pages Page with Dummy Content
    $fashion_accessories_pages_title = 'Pages';
    $fashion_accessories_pages_content = '<h2>Our Pages</h2>
    <p>Explore all the pages we have on our website. Find information about our services, company, and more.</p>';
    $fashion_accessories_pages = array(
        'post_type' => 'page',
        'post_title' => $fashion_accessories_pages_title,
        'post_content' => $fashion_accessories_pages_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'pages'
    );
    $fashion_accessories_pages_id = wp_insert_post($fashion_accessories_pages);

    // Add Pages Page to Menu
    wp_update_nav_menu_item($fashion_accessories_menu_id, 0, array(
        'menu-item-title' => __('Pages', 'fashion-accessories'),
        'menu-item-classes' => 'pages',
        'menu-item-url' => home_url('/pages/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $fashion_accessories_pages_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Contact Page with Dummy Content
    $fashion_accessories_contact_title = 'Contact';
    $fashion_accessories_contact_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $fashion_accessories_contact = array(
        'post_type' => 'page',
        'post_title' => $fashion_accessories_contact_title,
        'post_content' => $fashion_accessories_contact_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'contact'
    );
    $fashion_accessories_contact_id = wp_insert_post($fashion_accessories_contact);

    // Add Contact Page to Menu
    wp_update_nav_menu_item($fashion_accessories_menu_id, 0, array(
        'menu-item-title' => __('Contact', 'fashion-accessories'),
        'menu-item-classes' => 'contact',
        'menu-item-url' => home_url('/contact/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $fashion_accessories_contact_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Set the menu location if it's not already set
    if (!has_nav_menu($fashion_accessories_bpmenulocation)) {
        $locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
        if (empty($locations)) {
            $locations = array();
        }
        $locations[$fashion_accessories_bpmenulocation] = $fashion_accessories_menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }
}

        //---Header--//
        set_theme_mod('fashion_accessories_discount_text_top', 'Free Shipping On Orders $55 And Over');
        set_theme_mod('fashion_accessories_call', '1234 5678 910');

        // Banner Section
        set_theme_mod('fashion_accessories_about_enable', 'true');

        set_theme_mod('fashion_accessories_slider_short_heading', 'Embrace the Artistry of Our Jewelry, Designed for You');

        set_theme_mod('fashion_accessories_banner_slider_first',  get_template_directory_uri().'/assets/images/banner1.png' );

        set_theme_mod('fashion_accessories_banner_slider_sec',  get_template_directory_uri().'/assets/images/banner2.png' );

        set_theme_mod('fashion_accessories_banner_slider_third',  get_template_directory_uri().'/assets/images/banner3.png' );

        // Create About page and set the featured image
        $fashion_accessories_abt_title = 'CRAFTED WITH LOVE, WORN WITH PRIDE';
        $fashion_accessories_abt_content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type';

        $my_post = array(
            'post_title'    => wp_strip_all_tags($fashion_accessories_abt_title),
            'post_content'  => $fashion_accessories_abt_content,
            'post_status'   => 'publish',
            'post_type'     => 'page',
        );

        // Insert the post into the database
        $post_id = wp_insert_post($my_post);

        if ($post_id) {
            // Set the theme mod for the About page
            set_theme_mod('fashion_accessories_slider_page', $post_id);

            // Sideload image and set as the featured image
            $image_url = get_template_directory_uri() . '/assets/images/slider-img.png';
            $image_id = media_sideload_image($image_url, $post_id, null, 'id');

            if (!is_wp_error($image_id)) {
                set_post_thumbnail($post_id, $image_id);
            }
        }

// Shop Section
set_theme_mod('fashion_accessories_projetcs_main_heading', 'Shop By Categories');
set_theme_mod('fashion_accessories_services_number', '8');

set_theme_mod('fashion_accessories_product_section_btn_text1', 'View All');
set_theme_mod('fashion_accessories_product_section_btn_link1', '#');

$fashion_accessories_tab_text_array = array(
    "Shop Necklace", "Shop Earrings", "Shop Finger Rings", 
    "Shop Bracelets", "Shop Nose Rings", "Shop Bangles", 
    "Shop Silver", "Shop Gold"
);
$fashion_accessories_category_names = array(
    "productcat1", "productcat2", "productcat3", 
    "productcat4", "productcat5", "productcat6", 
    "productcat7", "productcat8"
);
$fashion_accessories_title_array = array_fill(0, 8, array(
    "Product Title Here", "Product Title Here", "Product Title Here"
));

for ($fashion_accessories_tab_index = 1; $fashion_accessories_tab_index <= 8; $fashion_accessories_tab_index++) {
    // Set theme mod for each tab text
    $theme_mod_key = 'fashion_accessories_projetcs_text' . $fashion_accessories_tab_index;
    $theme_mod_value = $fashion_accessories_tab_text_array[$fashion_accessories_tab_index - 1];
    set_theme_mod($theme_mod_key, $theme_mod_value);

    // Set the category for this tab
    $current_category = $fashion_accessories_category_names[$fashion_accessories_tab_index - 1];
    set_theme_mod('fashion_accessories_projetcs_category' . $fashion_accessories_tab_index, $current_category);

    // Create or retrieve the post category term ID
    $fashion_accessories_term = term_exists($current_category, 'product_cat');
    
    // If the term doesn't exist, create it
    if (!$fashion_accessories_term) {
        $fashion_accessories_term = wp_insert_term($current_category, 'product_cat');
    }

    if (is_wp_error($fashion_accessories_term)) {
        error_log('Error creating category: ' . $fashion_accessories_term->get_error_message());
        continue; // Skip to the next iteration if category creation fails
    }

    $term_id = is_array($fashion_accessories_term) ? $fashion_accessories_term['term_id'] : $fashion_accessories_term;

    for ($fashion_accessories_i = 0; $fashion_accessories_i < 3; $fashion_accessories_i++) {
        // Create post content (product title)
        $fashion_accessories_title = $fashion_accessories_title_array[$fashion_accessories_tab_index - 1][$fashion_accessories_i];

        // Create post object
        $fashion_accessories_my_post = array(
            'post_title'    => wp_strip_all_tags($fashion_accessories_title),
            'post_status'   => 'publish',
            'post_type'     => 'product', // Ensure this is set to 'product' post type
        );

        // Insert the post into the database
        $fashion_accessories_post_id = wp_insert_post($fashion_accessories_my_post);

        if (is_wp_error($fashion_accessories_post_id)) {
            error_log('Error creating post: ' . $fashion_accessories_post_id->get_error_message());
            continue; // Skip to the next post if creation fails
        }

        // Assign the category to the post
        wp_set_object_terms($fashion_accessories_post_id, $term_id, 'product_cat');

        // Add product meta (price, etc.)
        update_post_meta($fashion_accessories_post_id, '_regular_price', '120'); // Regular price
        update_post_meta($fashion_accessories_post_id, '_sale_price', '80'); // Sale price
        update_post_meta($fashion_accessories_post_id, '_price', '80'); // Final price shown

        // Handle the featured image using media_sideload_image
        $fashion_accessories_image_url = get_template_directory_uri() . '/assets/images/product-img' . ($fashion_accessories_i + 1) . '.png';
        $fashion_accessories_image_id = media_sideload_image($fashion_accessories_image_url, $fashion_accessories_post_id, null, 'id');

        if (is_wp_error($fashion_accessories_image_id)) {
            error_log('Error downloading image: ' . $fashion_accessories_image_id->get_error_message());
            continue; // Skip to the next post if image download fails
        }

        // Assign the featured image to the post
        set_post_thumbnail($fashion_accessories_post_id, $fashion_accessories_image_id);
    }
}




    }

?>