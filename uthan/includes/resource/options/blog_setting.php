<?php

return array(
	'title'  => esc_html__( 'Blog Page Settings', 'uthan' ),
	'id'     => 'blog_setting',
	'desc'   => '',
	'icon'   => 'el el-indent-left',
	'fields' => array(
		array(
			'id'      => 'blog_source_type',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Blog Source Type', 'uthan' ),
			'options' => array(
				'd' => esc_html__( 'Default', 'uthan' ),
				'e' => esc_html__( 'Elementor', 'uthan' ),
			),
			'default' => 'd',
		),
		array(
			'id'       => 'blog_elementor_template',
			'type'     => 'select',
			'title'    => __( 'Template', 'uthan' ),
			'data'     => 'posts',
			'args'     => [
				'post_type' => [ 'elementor_library' ],
				'posts_per_page'=> -1,
			],
			'required' => [ 'blog_source_type', '=', 'e' ],
		),
		array(
			'id'       => 'blog_default_st',
			'type'     => 'section',
			'title'    => esc_html__( 'Blog Default', 'uthan' ),
			'indent'   => true,
			'required' => [ 'blog_source_type', '=', 'd' ],
		),
		array(
			'id'      => 'blog_post_date',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Post Date', 'uthan' ),
			'desc'    => esc_html__( 'Enable to show post data on posts listing', 'uthan' ),
			'default' => false,
		),
		array(
			'id'      => 'blog_post_author',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Author', 'uthan' ),
			'desc'    => esc_html__( 'Enable to show author on posts listing', 'uthan' ),
			'default' => false,
		),
			array(
			'id'      => 'blog_post_comment',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Comment', 'uthan' ),
			'desc'    => esc_html__( 'Enable to show Comment Number', 'uthan' ),
			'default' => false,
		),
		array(
			'id'      => 'blog_post_readmore',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Blog Read More', 'uthan' ),
			'desc'    => esc_html__( 'Enable to show post data on posts listing', 'uthan' ),
			'default' => true,
		),
		array(
		    'id'       => 'blog_post_readmoretext',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Read More Text', 'uthan' ),
		    'desc'     => esc_html__( 'Enter Read More Text to Show.', 'uthan' ),
			'default'  => esc_html__( 'Read More', 'uthan' ),
	    ),
		array(
			'id'       => 'blog_default_ed',
			'type'     => 'section',
			'indent'   => false,
			'required' => [ 'blog_source_type', '=', 'd' ],
		),
	),
);