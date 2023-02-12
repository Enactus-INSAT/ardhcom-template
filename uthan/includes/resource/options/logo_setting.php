<?php
return array(
	'title'      => esc_html__( 'Logo Setting', 'uthan' ),
	'id'         => 'logo_setting',
	'desc'       => '',
	'subsection' => false,
	'fields'     => array(
		array(
			'id'       => 'image_favicon',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Favicon', 'uthan' ),
			'subtitle' => esc_html__( 'Insert site favicon image', 'uthan' ),
			'default'  => array( 'url' => get_template_directory_uri() . '/assets/images/favicon.ico' ),
		),
	
		array(
			'id'       => 'image_normal_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo One', 'uthan' ),
			'subtitle' => esc_html__( 'Insert site Dark logo image', 'uthan' ),
	
		),
		array(
			'id'       => 'normal_logo_dimension',
			'type'     => 'dimensions',
			'title'    => esc_html__( ' Logo Dimentions', 'uthan' ),
			'subtitle' => esc_html__( 'Select Dark Logo Dimentions', 'uthan' ),
			'units'    => array( 'em', 'px', '%' ),
			'default'  => array( 'Width' => '', 'Height' => '' ),
			'required' => array( 'normal_logo_show', '=', true ),
		),

		array(
			'id'       => 'image_normal_logo2',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Two', 'uthan' ),
			'subtitle' => esc_html__( 'Insert site Light logo image', 'uthan' ),
		),
		array(
			'id'       => 'normal_logo_dimension2',
			'type'     => 'dimensions',
			'title'    => esc_html__( ' Logo Dimentions', 'uthan' ),
			'subtitle' => esc_html__( 'Select Light Dimentions', 'uthan' ),
			'units'    => array( 'em', 'px', '%' ),
			'default'  => array( 'Width' => '', 'Height' => '' ),
			'required' => array( 'normal_logo_show2', '=', true ),
		),
		array(
			'id'       => 'image_normal_logo3',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Three', 'uthan' ),
			'subtitle' => esc_html__( 'Insert site Mobile logo image', 'uthan' ),
		),
		array(
			'id'       => 'normal_logo_dimension3',
			'type'     => 'dimensions',
			'title'    => esc_html__( ' Logo Dimentions', 'uthan' ),
			'subtitle' => esc_html__( 'Select Mobile Logo Dimentions', 'uthan' ),
			'units'    => array( 'em', 'px', '%' ),
			'default'  => array( 'Width' => '', 'Height' => '' ),
			'required' => array( 'normal_logo_show3', '=', true ),
		),
		array(
			'id'       => 'image_normal_logo4',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Four', 'uthan' ),
			'subtitle' => esc_html__( 'Insert site Mobile logo image', 'uthan' ),
		),
		array(
			'id'       => 'normal_logo_dimension4',
			'type'     => 'dimensions',
			'title'    => esc_html__( ' Logo Dimentions', 'uthan' ),
			'subtitle' => esc_html__( 'Select Mobile Logo Dimentions', 'uthan' ),
			'units'    => array( 'em', 'px', '%' ),
			'default'  => array( 'Width' => '', 'Height' => '' ),
			'required' => array( 'normal_logo_show3', '=', true ),
		),
		array(
			'id'       => 'logo_settings_section_end',
			'type'     => 'section',
			'indent'      => false,
		),
	),
);
