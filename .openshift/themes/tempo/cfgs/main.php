<?php

	/**
	 *	General config settings
	 */


	/**
	 *	Theme Config
	 */

	$cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'theme' ), array(
		'description'       	=> __( 'Tempo is a beautiful WordPress theme for Blogging', 'tempo' ),
		'author_description'   	=> __( 'myThem.es Marketplace provides WordPress themes with the best quality and the smallest prices.', 'tempo' ),
		'wordpress'				=> 'https://wordpress.org/themes/tempo/',
		'premium_url' 			=> 'http://mythem.es/item/zeon-wordpress-plugin-extends-tempo-free-wordpress-theme/?tempo=admin-panel',
		'support'				=> 'http://mythem.es/forums/forum/themes/tempo/',
		'contact'				=> 'http://mythem.es/contact/',
		'childs' 	=> array(
			'cronus'	=> array(
				'thumbnail'		=> get_template_directory_uri() . '/media/admin/img/cronus.png',
				'description'	=> __( 'Cronus is a free WordPress child Theme that extends the Tempo free WordPress theme.', 'tempo' ),
				'permalink'		=> 'http://mythem.es/item/cronus-free-wordpress-child-theme-of-tempo',
				'support'		=> 'http://mythem.es/forums/forum/themes/cronus/'
			)
		)
	));

	tempo_cfgs::set( 'theme', $cfgs );


	/**
	 *	Custom Logo
	 */

	$cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'custom-logo' ), array(
        'height'      	=> 70,
        'width'       	=> 235,
        'flex-height' 	=> true,
		'flex-width'  	=> true,
		'header-text'	=> array( 'tempo-site-title', 'tempo-site-description' )
    ));

    tempo_cfgs::set( 'custom-logo', $cfgs );


    /**
     *	Custom Background
     */

    $cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'custom-background' ), array(
        'default-color'         => '#e5e5e5',
        'default-image'         => null,
        'default-attachment'    => 'fixed'
	));

	tempo_cfgs::set( 'custom-background', $cfgs );


	/**
     *	Custom Header
     */

    $cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'custom-header' ), array(
        'default-image'          => null,
        'random-default'         => true,
        'width'                  => 2560,
        'height'                 => 1440,
        'flex-height'            => true,
        'flex-width'             => true,
        'default-text-color'     => '#ffffff',
        'header-text'            => true,
        'uploads'                => true
    ));

    tempo_cfgs::set( 'custom-header', $cfgs );


	/**
	 *	Images Size
	 */

	$cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'images-size' ), array(
		'tempo-classic' => array(
			'width' 	=> 945,
			'height'	=> 531,
			'crop' 		=> true
		)
	));

	tempo_cfgs::set( 'images-size', $cfgs );


	/**
	 *	Sidebars Classes Header / Footer
	 */

	$cfgs = tempo_cfgs::merge( (array)tempo_cfgs::get( 'sidebars-classes' ), array(
		1 => 'col-lg-12',
        2 => 'col-xs-6 col-sm-6 col-md-6 col-lg-6',
        3 => 'col-xs-6 col-sm-6 col-md-4 col-lg-4',
        4 => 'col-xs-6 col-sm-6 col-md-3 col-lg-3'
	));

	tempo_cfgs::set( 'sidebars-classes', $cfgs );
?>