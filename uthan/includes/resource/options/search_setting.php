<?php

return  array(
    'title'      => esc_html__( 'Search Page Settings', 'uthan' ),
    'id'         => 'search_setting',
    'desc'       => '', 
    'subsection' => true,
    'fields'     => array(
	    array(
		    'id'      => 'search_source_type',
		    'type'    => 'button_set',
		    'title'   => esc_html__( 'Search Source Type', 'uthan' ),
		    'options' => array(
			    'd' => esc_html__( 'Default', 'uthan' ),
			    'e' => esc_html__( 'Elementor', 'uthan' ),
		    ),
		    'default' => 'd',
	    ),
	    array(
		    'id'       => 'search_elementor_template',
		    'type'     => 'select',
		    'title'    => __( 'Template', 'uthan' ),
		    'data'     => 'posts',
		    'args'     => [
			    'post_type' => [ 'elementor_library' ],
				'posts_per_page'=> -1,
		    ],
		    'required' => [ 'search_source_type', '=', 'e' ],
	    ),

	    array(
		    'id'       => 'search_default_st',
		    'type'     => 'section',
		    'title'    => esc_html__( 'Search Default', 'uthan' ),
		    'indent'   => true,
		    'required' => [ 'search_source_type', '=', 'd' ],
	    ),
	    array(
		    'id'      => 'search_page_banner',
		    'type'    => 'switch',
		    'title'   => esc_html__( 'Show Banner', 'uthan' ),
		    'desc'    => esc_html__( 'Enable to show banner on blog', 'uthan' ),
		    'default' => true,
	    ),
	    array(
		    'id'       => 'search_banner_title',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Banner Section Title', 'uthan' ),
		    'desc'     => esc_html__( 'Enter the title to show in banner section', 'uthan' ),
		    'required' => array( 'search_page_banner', '=', true ),
	    ),
	    array(
		    'id'       => 'search_page_background',
		    'type'     => 'media',
		    'url'      => true,
		    'title'    => esc_html__( 'Background Image', 'uthan' ),
		    'desc'     => esc_html__( 'Insert background image for banner', 'uthan' ),
		    'default'  => '',
		    'required' => array( 'search_page_banner', '=', true ),
	    ),

	    array(
		    'id'       => 'search_sidebar_layout',
		    'type'     => 'image_select',
		    'title'    => esc_html__( 'Layout', 'uthan' ),
		    'subtitle' => esc_html__( 'Select main content and sidebar alignment.', 'uthan' ),
		    'options'  => array(

			    'left'  => array(
				    'alt' => esc_html__( '2 Column Left', 'uthan' ),
				    'img' => get_template_directory_uri() . '/assets/images/redux/2cl.png',
			    ),
			    'full'  => array(
				    'alt' => esc_html__( '1 Column', 'uthan' ),
				    'img' => get_template_directory_uri() . '/assets/images/redux/1col.png',
			    ),
			    'right' => array(
				    'alt' => esc_html__( '2 Column Right', 'uthan' ),
				    'img' => get_template_directory_uri() . '/assets/images/redux/2cr.png',
			    ),
		    ),

		    'default' => 'right',
	    ),

	    array(
		    'id'       => 'search_page_sidebar',
		    'type'     => 'select',
		    'title'    => esc_html__( 'Sidebar', 'uthan' ),
		    'desc'     => esc_html__( 'Select sidebar to show at blog listing page', 'uthan' ),
		    'required' => array(
			    array( 'search_sidebar_layout', '=', array( 'left', 'right' ) ),
		    ),
		    'options'  => uthan_get_sidebars(),
	    ),
	   //
		array(
			'id'    => 'search_page_title',
			'type'  => 'text',
			'title' => esc_html__( 'Search Title', 'uthan' ),
			'desc'  => esc_html__( 'Enter Search section title that you want to show', 'uthan' ),

		),
		array(
			'id'    => 'search_page_text',
			'type'  => 'textarea',
			'title' => esc_html__( 'Search Page Description', 'uthan' ),
			'desc'  => esc_html__( 'Enter Search page description that you want to show.', 'uthan' ),

		),
	

		
	    array(
		    'id'       => 'search_default_ed',
		    'type'     => 'section',
		    'indent'   => false,
		    'required' => [ 'search_source_type', '=', 'd' ],
	    ),

    ),
);





