<?php


$skyline_slideshow_defaults = array(
    "duration" => array( "value" => 1500 ),
    "speed"    => array( "value" => 500 ),
);


add_action('init', function () {
    add_filter('colibri_theme_title_default_content', function($title) {
        return __('Don\'t wait for opportunities. <br/><em style="font-weight: 600;">Create them!</em>', 'skyline-wp');
    });
    add_filter('colibri_theme_subtitle_default_content', function($subtitle) {
        return __('Start creating your website today!','skyline-wp');
    });
});

return array(
	'blog_enable_masonry' => false,
    'lorem_ipsum'       => 'Lorem ipsum dolor sit amet',
    'header_front_page' => array(
        'hero'         => array(
            'hero_column_width' => 100,
            'image' => array('localProps' => array('url' => get_stylesheet_directory_uri() . '/resources/images/placeholder.png') ),
            'style'             => array(
                "background" => array(
                    'image'     =>
                        array(
                            0 =>
                                array(
                                    'source' =>
                                        array(
                                            'url' => get_stylesheet_directory_uri() . "/resources/images/landscape-nature-rock-wilderness-sunrise-sunset.jpg",
                                        )
                                )
                        ),
                    'color'     => 'rgb(53, 59, 62)',
					"slideshow" => $skyline_slideshow_defaults,
					'overlay'   => array(
                        'type'  => 'color',
                        'color' => array(
							'value' => '#0c1416',
                            'opacity' => 50
                        ),
                        'shape' =>
                            array(
                                'value'  => 'none',
                                'isTile' => false,
                            ),
                    )

                )
            )
        ),
        'title'        => array(
            'style' => array(
                'textAlign' => 'center',
            )
        ),
        'subtitle'     => array(
			'value' => 'Lorem ipsum dolor sit amet',
            'style' => array(
                'textAlign' => 'center',
            ),
            "value" => '',

        ),
        'button_group' => array(
            'style' => array(
                'textAlign' => 'center',
            )
        ),
    ),

    'header_post' => array(
        'hero'  => array(
            'style' => array(
                "background" => array(
                    'image'     =>
                        array(
                            0 =>
                                array(
                                    'source' =>
                                        array(
                                            'url' => get_stylesheet_directory_uri() . "/resources/images/cropped-landscape-nature-rock-wilderness-sunrise-sunset.jpg",
                                        )
                                )
                        ),
                    "slideshow" => $skyline_slideshow_defaults,
                    'color'     => 'rgb(53, 59, 62)',
                    'overlay'   => array(
                        'type'    => 'color',
                        'enabled' => true,
                        'color'   => array(
							'value' => '#0c1416',
                            'opacity' => 50
                        ),
                        'shape'   =>
                            array(
                                'value'  => 'none',
                                'isTile' => false,
                            ),
                    )

                )
            )
        ),
        'title' => array(
            'show' => true
        )
    ),

    'footer_post' =>
        array(
            'footer' =>
                array(

                    'props' =>
                        array(
                            'useFooterParallax' => false,
                        ),
                ),
        ),

    'blog_posts_per_row'                => 2,
    'blog_show_post_thumb_placeholder'  => false,
    'blog_post_thumb_placeholder_color' => 'rgb(247, 144, 7)'
);
