<?php
/**
* About Rencer Content.
*
* @package DefaultMag
*/


$base_url = home_url();

$default_mag_panels_sections = array(

	'theme_general_settings' => array(

		'title' => esc_html__('General Settings','default-mag'),
		'sections' => array(

			array(
				'title' => esc_html__('Logo & Site Identity','default-mag'),
				'url'	=> esc_url( $base_url.'/wp-admin/customize.php?autofocus%5Bcontrol%5D=custom_logo'),
				'icon'	=> 'dashicons-format-image',
			),
			array(
				'title' => esc_html__('Header Media','default-mag'),
				'url'	=> esc_url( $base_url.'/wp-admin/customize.php?autofocus%5Bsection%5D=header_image'),
                'icon'	=> 'dashicons-desktop',
			),
			array(
				'title' => esc_html__('Background Image','default-mag'),
				'url'	=> esc_url( $base_url.'/wp-admin/customize.php?autofocus%5Bsection%5D=background_image'),
                'icon'	=> 'dashicons-desktop',
			),
			array(
				'title' => esc_html__('Menu Settings','default-mag'),
				'url'	=> esc_url( $base_url.'/wp-admin/customize.php?autofocus%5Bpanel%5D=nav_menus'),
				'icon'	=> 'dashicons-menu',
			),

		),

	),
	'theme_colors_panel' => array(

		'title' => esc_html__('Color Settings','default-mag'),
		'sections' => array(

			array(
				'title' => esc_html__('Color Options','default-mag'),
				'url'	=> esc_url( $base_url.'/wp-admin/customize.php?autofocus%5Bsection%5D=colors'),
                'icon'	=> 'dashicons-admin-customizer',
			),
			array(
				'title' => esc_html__('Color Scheme','default-mag'),
				'url'	=> esc_url( $base_url.'/wp-admin/customize.php?autofocus%5Bsection%5D=color_schema'),
                'icon'	=> 'dashicons-art',
			),

		),

	),
	'home_sections_repeater' => array(

		'title' => esc_html__('Homepage Content Section','default-mag'),
		'sections' => array(

			array(
				'title' => esc_html__('Homepage Content Section','default-mag'),
				'url'	=> esc_url( $base_url.'/wp-admin/customize.php?autofocus%5Bsection%5D=home_sections_repeater'),
                'icon'	=> 'dashicons-admin-generic',
			),

		),

	),
	'theme_option_panel' => array(

		'title' => esc_html__('Theme Options','default-mag'),
		'sections' => array(

			array(
				'title' => esc_html__('Header Settings','default-mag'),
				'url'	=> esc_url( $base_url.'/wp-admin/customize.php?autofocus%5Bsection%5D=main_header_setting'),
                'icon'	=> 'dashicons-align-center',
			),
			array(
				'title' => esc_html__('Top Header Settings','default-mag'),
				'url'	=> esc_url( $base_url.'/wp-admin/customize.php?autofocus%5Bsection%5D=top_header_setting'),
                'icon'	=> 'dashicons-ellipsis',
            ),
			array(
				'title' => esc_html__('Pagination Settings','default-mag'),
				'url'	=> esc_url( $base_url.'/wp-admin/customize.php?autofocus%5Bsection%5D=default_mag_pagination_section'),
                'icon'	=> 'dashicons-ellipsis',
            ),
			array(
				'title' => esc_html__('Article Meta Settings','default-mag'),
				'url'	=> esc_url( $base_url.'/wp-admin/customize.php?autofocus%5Bsection%5D=posts_settings'),
                'icon'	=> 'dashicons-admin-settings',
			),
			array(
				'title' => esc_html__('Single Post Settings','default-mag'),
				'url'	=> esc_url( $base_url.'/wp-admin/customize.php?autofocus%5Bsection%5D=single_post_setting'),
                'icon'	=> 'dashicons-welcome-write-blog',
			),
			array(
				'title' => esc_html__('Layout Settings','default-mag'),
				'url'	=> esc_url( $base_url.'/wp-admin/customize.php?autofocus%5Bsection%5D=layout_setting'),
                'icon'	=> 'dashicons-layout',
			),
			array(
				'title' => esc_html__('Footer Setting','default-mag'),
				'url'	=> esc_url( $base_url.'/wp-admin/customize.php?autofocus%5Bsection%5D=footer_settings'),
                'icon'	=> 'dashicons-admin-generic',
			),

		),

	),

);

$default_mag_panel_compare = array(
    array(
        'title' => __('Supports One Click Demo Import', 'default-mag'),
        'free' => __('yes', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Logo and Site Title Option', 'default-mag'),
        'free' => __('yes', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Header Image', 'default-mag'),
        'free' => __('yes', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Background Image', 'default-mag'),
        'free' => __('yes', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Basic Color Option', 'default-mag'),
        'free' => __('yes', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Advance Color Option', 'default-mag'),
        'free' => __('no', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Webmaster Tools', 'default-mag'),
        'free' => __('no', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Typography Style Option', 'default-mag'),
        'free' => __('no', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Custom Widgets', 'default-mag'),
        'free' => __('less', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Offcanvas Widgets Area', 'default-mag'),
        'free' => __('yes', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Front Page Widgets Area', 'default-mag'),
        'free' => __('Less', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('DM :- Full-Width Homepage Widget Style 2', 'default-mag'),
        'free' => __('yes', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('DM :- Author Widget', 'default-mag'),
        'free' => __('yes', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('DM :- Full-Width Homepage Widget Style-1', 'default-mag'),
        'free' => __('3 Layout', 'default-mag'),
        'pro' => __('5 Layout', 'default-mag'),
    ),
    array(
        'title' => __('DM :- Recent Post', 'default-mag'),
        'free' => __('yes', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('DM :- Social Widget', 'default-mag'),
        'free' => __('yes', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('DM :- Tab Widgets', 'default-mag'),
        'free' => __('yes', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Footer Widgets Area', 'default-mag'),
        'free' => __('3', 'default-mag'),
        'pro' => __('4', 'default-mag'),
    ),
    array(
        'title' => __('Main Advertisement Area', 'default-mag'),
        'free' => __('yes', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Table of Contents', 'default-mag'),
        'free' => __('no', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Coming Soon - Maintenance mode', 'default-mag'),
        'free' => __('no', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Onsite Popup Messages', 'default-mag'),
        'free' => __('no', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Social Nav Options', 'default-mag'),
        'free' => __('yes', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Header Advertisement Area', 'default-mag'),
        'free' => __('yes', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Breaking News Option', 'default-mag'),
        'free' => __('yes', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Boxed Site Layout', 'default-mag'),
        'free' => __('yes', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Pagination Options', 'default-mag'),
        'free' => __('4', 'default-mag'),
        'pro' => __('4', 'default-mag'),
    ),
    array(
        'title' => __('Archive Options', 'default-mag'),
        'free' => __('Limited', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Multiple Post Layouts', 'default-mag'),
        'free' => __('yes', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Single Post Options', 'default-mag'),
        'free' => __('Limited', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Multiple single Post Layouts', 'default-mag'),
        'free' => __('yes', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Copyright Text Edit Option', 'default-mag'),
        'free' => __('no', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Pre-loader Animations', 'default-mag'),
        'free' => __('yes', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Instagram Feed Integration', 'default-mag'),
        'free' => __('no', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Twitter Feed Integration', 'default-mag'),
        'free' => __('no', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Facebook Fanpage widget', 'default-mag'),
        'free' => __('no', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Homepage Section Repeater', 'default-mag'),
        'free' => __('no', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Homepage Section Reorder', 'default-mag'),
        'free' => __('yes', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Multiple single Post Layouts', 'default-mag'),
        'free' => __('yes', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Theme Support', 'default-mag'),
        'free' => __('Normal', 'default-mag'),
        'pro' => __('Dedicated High Priority', 'default-mag'),
    ),
    array(
        'title' => __('Responsive Layout', 'default-mag'),
        'free' => __('yes', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('Translations Ready', 'default-mag'),
        'free' => __('yes', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),
    array(
        'title' => __('SEO Optimized', 'default-mag'),
        'free' => __('yes', 'default-mag'),
        'pro' => __('yes', 'default-mag'),
    ),

);

include_once ABSPATH . 'wp-admin/includes/plugin-install.php';
$rec_plugins = DefaultMag_Getting_started::default_mag_recommended_plugins();
$theme_version = wp_get_theme()->get( 'Version' );
$theme_info = wp_get_theme();
$theme_name = $theme_info->__get('Name');
$pro_theme_name = $theme_name . ' Pro';
?>
<div class="twp-about-main">

	<div class="about-page-header">
		<div class="about-wrapper">
            <div class="about-wrapper-inner">
                <div class="about-header-left">
                    <h1 class="about-theme-title">
                        <a target="_blank" href="<?php echo esc_url( 'https://www.themeinwp.com/theme/default-mag' ); ?>">
                            <img src="<?php echo esc_url( get_template_directory_uri().'/assets/images/default-mag-logo.png' ); ?>" class="about-theme-logo">
                            <span class="theme-version"><?php echo esc_html( $theme_version ); ?></span>
                        </a>
                    </h1>
                </div>
                <div class="about-header-right">
                    <div class="about-header-navigation">
                        <a target="_blank" class="about-header-links header-links-home"
                           href="<?php echo esc_url('https://www.themeinwp.com/theme/default-mag'); ?>">
                            <?php esc_html_e('Theme Details', 'default-mag'); ?>
                        </a>
                        <a target="_blank" class="about-header-links header-links-preview"
                           href="<?php echo esc_url('https://demo.themeinwp.com/default-mag'); ?>">
                            <?php esc_html_e('View Demo', 'default-mag'); ?>
                        </a>
                        <a target="_blank" class="about-header-links header-links-review"
                           href="<?php echo esc_url('https://wordpress.org/support/theme/default-mag/reviews/?filter=5'); ?>">
                            <?php esc_html_e('Rate This Theme', 'default-mag'); ?>
                        </a>
                    </div>
                </div>
            </div>
		</div>
	</div>

    <div class="about-tab-navbar">
        <div class="about-wrapper">
            <ul class="tab-navbar-list">
                <li><a href="#about-panel-1"><?php esc_html_e('Getting started', 'default-mag'); ?></a></li>
                <li><a class="active" href="#about-panel-2"><?php esc_html_e('Free vs Pro', 'default-mag'); ?></a></li>
                <li><a href="#about-panel-3"><?php esc_html_e('Changelog', 'default-mag'); ?></a></li>
            </ul>
        </div>
    </div>

    <div class="about-page-content">
	    <div class="about-wrapper">
            <div class="about-wrapper-inner">

                <div class="about-content-left">
                    <div class="about-tab-content">
                        <div id="about-panel-1" class="about-panel-item about-panel-general">

                            <?php
                            foreach( $default_mag_panels_sections as $panels ){ ?>

                                <div class="about-content-panel">

                                    <?php if( isset( $panels['title'] ) && $panels['title'] ){ ?>

                                        <h2 class="about-panel-title"><?php echo esc_html( $panels['title'] );  ?></h2>

                                    <?php } ?>
                                    <div class="about-panel-items about-panel-2-columns">
                                    <?php

                                    if( isset( $panels['sections'] ) && $panels['sections'] ){

                                        foreach( $panels['sections'] as $section ){ ?>


                                            <div class="about-items-wrap">
                                                <?php if( isset( $section['icon'] ) && $section['icon'] ){ ?>
                                                    <span class="about-items-icon dashicons <?php echo esc_attr( $section['icon'] ); ?>"></span>
                                                <?php } ?>

                                                <?php if( isset( $section['title'] ) && $section['title'] && isset( $section['url'] ) && $section['url'] ){ ?>
                                                    <span class="about-items-title">
                                                        <a href="<?php echo esc_url( $section['url'] ); ?>"><?php echo esc_html( $section['title'] ); ?></a>
                                                    </span>
                                                <?php } ?>
                                            </div>


                                    <?php }

                                    } ?>
                                    </div>
                                </div>

                            <?php } ?>

                            <div class="about-content-panel">

                                <h2 class="about-panel-title"><?php esc_html_e('Recommended Plugins','default-mag'); ?></h2>

                                <div class="about-panel-items about-panel-1-columns">

                                    <?php foreach ($rec_plugins as $key => $plugin) {

                                        $plugin_info = plugins_api(
                                            'plugin_information',
                                            array(
                                                'slug' => sanitize_key(wp_unslash($key)),
                                                'fields' => array(
                                                    'sections' => false,
                                                ),
                                            )
                                        );

                                        $plugin_status = DefaultMag_Getting_started::default_mag_plugin_status($plugin['class'], $key, $plugin['PluginFile']); ?>

                                        <div id="<?php echo 'default-mag-' . esc_attr($key); ?>" class="about-items-wrap">
                                            <div class="theme-recommended-plugin <?php if ($plugin_status['status'] == 'active') { echo 'recommended-plugin-active'; } ?>">

                                                <?php if (isset($plugin_info->name)) { ?>
                                                    <a href="javascript:void(0)"><?php echo esc_html($plugin_info->name); ?></a>
                                                <?php } ?>

                                                <?php if (isset($plugin_status['status']) && isset($plugin_status['string'])) { ?>

                                                    <a class="recommended-plugin-status <?php echo 'twp-plugin-' . esc_attr($plugin_status['status']); ?>"
                                                       plugin-status="<?php echo esc_attr($plugin_status['status']); ?>"
                                                       plugin-file="<?php echo esc_attr($plugin['PluginFile']); ?>"
                                                       plugin-folder="<?php echo esc_attr($key); ?>"
                                                       plugin-slug="<?php echo esc_attr($key); ?>"
                                                       plugin-class="<?php echo esc_attr($plugin['class']); ?>"
                                                       href="javascript:void(0)"><?php echo esc_html($plugin_status['string']); ?></a>

                                                <?php } ?>

                                            </div>

                                        </div>

                                    <?php } ?>

                                </div>

                            </div>
                        </div>

                        <div id="about-panel-2" class="about-panel-item about-panel-compare about-panel-item-active">
                            <?php

                            $free_pro = $default_mag_panel_compare;
                            if (!empty($free_pro)) {
                                $defaults = array(
                                    'title' => '',
                                    'desc' => '',
                                    'free' => '',
                                    'pro' => '',
                                );

                                if (!empty($free_pro) && is_array($free_pro)) {
                                    echo '<div id="free_pro" class="theme-info-tab-pane theme-info-fre-pro">';
                                    echo '<table class="free-pro-table">';
                                    echo '<thead>';
                                    echo '<tr>';
                                    echo '<th></th>';
                                    echo '<th>' . $theme_name . '</th>';
                                    echo '<th>' . $pro_theme_name . '</th>';
                                    echo '</tr>';
                                    echo '</thead>';
                                    echo '<tbody>';
                                    foreach ($free_pro as $feature) {

                                        $instance = wp_parse_args((array)$feature, $defaults);

                                        /*allowed 7 value in array */
                                        $title = $instance['title'];
                                        $desc = $instance['desc'];
                                        $free = $instance['free'];
                                        $pro = $instance['pro'];

                                        echo '<tr>';
                                        if (!empty($title) || !empty($desc)) {
                                            echo '<td>';
                                            if (!empty($title)) {
                                                echo '<h3 class="compare-tabel-title">' . wp_kses_post($title) . '</h3>';
                                            }
                                            if (!empty($desc)) {
                                                echo '<p>' . wp_kses_post($desc) . '</p>';
                                            }
                                            echo '</td>';
                                        }

                                        if (!empty($free)) {
                                            if ('yes' === $free) {
                                                echo '<td class="theme-feature-check"><span class="dashicons-before dashicons-yes"></span></td>';
                                            } elseif ('no' === $free) {
                                                echo '<td class="theme-feature-cross"><span class="dashicons-before dashicons-no-alt"></span></td>';
                                            } else {
                                                echo '<td class="theme-feature-check">' . esc_html($free) . '</td>';
                                            }

                                        }
                                        if (!empty($pro)) {
                                            if ('yes' === $pro) {
                                                echo '<td class="theme-feature-check"><span class="dashicons-before dashicons-yes"></span></td>';
                                            } elseif ('no' === $pro) {
                                                echo '<td class="theme-feature-cross"><span class="dashicons-before dashicons-no-alt"></span></td>';
                                            } else {
                                                echo '<td class="theme-feature-check">' . esc_html($pro) . '</td>';
                                            }
                                        }
                                        echo '</tr>';
                                    }



                                    echo '</tbody>';
                                    echo '</table>';
                                    echo '</div>';

                                }
                            } ?>
                        </div>

                        <div id="about-panel-3" class="about-panel-item about-panel-changelog">
                            <?php
                            WP_Filesystem();
                            global $wp_filesystem;
                            if (is_child_theme()) {
                                $changelog = $wp_filesystem->get_contents(get_stylesheet_directory() . '/classes/changelog.txt');
                            } else {
                                $changelog = $wp_filesystem->get_contents(get_template_directory() . '/classes/changelog.txt');
                            }
                            if (is_wp_error($changelog)) {
                                $changelog = '';
                            }

                            if (!empty($changelog)) {
                                echo '<div class="featured-section changelog">';
                                echo "<pre class='changelog'>";
                                echo $changelog;
                                echo "</pre>";
                                echo '</div>';
                            }
                            ?>
                        </div>

                    </div>
                </div>

                <div class="about-content-right">
                    <div class="about-content-panel">
                        <h2 class="about-panel-title"><span class="dashicons dashicons-sos"></span> <?php esc_html_e('Looking for help?','default-mag'); ?></h2>
                        <div class="about-content-info">
                            <p><?php esc_html_e('We have some resources available to help you in the right direction.','default-mag'); ?></p>
                            <ul>
                                <li>
                                    <a href="<?php echo esc_url( 'https://www.themeinwp.com/support/' ); ?>" target="_blank" rel="noopener"><?php esc_html_e('Create a Ticket','default-mag'); ?> &#187;</a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( 'https://www.themeinwp.com/knowledgebase/' ); ?>" target="_blank" rel="noopener"><?php esc_html_e('Knowledge Base','default-mag'); ?> &#187;</a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( 'https://docs.themeinwp.com/docs/defaultmag' ); ?>" target="_blank" rel="noopener"><?php esc_html_e('Theme Documentation','default-mag'); ?> &#187;</a>
                                </li>
                            </ul>
                            <p><?php esc_html_e('Behind every single customer support question stands a real person ready to fix the problem in real-time and guide you through.','default-mag'); ?></p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        
        <div class="about-wrapper">
            <div class="about-wrapper-inner">
                <div class="about-content-full">
                    <div class="about-wrapper-footer">
                        <h2 class="about-panel-title"><?php printf( __( 'Unlock all the Features with %1$s Pro', 'default-mag' ), esc_html( $theme_name ) ); ?></h2>
                        <div class="about-footer-leftside">
                            <ul>
                                <li><span class="dashicons dashicons-yes"></span><?php esc_html_e('Color Options','default-mag'); ?></li>
                                <li><span class="dashicons dashicons-yes"></span><?php esc_html_e('800+ Font Families','default-mag'); ?></li>
                                <li><span class="dashicons dashicons-yes"></span><?php esc_html_e('More Custom Widgets','default-mag'); ?></li>
                                <li><span class="dashicons dashicons-yes"></span><?php esc_html_e('More Customizer controls','default-mag'); ?></li>
                                <li><span class="dashicons dashicons-yes"></span><?php esc_html_e('More page/post meta options','default-mag'); ?></li>
                                <li><span class="dashicons dashicons-yes"></span><?php esc_html_e('Webmaster Tools','default-mag'); ?></li>
                                <li><span class="dashicons dashicons-yes"></span><?php esc_html_e('Remove Footer Attribution (copyright)','default-mag'); ?></li>
                                <li><span class="dashicons dashicons-yes"></span><?php esc_html_e('VIP priority Support','default-mag'); ?></li>
                                <li><span class="dashicons dashicons-plus"></span><?php esc_html_e('much more stuff...','default-mag'); ?></li>
                            </ul>
                        </div>
                        <div class="about-footer-rightside">
                            <div class="about-footer-upgrade">
                                <h3 class="footer-upgrade-title">
                                    <?php esc_html_e('Upgrade to Pro','default-mag'); ?>
                                </h3>
                                <div class="footer-upgrade-price">
                                    <sup><?php esc_html_e('$','default-mag'); ?></sup>
                                    <span><?php esc_html_e('59','default-mag'); ?></span>
                                </div>
                                <div class="footer-upgrade-link">
                                    <a target="_blank" class="button button-primary button-primary-upgrade" href="<?php echo esc_url( 'https://www.themeinwp.com/theme/default-mag-pro/' ); ?>"><?php esc_html_e('Upgrade to Pro','default-mag'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>