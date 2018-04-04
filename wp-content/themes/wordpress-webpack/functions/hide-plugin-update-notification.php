<?php

    /**
     * This function will hide the plugin update notification
     * Admin Columns Pro
     */

    function filter_plugin_updates( $value ) {
        unset( $value->response['admin-columns-pro/admin-columns-pro.php'] );
        return $value;
    }
    add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );