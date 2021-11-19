<?php

function mytheme123_customize_register( $wp_customize ) {

  class mytheme123_Image_Radio_Control extends WP_Customize_Control {

    public function render_content() {

        if (empty($this->choices))
            return;

        $name = '_customize-radio-' . $this->id;
        ?>
        <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
        <ul class="controls" id='mytheme123-img-container'>
            <?php
            foreach ($this->choices as $value => $label) :
                $class = ($this->value() == $value) ? 'mytheme123-radio-img-selected mytheme123-radio-img-img' : 'mytheme123-radio-img-img';
                ?>
                <li style="display: inline;">
                    <label>
                        <input <?php $this->link(); ?>style = 'display:none' type="radio" value="<?php echo esc_attr($value); ?>" name="<?php echo esc_attr($name); ?>" <?php
                                                      $this->link();
                                                      checked($this->value(), $value);
                                                      ?> />
                        <img src='<?php echo esc_url($label); ?>' class='<?php echo esc_attr($class); ?>' />
                    </label>
                </li>
                <?php
            endforeach;
            ?>
        </ul>
        <?php
    }
  }

  /*#### SITE IDENTITY ####*/
  $wp_customize->get_setting('blogname')->transport = 'postMessage';

  $wp_customize->selective_refresh->add_partial('blogname', array(
    'selector' => '.blogname',
    'container_inclusive' => false,
    'render_callback' => function() {
      bloginfo('name');
    }
  ));

  /*#### SINGLE SETTINGS ####*/
  $wp_customize->add_section('mytheme123_single_blog_options', array(
    'title' => esc_html__('Single Blog Options', 'mytheme123'),
    'description' => esc_html__('Change single blog options', 'mytheme123')
  ));

  $wp_customize->add_setting('mytheme123_display_author_info', array(
    'default' => true,
    'sanitize_callback' => 'mytheme123_sanitize_checkbox'
  ));

  $wp_customize->add_control('mytheme123_display_author_info', array(
    'type' => 'checkbox',
    'label' => esc_html__('Show Author Info', 'mytheme123'),
    'section' => 'mytheme123_single_blog_options'
  ));

  function mytheme123_sanitize_checkbox( $checked ){
    return (isset($checked) && $checked === true) ? true : false;
  }

  /*#### GENERAL SETTINGS ####*/
  $wp_customize->add_section('mytheme123_general_options', array(
    'title' => esc_html__('General Options', 'mytheme123'),
    'description' => esc_html__('Change general options', 'mytheme123')
  ));

  $wp_customize->add_setting('mytheme123_accent_color', array(
    'default' => '#84d2f6',
    'transport' => 'postMessage',
    'sanitize_callback' => 'sanitize_hex_color'
  ));

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mytheme123_accent_color', array(
    'label' => __('Accent Color', 'mytheme123'),
    'section' => 'mytheme123_general_options'
  )));

  /*#### FOOTER SETTINGS ####*/

  $wp_customize->selective_refresh->add_partial('_theme_footer_partial', array(
    'settings' => array('mytheme123_site_info', 'mytheme123_footer_bg', 'mytheme123_layout'),
    'selector' =>  '.footer',
    'container_inclusive' => false,
    'render_callback' => function(){
      get_template_part('template-parts/footer/widgets');
      get_template_part('template-parts/footer/info');
    }
  ));

  $wp_customize->add_section('mytheme123_footer_options', array(
    'title' => esc_html__('Footer Options', 'mytheme123'),
    'description' => esc_html__('Change footer options', 'mytheme123'),
    'priority' => 30
  ));

  $wp_customize->add_setting('mytheme123_site_info', array(
    'default' => '',
    'sanitize_callback' => 'mytheme123_sanitize_site_info',
    'transport' => 'postMessage'
  ));

  $wp_customize->add_control('mytheme123_site_info', array(
    'type' => 'text',
    'label' => esc_html__('Site Info', 'mytheme123'),
    'section' => 'mytheme123_footer_options'
  ));

  $wp_customize->add_setting('mytheme123_footer_bg', array(
    'default' => 'dark',
    'sanitize_callback' => 'mytheme123_sanitize_footer_bg',
    'transport' => 'postMessage'
  ));

  $wp_customize->add_control('mytheme123_footer_bg', array(
    'type' => 'select',
    'label' => esc_html__('Footer Background', 'mytheme123'),
    'choices' => array(
      'light' => esc_html__('Light', 'mytheme123'),
      'dark' => esc_html__('Dark', 'mytheme123')
    ),
    'section' => 'mytheme123_footer_options'
  ));

  $wp_customize->add_setting('mytheme123_layout', array(
    'default' => '3,3,3,3',
    'sanitize_callback' => 'mytheme123_sanitize_layout',
    'transport' => 'postMessage'
  ));

  $wp_customize->add_control(new mytheme123_Image_Radio_Control($wp_customize,'mytheme123_layout', array(
    'type' => 'radio',
    'label' => esc_html__('Layout', 'mytheme123'),
    'choices' => array(
      '4,4,4' => esc_html__(get_template_directory_uri() . '/src/assets/images/layout_3_column.png', 'mytheme123'),
      '3,3,3,3' => esc_html__(get_template_directory_uri() . '/src/assets/images/layout_4_column.png', 'mytheme123'),
      '6,6' => esc_html__(get_template_directory_uri() . '/src/assets/images/layout_2_column.png', 'mytheme123'),
      '4,8' => esc_html__(get_template_directory_uri() . '/src/assets/images/layout_2-1_column.png', 'mytheme123'),
      '8,4' => esc_html__(get_template_directory_uri() . '/src/assets/images/layout_2-2_column.png', 'mytheme123')
    ),
    'section' => 'mytheme123_footer_options'
  )));
}
add_action('customize_register', 'mytheme123_customize_register');

function mytheme123_sanitize_footer_bg($input){
  $valid = array('light', 'dark');
  if( in_array($input, $valid, true)){
    return $input;
  }
  return 'dark';
}

function mytheme123_sanitize_layout($input){
  $valid = array('4,4,4', '3,3,3,3', '6,6', '4,8', '8,4');
  if( in_array($input, $valid, true)){
    return $input;
  }
  return '3,3,3,3';
}

function mytheme123_sanitize_site_info ($input) {
  $allowed = array ('a' => array(
    'href' => array(),
    'title' => array()
  ));
  return wp_kses($input, $allowed);
}

?>
