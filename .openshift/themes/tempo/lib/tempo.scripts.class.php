<?php
    if( !class_exists( 'tempo_scripts' ) ){

    class tempo_scripts
    {
        static function frontend()
        {
            $ver        = tempo_core::theme( 'Version' );

            $font_1     = 'Domine&subset=latin,latin-ext';
            $font_2     = 'Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300&subset=latin,cyrillic-ext,latin-ext,cyrillic,greek-ext,greek,vietnamese';

            wp_register_style( 'tempo-google-font-1',           '//fonts.googleapis.com/css?family=' . esc_attr( $font_1 ), null, $ver );
            wp_register_style( 'tempo-google-font-2',           '//fonts.googleapis.com/css?family=' . esc_attr( $font_2 ), null, $ver );

            wp_register_style( 'tempo-fontello',                get_template_directory_uri() . '/media/css/fontello.css', null, $ver );
            wp_register_style( 'bootstrap',                     get_template_directory_uri() . '/media/css/bootstrap.min.css', null, $ver );
            wp_register_style( 'tempo-typography',              get_template_directory_uri() . '/media/css/typography.css', null, $ver );
            wp_register_style( 'tempo-settings',                get_template_directory_uri() . '/media/css/settings.css', null, $ver );
            wp_register_style( 'tempo-forms',                   get_template_directory_uri() . '/media/css/forms.css', null, $ver );

            /* FRONTEND */
            wp_register_style( 'tempo-header',                  get_template_directory_uri() . '/media/css/header.css', null, $ver );
            wp_register_style( 'tempo-menu',                    get_template_directory_uri() . '/media/css/menu.css', null, $ver );
            wp_register_style( 'tempo-blog',                    get_template_directory_uri() . '/media/css/blog.css', null, $ver );
            wp_register_style( 'tempo-article',                 get_template_directory_uri() . '/media/css/article.css', null, $ver );
            wp_register_style( 'tempo-single',                  get_template_directory_uri() . '/media/css/single.css', null, $ver );
            wp_register_style( 'tempo-widgets',                 get_template_directory_uri() . '/media/css/widgets.css', null, $ver );
            
            wp_register_style( 'tempo-comments',                get_template_directory_uri() . '/media/css/comments.css', null, $ver );
            wp_register_style( 'tempo-footer',                  get_template_directory_uri() . '/media/css/footer.css', null, $ver );
            
            wp_register_style( 'tempo-shortcode',               get_template_directory_uri() . '/media/css/shortcode.css', null, $ver );
            wp_register_style( 'tempo-settings-fonts',          get_template_directory_uri() . '/media/css/settings-fonts.css', null, $ver );

            wp_register_style( 'tempo-settings-google-font-1',  get_template_directory_uri() . '/media/css/settings-google-font-1.css', null, $ver );
            wp_register_style( 'tempo-settings-google-font-2',  get_template_directory_uri() . '/media/css/settings-google-font-2.css', null, $ver );


            $dependency = array(
                'tempo-fontello',
                'bootstrap',
                'tempo-typography',
                'tempo-settings',
                'tempo-forms',

                'tempo-google-font-1',
                'tempo-google-font-2',

                'tempo-header',
                'tempo-menu',
                'tempo-blog',
                'tempo-article',
                'tempo-single',
                'tempo-widgets',
                'tempo-comments',
                'tempo-footer',
                'tempo-shortcode',

                'tempo-settings-google-font-1',
                'tempo-settings-google-font-2'
            );

            /**
             *
             */

            $css_files = apply_filters( 'tempo_css_files', (array)tempo_cfgs::get( 'css-files' ) );

            foreach( $css_files as $css_file_index => $css_file_uri ){
                $dependency[] = $css_file_index;
                wp_register_style( $css_file_index, $css_file_uri, null, $ver );
            }

            /* MAIN STYLE */
            wp_enqueue_style( 'tempo-style',                    get_template_directory_uri() . '/style.css', $dependency, $ver );

            // Load the Internet Explorer specific stylesheet.
            wp_enqueue_style( 'tempo-ie',                       get_template_directory_uri() . '/media/css/ie.css', null, $ver );
            wp_style_add_data( 'tempo-ie', 'conditional', 'IE' );


            // Load the Internet Explorer 9 specific scripts.
            wp_enqueue_script( 'respond',                       get_template_directory_uri() . '/media/js/respond.min.js', null, $ver );
            wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );
         
            wp_enqueue_script( 'html5shiv',                     get_template_directory_uri() . '/media/js/html5shiv.js', null, $ver );
            wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

            /* REGISTER SCRIPTS */
            /* JS FILES */
            wp_register_script( 'bootstrap',                    get_template_directory_uri() . '/media/js/bootstrap.min.js', array( 'jquery' ), null, true );
            wp_enqueue_script( 'bootstrap' );

            wp_enqueue_script( 'waypoints',                     get_template_directory_uri() . '/media/js/waypoints.min.js', null , null, true );
            wp_enqueue_script( 'jquery-counterup',              get_template_directory_uri() . '/media/js/jquery.counterup.min.js', null , null, true );

            wp_register_script( 'tempo-functions',              get_template_directory_uri() . '/media/js/functions.js', array( 'masonry' ) , $ver, true );
            wp_enqueue_script( 'tempo-functions' );

            /* INCLUDE FOR REPLY COMMENTS */
            if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
                    wp_enqueue_script( 'comment-reply' );
        }

        static function admin( $hook )
        {
            $ver = tempo_core::theme( 'Version' );

            if( $hook == 'widgets.php' ){
                wp_register_style( 'tempo-admin-customizer',            get_template_directory_uri() . '/media/admin/css/customizer.css', null, $ver );
                wp_register_style( 'tempo-fontello',                    get_template_directory_uri() . '/media/css/fontello.css', null, $ver );

                wp_enqueue_style( 'tempo-admin-customizer' );
                wp_enqueue_style( 'tempo-fontello' );
            }

            if( $hook !== 'appearance_page_tempo-faq' )
                return;

            $font = 'Roboto:400,500&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic';

            wp_register_style( 'tempo-admin-google-font-1',         '//fonts.googleapis.com/css?family=' . esc_attr( $font ), null, null );

            wp_enqueue_script( 'tempo-admin-html',                  get_template_directory_uri() . '/media/admin/js/tempo.html.js', array( 'jquery', 'wp-color-picker', 'jquery-ui-draggable' ), $ver );

            wp_register_style( 'tempo-admin-page',                  get_template_directory_uri() . '/media/admin/css/page.css', null, $ver );
            wp_register_style( 'tempo-admin-box',                   get_template_directory_uri() . '/media/admin/css/box.css', null, $ver );
            wp_register_style( 'tempo-admin-additional',            get_template_directory_uri() . '/media/admin/css/additional.css', null, $ver );
            wp_register_style( 'tempo-admin-fields',                get_template_directory_uri() . '/media/admin/css/fields.css', null, $ver );

            wp_register_style( 'tempo-fontello',                    get_template_directory_uri() . '/media/css/fontello.css', null, $ver );

            wp_enqueue_style( 'tempo-admin-google-font-1' );
            wp_enqueue_style( 'tempo-admin-page' );
            wp_enqueue_style( 'tempo-admin-box' );
            wp_enqueue_style( 'tempo-admin-additional' );
            wp_enqueue_style( 'tempo-admin-fields' );

            wp_enqueue_style( 'tempo-fontello' );
        }


        static function customize_preview()
        {
            $ver = tempo_core::theme( 'Version' );

            wp_register_script( 'tempo-customize', get_template_directory_uri() . '/media/admin/js/customize.js', array( 'jquery', 'customize-preview' ), $ver, true );
            wp_enqueue_script( 'tempo-customize' );


            /**
             *
             */

            $js_args    = apply_filters( 'tempo_customize_js_args', (array)tempo_cfgs::get( 'customize-js-args' ) );
            $js_files   = apply_filters( 'tempo_customize_js_files', (array)tempo_cfgs::get( 'customize-js-files' ) );

            foreach( $js_files as $js_file_index => $js_file_uri ){
                wp_register_script( $js_file_index, $js_file_uri, array( 'jquery', 'customize-preview' ), $ver, true );
                wp_localize_script( $js_file_index, 'tempo_customize_args', $js_args );
                wp_enqueue_script( $js_file_index );
            }
        }

        static function customize_panel()
        {        
            $ver = tempo_core::theme( 'Version' );

            $tempo_customize_panel = array(
                'range_reset_label'     => __( 'Reset to Default', 'tempo' ),
                'upgrade_label'         => __( 'Upgrade to Premium', 'tempo' ),
                'upgrade_description'   => __( 'compatible with free version', 'tempo' )
            );

            $premium_url = esc_url( tempo_core::theme( 'premium_url' ) );

            if( !empty( $premium_url ) )
                $tempo_customize_panel[ 'premium_url' ] = esc_url( tempo_core::theme( 'premium_url' ) );

            wp_register_script( 'tempo-customize-panel', get_template_directory_uri() . '/media/admin/js/customize-panel.js', array( 'jquery' ), $ver, true );
            wp_localize_script( 'tempo-customize-panel', 'tempo_customize_panel', $tempo_customize_panel );
            wp_enqueue_script( 'tempo-customize-panel' );
        }
    }

}   /* END IF CLASS EXISTS */
?>