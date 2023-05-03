<?php

if ( ! function_exists( 'tt3c_get_site_name' ) ) {
	function tt3c_get_site_name() {
		$blog_id   = get_current_blog_id();
		$site_name = get_bloginfo( 'name' );

		return $site_name . ' - Site ID # ' . $blog_id;
	}
}
