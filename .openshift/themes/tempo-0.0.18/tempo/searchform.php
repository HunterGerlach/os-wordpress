<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="tempo-search-form">
    <fieldset>
        <div id="searchbox">
            <input type="text" name="s"  id="keywords" value="<?php _e( 'type here...' , 'tempo' ); ?>" onfocus="if (this.value == '<?php _e( 'type here...' , 'tempo' ); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e( 'type here...' , 'tempo' ); ?>';}">
            <button type="submit" class="tempo-btn btn-search"><i class="tempo-icon-search-5"></i></button>
        </div>
    </fieldset>
</form>