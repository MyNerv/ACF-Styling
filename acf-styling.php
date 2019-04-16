<?php
/**
 * ACF Field Styling
 *
 * Plugin Name: ACF Field Styling
 * Plugin URI:  https://github.com/MyNerv/ACF-Styling
 * Description: Style the fields in ACF admin views
 * Version:     1.0
 * Author:      Mervyn Booth
 * Author URI:  https://github.com/MyNerv
 * License:     
 * License URI: 
 * Text Domain: acf-styling
 * Domain Path:
 * Network:     false
 *
 */

add_action('acf/input/admin_head', function() {
	?><style>
		@media (max-width: 575px) {
			.sm-w100 .acf-field {
				width: 100% !important;
				min-height: auto !important;
			}
			
			.hide-child-labels .acf-input .acf-label {
				display: none !important;
			}
		}
	
		.hide-label .acf-label {display: none !important}
	</style><?php
});
