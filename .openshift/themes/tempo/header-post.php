<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php endif; ?>
        <?php wp_head(); ?>
    </head>

    <?php
        $body_class = 'tempo-has-header';

        if( !tempo_has_header() ){
            $body_class = 'tempo-not-has-header';            
        }
    ?>

    <body <?php body_class( $body_class ); ?>>

        <?php get_template_part( 'templates/body/prepend', 'post' ); ?>

        <?php tempo_get_template_part( 'templates/body/prepend', 'post' ); ?>

        <?php tempo_get_template_part( 'templates/header/menu/collapsed', 'post' ); ?>

        <?php tempo_get_template_part( 'templates/website-wrapper/before', 'post' ); ?>
    
        <div class="tempo-website-wrapper">

            <?php tempo_get_template_part( 'templates/website-wrapper/prepend', 'post' ); ?>

            <?php tempo_get_template_part( 'templates/header/before', 'post' ); ?>

            <header id="tempo-header" class="tempo-header" role="banner">

                <?php tempo_get_template_part( 'templates/header/prepend', 'post' ); ?>

                <?php tempo_get_template_part( 'templates/header/topper/before', 'post' ); ?>

                <?php tempo_get_template_part( 'templates/header/topper', 'post' ); ?>

                <?php tempo_get_template_part( 'templates/header/topper/after', 'post' ); ?>

                <?php tempo_get_template_part( 'templates/header/partial/default', 'post' ); ?>

                <?php tempo_get_template_part( 'templates/header/append', 'post' ); ?>

            </header>

            <?php tempo_get_template_part( 'templates/header/after', 'post' ); ?>