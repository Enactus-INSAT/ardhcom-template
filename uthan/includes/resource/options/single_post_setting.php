<?php

return array(
	'title'      => esc_html__( 'Single Post Settings', 'uthan' ),
	'id'         => 'single_post_setting',
	'desc'       => '',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'      => 'single_source_type',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Single Post Source Type', 'uthan' ),
			'options' => array(
				'd' => esc_html__( 'Default', 'uthan' ),
				'e' => esc_html__( 'Elementor', 'uthan' ),
			),
			'default' => 'd',
		),
		array(
			'id'      => 'single_post_date',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Date', 'uthan' ),
			'desc'    => esc_html__( 'Enable to show post publish date on posts detail page', 'uthan' ),
			'default' => true,
		),
		array(
			'id'      => 'single_post_author',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Author', 'uthan' ),
			'desc'    => esc_html__( 'Enable to show author on posts detail page', 'uthan' ),
			'default' => true,
		),
		array(
			'id'      => 'single_post_comments',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Comments', 'uthan' ),
			'desc'    => esc_html__( 'Enable to show number of comments on posts single page', 'uthan' ),
			'default' => true,
		),
		array(
			'id'      => 'single_post_tag',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Tags', 'uthan' ),
			'desc'    => esc_html__( 'Enable to show post tags on posts single page', 'uthan' ),
			'default' => true,
		),
		array(
			'id'      => 'single_post_share',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Social Share', 'uthan' ),
			'desc'    => esc_html__( 'Enable to show social Share options', 'uthan' ),
			'default' => false,
		),
		array(
			'id'       => 'single_social_share',
			'type'     => 'sortable',
			'title'    => esc_html__( 'Post Sharing Icons', 'uthan' ),
			'subtitle' => esc_html__( 'Select icons to activate social sharing icons in post detail page', 'uthan' ),
			'required' => array( 'blog_post_share', '=', true ),
			'mode'     => 'checkbox',
			'required' => array( 'single_post_share', '=', true ),
			'options'  => array(
				'facebook'    => esc_html__( 'Facebook', 'uthan' ),
				'twitter'     => esc_html__( 'Twitter', 'uthan' ),
				'gplus'       => esc_html__( 'Google Plus', 'uthan' ),
				'digg'        => esc_html__( 'Digg Digg', 'uthan' ),
				'reddit'      => esc_html__( 'Reddit', 'uthan' ),
				'linkedin'    => esc_html__( 'Linkedin', 'uthan' ),
				'pinterest'   => esc_html__( 'Pinterest', 'uthan' ),
				'stumbleupon' => esc_html__( 'Sumbleupon', 'uthan' ),
				'tumblr'      => esc_html__( 'Tumblr', 'uthan' ),
				'email'       => esc_html__( 'Email', 'uthan' ),
			),
		),
		array(
			'id'       => 'single_default_st',
			'type'     => 'section',
			'title'    => esc_html__( 'Post Default', 'uthan' ),
			'indent'   => true,
			'required' => [ 'single_source_type', '=', 'd' ],
		),
		array(
			'id'       => 'single_section_default_ed',
			'type'     => 'section',
			'indent'   => false,
			'required' => [ 'single_source_type', '=', 'd' ],
		),
	),
);