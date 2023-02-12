<?php
$styles = [];
foreach(range(1, 28) as $val) {
    $styles[$val] = sprintf(esc_html__('Style %s', 'uthan'), $val);
}

return  array(
    'title'      => esc_html__( 'General Setting', 'uthan' ),
    'id'         => 'general_setting',
    'desc'       => '',
    'icon'       => 'el el-wrench',
    'fields'     => array(
         array(
            'id' => 'theme_color_scheme',
            'type' => 'color',
            'output' => array('.site-title'),
            'title' => esc_html__('Color Scheme', 'uthan'),
            'default' => '#2f7955',
            'transparent' => false
        ),
		
		 array(
            'id' => 'to_top',
            'type' => 'switch',
            'title' => esc_html__('Hide Scroll To Top', 'uthan'),
            'default' => false,
        ),
		 array(
            'id' => 'theme_rtl',
            'type' => 'switch',
            'title' => esc_html__('Select RTL', 'uthan'),
            'default' => false,
        ),
		array(
            'id' => 'theme_preloader',
            'type' => 'switch',
            'title' => esc_html__('Enable Preloader', 'uthan'),
            'default' => false,
        ),
		array(
			'id'      => 'preloader_text',
			'type'    => 'textarea',
			'title'   => __( 'Preloader Text', 'amortez' ),
			'desc'    => esc_html__( 'Enter the Preloader Text', 'amortez' ),
			
		),
		
    ),
);
