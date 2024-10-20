<?php
/**
 * DefaultMag About Page
 * @package Default Mag
 *
 */
if (!class_exists('DefaultMag_About_page')):
    class DefaultMag_About_page
    {
        function __construct()
        {
            add_action('admin_menu', array($this, 'default_mag_backend_menu'), 999);
        }
        // Add Backend Menu
        function default_mag_backend_menu()
        {
            add_theme_page(esc_html__('Default Mag', 'default-mag'), esc_html__('Default Mag', 'default-mag'), 'activate_plugins', 'default-mag-about', array($this, 'default_mag_main_page'), 1);
        }
        // Settings Form
        function default_mag_main_page()
        {
            require get_template_directory() . '/classes/about-render.php';
        }
    }
    new DefaultMag_About_page();
endif;