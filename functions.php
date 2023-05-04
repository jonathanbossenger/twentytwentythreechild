<?php

if ( ! function_exists( 'tt3c_get_site_name' ) ) {
	function tt3c_get_site_name() {
		$site_name = get_bloginfo( 'name' );
		switch_to_blog( 1 );
		$main_site_name = get_bloginfo( 'name' );
		restore_current_blog();

		return $site_name . ' (part of the ' . $main_site_name . ' network)';
	}
}
