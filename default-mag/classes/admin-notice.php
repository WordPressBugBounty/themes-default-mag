<?php
if ( !class_exists('Default_Mag_Dashboard_Notice') ):

    class Default_Mag_Dashboard_Notice
    {
        function __construct()
        {	
            global $pagenow;

        	if( $this->default_mag_show_hide_notice() ){

	            if( is_multisite() ){

                  add_action( 'network_admin_notices',array( $this,'default_mag_admin_notice' ) );

                } else {

                  add_action( 'admin_notices',array( $this,'default_mag_admin_notice' ) );
                }
	        }
	        add_action( 'wp_ajax_default_mag_notice_dismiss', array( $this, 'default_mag_notice_dismiss' ) );
			add_action( 'switch_theme', array( $this, 'default_mag_notice_clear_cache' ) );
        
            if( isset( $_GET['page'] ) && $_GET['page'] == 'default-mag-about' ){

                add_action('in_admin_header', array( $this,'default_mag_hide_all_admin_notice' ),1000 );

            }
        }

        public function default_mag_hide_all_admin_notice(){

            remove_all_actions('admin_notices');
            remove_all_actions('all_admin_notices');

        }
        
        public static function default_mag_show_hide_notice( $status = false ){

            if( $status ){

                if( (class_exists( 'Social_Share_With_Floating_Bar' ) ) || get_option('default_mag_admin_notice') ){

                    return false;

                }else{

                    return true;

                }

            }

            // Check If current Page 
            if ( isset( $_GET['page'] ) && $_GET['page'] == 'default-mag-about'  ) {
                return false;
            }

        	// Hide if dismiss notice
        	if( get_option('default_mag_admin_notice') ){
				return false;
			}
        	// Hide if all plugin active
        	if ( class_exists( 'Social_Share_With_Floating_Bar' ) && class_exists( 'Demo_Import_Kit_Class' ) && class_exists( 'Themeinwp_Import_Companion' ) ) {
				return false;
			}
			// Hide On TGMPA pages
			if ( ! empty( $_GET['tgmpa-nonce'] ) ) {
				return false;
			}
			// Hide if user can't access
        	if ( current_user_can( 'manage_options' ) ) {
				return true;
			}
			
        }

        // Define Global Value
        public static function default_mag_admin_notice(){

            ?>
           <div class="updated notice is-dismissible twp-default-mag-notice">

                <h3><?php esc_html_e('Quick Setup','default-mag'); ?></h3>

                <p><strong><?php esc_html_e('Default Mag is now installed and ready to use. Are you looking for a better experience to set up your site?','default-mag'); ?></strong></p>

                <small><?php esc_html_e("We've prepared a unique onboarding process through our",'default-mag'); ?> <a href="<?php echo esc_url( admin_url().'themes.php?page='.get_template().'-about') ?>"><?php esc_html_e('Getting started','default-mag'); ?></a> <?php esc_html_e("page. It helps you get started and configure your upcoming website with ease. Let's make it shine!",'default-mag'); ?></small>

                <p>
                    <a target="_blank" class="button button-primary button-primary-upgrade" href="<?php echo esc_url( 'https://www.themeinwp.com/theme/default-mag-pro/' ); ?>">
                        <span class="dashicons dashicons-thumbs-up"></span>
                        <span><?php esc_html_e('Upgrade to Pro','default-mag'); ?></span>
                    </a>
                    <a class="button button-primary twp-install-active" href="javascript:void(0)">
                        <span class="dashicons dashicons-admin-plugins"></span>
                        <span><?php esc_html_e('Install and activate recommended plugins','default-mag'); ?></span>
                    </a>
                    <span class="quick-loader-wrapper"><span class="quick-loader"></span></span>

                    <a target="_blank" class="button button-primary" href="<?php echo esc_url( 'https://demo.themeinwp.com/default-mag/' ); ?>">
                        <span class="dashicons dashicons-welcome-view-site"></span>
                        <span><?php esc_html_e('View Demo','default-mag'); ?></span>
                    </a>

                    <a target="_blank" class="button button-primary" href="<?php echo esc_url('https://wordpress.org/support/theme/default-mag/reviews/?filter=5'); ?>">
                        <span class="dashicons dashicons-star-filled"></span>
                        <span class="dashicons dashicons-star-filled"></span>
                        <span class="dashicons dashicons-star-filled"></span>
                        <span class="dashicons dashicons-star-filled"></span>
                        <span class="dashicons dashicons-star-filled"></span>
                        <span><?php esc_html_e('Leave a review', 'default-mag'); ?></span>
                    </a>


                    <a class="btn-dismiss twp-custom-setup" href="javascript:void(0)"><?php esc_html_e('Dismiss this notice.','default-mag'); ?></a>

                </p>

            </div>

        <?php
        }

        public function default_mag_notice_dismiss(){
            check_ajax_referer( 'default_mag_ajax_nonce', 'security' );
	        update_option('default_mag_admin_notice','hide');
            die();

        }

        public function default_mag_notice_clear_cache(){

        	update_option('default_mag_admin_notice','');

        }

    }
    new Default_Mag_Dashboard_Notice();
endif;