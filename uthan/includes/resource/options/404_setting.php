<?php

return array(
	'title'      => esc_html__( '404 Page Settings', 'uthan' ),
	'id'         => '404_setting',
	'desc'       => '',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'      => '404_source_type',
			'type'    => 'button_set',
			'title'   => esc_html__( '404 Source Type', 'uthan' ),
			'options' => array(
				'd' => esc_html__( 'Default', 'uthan' ),
				'e' => esc_html__( 'Elementor', 'uthan' ),
			),
			'default' => 'd',
		),
		array(
			'id'       => '404_elementor_template',
			'type'     => 'select',
			'title'    => __( 'Template', 'uthan' ),
			'data'     => 'posts',
			'args'     => [
				'post_type' => [ 'elementor_library' ],
			],
			'required' => [ '404_source_type', '=', 'e' ],
		),
		array(
			'id'       => '404_default_st',
			'type'     => 'section',
			'title'    => esc_html__( '404 Default', 'uthan' ),
			'indent'   => true,
			'required' => [ '404_source_type', '=', 'd' ],
		),
		array(
			'id'      => '404_page_banner',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Banner', 'uthan' ),
			'desc'    => esc_html__( 'Enable to show banner on blog', 'uthan' ),
			'default' => true,
		),
		array(
			'id'       => '404_banner_title',
			'type'     => 'text',
			'title'    => esc_html__( 'Banner Section Title', 'uthan' ),
			'desc'     => esc_html__( 'Enter the title to show in banner section', 'uthan' ),
			'required' => array( '404_page_banner', '=', true ),
		),
		array(
			'id'       => '404_page_breadcrumb',
			'type'     => 'raw',
			'content'  => "<div style='background-color:#c33328;color:white;padding:20px;'>" . esc_html__( 'Use Yoast SEO plugin for breadcrumb.', 'uthan' ) . "</div>",
			'required' => array( '404_page_banner', '=', true ),
		),
		array(
			'id'       => '404_page_background',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Banner Image', 'uthan' ),
			'desc'     => esc_html__( 'Insert background image for banner', 'uthan' ),
			'required' => array( '404_page_banner', '=', true ),
		),

		array(
			'id'    => '404_title',
			'type'  => 'text',
			'title' => esc_html__( '404', 'uthan' ),
			'desc'  => esc_html__( 'Enter 404', 'uthan' ),

		),
		array(
			'id'    => '404_page_title',
			'type'  => 'text',
			'title' => esc_html__( '404 Title', 'uthan' ),
			'desc'  => esc_html__( 'Enter 404 section title that you want to show', 'uthan' ),

		),
		array(
			'id'    => '404_page_text',
			'type'  => 'textarea',
			'title' => esc_html__( '404 Page Description', 'uthan' ),
			'desc'  => esc_html__( 'Enter 404 page description that you want to show.', 'uthan' ),

		),
		/*array(
			'id'    => '404_page_form',
			'type'  => 'switch',
			'title' => esc_html__( 'Show Search Form', 'uthan' ),
			'desc'  => esc_html__( 'Enable to show search form on 404 page', 'uthan' ),
			'default'  => true,
		),*/
		array(
			'id'    => 'back_home_btn',
			'type'  => 'switch',
			'title' => esc_html__( 'Show Button', 'uthan' ),
			'desc'  => esc_html__( 'Enable to show back to home button.', 'uthan' ),
			'default'  => true,
		),
		array(
			'id'       => 'back_home_btn_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Button Label', 'uthan' ),
			'desc'     => esc_html__( 'Enter back to home button label that you want to show.', 'uthan' ),
			'default'  => esc_html__( 'Back To Home Page', 'uthan' ),
			'required' => array( 'back_home_btn', '=', true ),
		),
		
		

		array(
			'id'     => '404_post_settings_end',
			'type'   => 'section',
			'indent' => false,
		),

	),
);





