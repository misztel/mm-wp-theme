<?php

// Theme blocks category registration
function mytheme123_block_categories( $categories ) {
	return array_merge(
		[
			[
				'slug'  => 'mytheme123',
				'title' => __( 'mytheme123 Blocks', 'mytheme123-boilerplate' ),
			],
		],
    $categories
	);
}
add_action( 'block_categories_all', 'mytheme123_block_categories', 10, 2 );


// Blocks
add_action('acf/init', 'mytheme123_blocks');
function mytheme123_blocks() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'testimonial',
            'title'             => __('Testimonial'),
            'description'       => __('A custom testimonial block.'),
            'render_template'   => 'template-parts/blocks/testimonial/testimonial.php',
            'category'          => 'mytheme123',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));

        // register a Logo Carousel block.
        acf_register_block_type(array(
            'name'              => 'slider',
            'title'             => __('Slider'),
            'description'       => __('A custom logo carousel.'),
            'render_template'   => 'template-parts/blocks/slider/slider.php',
            'category'          => 'mytheme123',
            'icon'              => 'images-alt2',
            'keywords'          => array( 'carousel', 'logo' ),
            'enqueue_assets'    => function(){
              wp_enqueue_style( 'slick', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1' );
              wp_enqueue_style( 'slick-theme', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.8.1' );
              wp_enqueue_script( 'slick', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true );

              wp_enqueue_style( 'block-slider', get_template_directory_uri() . '/template-parts/blocks/slider/slider.css', array(), '1.0.0' );
              wp_enqueue_script('block-slider', get_template_directory_uri() . '/template-parts/blocks/slider/slider.js', array(), '1.0.0', true);
            }
        ));

        // register a Post Slider block.
        acf_register_block_type(array(
            'name'              => 'postslider',
            'title'             => __('Post Slider'),
            'description'       => __('_mytheme post slider block.'),
            'render_template'   => 'template-parts/blocks/postSlider/postSlider.php',
            'category'          => 'mytheme123',
            'icon'              => 'images-alt2',
            'keywords'          => array( 'slider', 'posts' ),
            'enqueue_assets'    => function(){
              wp_enqueue_style( 'slick', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1' );
              wp_enqueue_style( 'slick-theme', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.8.1' );
              wp_enqueue_script( 'slick', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true );

              wp_enqueue_style( 'block-postslider', get_template_directory_uri() . '/template-parts/blocks/postSlider/postSlider.css', array(), '1.0.0' );
              wp_enqueue_script('block-postslider', get_template_directory_uri() . '/template-parts/blocks/postSlider/postSlider.js', array(), '1.0.0', true);
            }
        ));
    }
}

?>
