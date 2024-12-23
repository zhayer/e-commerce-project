<?php
/*
* Display Theme menus
 */
?>

<div class="innermenuboxupper">
    <div class="innermenubox align-self-center">
        <div class="toggle-nav mobile-menu">
            <button onclick="electronic_gadget_store_menu_open_nav()" class="responsivetoggle">
                <i class="fas fa-bars"></i>
                <span class="screen-reader-text"><?php esc_html_e('Open Button','electronic-gadget-store'); ?></span>
            </button>
        </div>
        <div id="mySidenav" class="nav sidenav">
            <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="electronic_gadget_store_menu_close_nav()">
                <i class="fas fa-times"></i>
                <span class="screen-reader-text"><?php esc_html_e('Close Button','electronic-gadget-store'); ?></span>
            </a>
            <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'electronic-gadget-store' ); ?>">
                <?php 
                wp_nav_menu( array(
                    'theme_location' => 'primary-menu',
                    'container_class' => 'main-menu clearfix',
                    'menu_class' => 'clearfix',
                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                    'fallback_cb' => 'wp_page_menu',
                ) );
                ?>
            </nav>
        </div>
    </div>
</div>