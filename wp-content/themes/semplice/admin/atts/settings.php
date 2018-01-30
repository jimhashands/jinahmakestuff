<?php

// -----------------------------------------
// semplice
// admin/atts/settings.php
// -----------------------------------------

$settings = array(
	'general' => array(
		'activation' => array(
			'title'		  => 'Activate One-click Updates',
			'description' => 'Enter your license code to activate our Semplice One-click Update feature. You can find your license code in your order confirmation email. If you don\'t like to activate one-click updates, leave this field empty.<br /><br />Note: Please dont forget the dashes in your license key.',
			'break'		  => '1,1,1',
			'product' => array(
				'title'				 => 'Select License',
				'size'				 => 'span4',
				'data-input-type'    => 'select-box',
				'class'			  	 => 'admin-listen-handler',
				'data-handler'       => 'settings',
				'default'			 => 'single',
				'data-settings-type' => 'general',
				'select-box-values' => array(
					's4-single' => 'Single License',
					's4-studio'	=> 'Studio License',
					's4-single-to-studio' => 'Studio License (Upgrade from Single)',
					's4-business'	=> 'Business License',
					's4-single-to-business'	=> 'Business License (Upgrade from Single)',
					's4-studio-to-business' => 'Business License (Upgrade from Studio)'
				),
			),
			'license_key' => array(
				'data-input-type' 	 => 'input-key',
				'title'			  	 => 'License Key',
				'placeholder' 	  	 => 'XXXX-XXXX-XXXX-XXXX',
				'class'			  	 => 'admin-listen-handler',
				'size'		 	  	 => 'span4',
				'data-handler'    	 => 'settings',
				'default'		  	 => '',
				'data-settings-type' => 'general',
			),
			'license_check' => array(
				'data-input-type' 	 => 'button',
				'title'		 		 => 'Preview',
				'hide-title'		 => true,
				'button-title'		 => 'Activate',
				'size'		 		 => 'span2',
				'class'			  	 => 'semplice-button green-button check-license admin-listen-handler',
				'data-handler'    	 => 'settings',
				'data-settings-type' => 'general',
			),
		),
		'site' => array(
			'title' => 'Site Title and Tagline',
			'description' => 'Define your site title and tagline.',
			'break' => '1,1',
			'site_title' => array(
				'data-input-type' 	 => 'input-text',
				'title'			  	 => 'Title',
				'placeholder' 	  	 => 'Semplice',
				'class'			  	 => 'admin-listen-handler',
				'size'		 	  	 => 'span4',
				'data-handler'    	 => 'settings',
				'default'		  	 => '',
				'data-settings-type' => 'general',
			),
			'site_tagline' => array(
				'data-input-type' 	 => 'input-text',
				'title'			  	 => 'Tagline',
				'placeholder' 	  	 => 'Designers\' best kept secret.',
				'class'			  	 => 'admin-listen-handler',
				'size'		 	  	 => 'span4',
				'data-handler'    	 => 'settings',
				'default'		  	 => '',
				'data-settings-type' => 'general',
			),
		),
		'homepage' => array(
			'title' => 'Your Homepage displays',
			'description' => 'Choose what to display on your homepage.',
			'break' => '1,2',
			'show_on_front' => array(
				'data-input-type' 			=> 'switch',
				'hide-title'				=> true,
				'switch-type'				=> 'twoway',
				'title'		 				=> 'Your Homepage displays',
				'size'		 				=> 'span4',
				'class'						=> 'admin-listen-handler',
				'data-handler'  			=> 'settings',
				'default' 	 				=> 'posts',
				'data-settings-type'		=> 'general',
				'data-visibility-switch' 	=> true,
				'data-visibility-values' 	=> 'posts,page',
				'data-visibility-prefix'	=> 'ov-homepage',
				'switch-values' => array(
					'posts'  	=> 'Latest Posts',
					'page'	 	=> 'Static Page',
				),
			),
			'page_on_front' => array(
				'title'				 => 'Portfolio Homepage',
				'size'				 => 'span2',
				'data-input-type'    => 'select-box',
				'class'			  	 => 'admin-listen-handler',
				'data-handler'       => 'settings',
				'default'			 => '1',
				'data-settings-type' => 'general',
				'style-class'		 => 'ov-homepage-page',
				'select-box-values' => semplice_get_post_dropdown('page'),
			),
			'page_for_posts' => array(
				'title'				 => 'Blog Homepage',
				'size'				 => 'span2',
				'data-input-type'    => 'select-box',
				'class'			  	 => 'admin-listen-handler',
				'data-handler'       => 'settings',
				'default'			 => '1',
				'data-settings-type' => 'general',
				'style-class'		 => 'ov-homepage-page',
				'select-box-values' => semplice_get_post_dropdown('page'),
			),
		),
		'frontend_mode' => array(
			'title' => 'Frontend Mode',
			'description' => '\'Single Page App\' means that your website loads new content without page reloads to create a better flow & seamless page transitions. If you prefer the classic version with normal page reloads please select \'Static\'. (page transitions are not supported in \'Static\' mode) You can customize your page transitions <a href="#customize/transitions">here</a>.<br /><br /><span class="warning">Important</span><br />The \'Single Page App\' mode is experimental. If you experience issues with plugins or if you miss some blog functionality (such as archives) please use the \'Static\' mode instead.',
			'frontend_mode' => array(
				'data-input-type' 			=> 'switch',
				'hide-title'				=> true,
				'switch-type'				=> 'twoway',
				'title'		 				=> 'Frontend mode',
				'size'		 				=> 'span4',
				'class'						=> 'admin-listen-handler',
				'data-handler'  			=> 'settings',
				'default' 	 				=> 'static',
				'data-settings-type'		=> 'general',
				'switch-values' => array(
					'static'  			=> 'Static',
					'dynamic'	 		=> 'Single Page App',
				),
			),
		),
		'static_transitions' => array(
			'title' => 'Static Page Transitions',
			'description' => 'If you run your site in \'Static\' mode there are default page transitions to make browsing your site feel a lot better out of the box. If you want to get no page transitions at all please set this option to \'Disabled\'',
			'static_transitions' => array(
				'data-input-type' 			=> 'switch',
				'hide-title'				=> true,
				'switch-type'				=> 'twoway',
				'title'		 				=> 'Frontend mode',
				'size'		 				=> 'span4',
				'class'						=> 'admin-listen-handler',
				'data-handler'  			=> 'settings',
				'default' 	 				=> 'enabled',
				'data-settings-type'		=> 'general',
				'switch-values' => array(
					'enabled'  			=> 'Enabled',
					'disabled'	 		=> 'Disabled',
				),
			),
		),
		'analytics' => array(
			'title'		  => 'Google Analytics',
			'description' => 'Your Google Analytics code must start with < script > and end with < /script > (without spaces).',
			'break'		  => '1',
			'google_analytics' => array(
				'title'				 => 'Google Analytics',
				'hide-title'		 => true,
				'size'				 => 'span4',
				'data-input-type'	 => 'textarea',
				'class'			  	 => 'admin-listen-handler',
				'data-handler'       => 'settings',
				'default'			 => '',
				'data-settings-type' => 'general',
				'placeholder'		=> 'Paste your Google Analytics code here',
			),
		),
		'favicon-upload' => array(
			'title'		  => 'Favicon',
			'description' => 'Upload your favicon here.<br />Format: png / Dimensions 32px*32px',
			'break'		  => '1',
			'favicon' => array(
				'title'				 => 'Favicon',
				'hide-title'		 => true,
				'size'				 => 'span2',
				'data-input-type'	 => 'admin-image-upload',
				'class'			  	 => 'admin-listen-handler',
				'data-handler'       => 'settings',
				'data-settings-type' => 'general',
				'data-upload'		 => 'favicon',
			),
		),
	),
);

?>