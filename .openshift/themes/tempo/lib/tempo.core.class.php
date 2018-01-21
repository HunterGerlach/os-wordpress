<?php

if( !class_exists( 'tempo_core' ) ){

class tempo_core
{
    /* THEME */
    static function theme( $key )
    {
        $cfgs   = tempo_cfgs::get( 'theme' );
        $theme  = wp_get_theme();

        $rett   = null;

        $cfg    = $theme -> get( $key );

        if( isset( $cfgs[ $key ]  ) ){
            $rett = $cfgs[ $key ];
        }
        else{
            $rett = $theme -> get( $key );
        }

        return $rett;
    }

    static function child( $slug, $properties )
    {
        $cfgs = tempo_cfgs::get( 'theme' );

        $rett = null;

        if( !empty( $cfgs[ 'childs' ] ) ){
            if( isset( $cfgs[ 'childs' ][ $slug ] ) && isset( $cfgs[ 'childs' ][ $slug ][ $properties ] ) )
                $rett = $cfgs[ 'childs' ][ $slug ][ $properties ];
        }

        return $rett;
    }

    static function exists_premium()
    {
        $cfgs = tempo_cfgs::get( 'theme' );

        $rett = false;

        if( isset( $cfgs[ 'premium_url' ] ) && (bool)$cfgs[ 'premium_url' ] ){
            $rett = true;
        }

        return $rett;
    }
}

} /* END IF CLASS EXISTS */
?>