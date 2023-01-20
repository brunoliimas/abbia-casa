<?php

add_filter( 'themerain_customizer', function() {
	
	$sections[] = array(
		'label'    => 'Footer',
		'controls' => array(
			array(
				'label'    => 'First Column',
				'id'       => 'etc_footer_1',
				'type'     => 'textarea'
			),
			array(
				'label'    => 'Second Column',
				'id'       => 'etc_footer_2',
				'type'     => 'textarea'
			),
			array(
				'label'    => 'Third Column',
				'id'       => 'etc_footer_3',
				'type'     => 'textarea'
			),
			array(
				'label'    => 'Fourth Column',
				'id'       => 'etc_footer_4',
				'type'     => 'textarea'
			)
		)
	);

	return $sections;
} );
