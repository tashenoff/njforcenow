<?php

//====================================================================
// Add New Color Option in Existing Colors Section in Customizer
//====================================================================

function diwp_customizer_add_colorPicker($wp_customize)
{

    // Add Settings 


    // Add Settings 
    $wp_customize->add_setting('diwp_theme_color', array(
        'default' => '#04bfbf',
    ));


    $wp_customize->add_setting('diwp_header_bgcolor', array(
        'default' => '#45ace0',
    ));


    // Add Controls
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'diwp_theme_color', array(
        'label' => 'Primary color',
        'section' => 'colors',
        'settings' => 'diwp_theme_color'

    )));


    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'diwp_header_bgcolor', array(
        'label' => 'Secondary color',
        'section' => 'colors',
        'settings' => 'diwp_header_bgcolor'
    )));
}

add_action('customize_register', 'diwp_customizer_add_colorPicker');

function diwp_generate_theme_option_css()
{

    $themeColor = get_theme_mod('diwp_theme_color');
    $header_bgcolor = get_theme_mod('diwp_header_bgcolor');

    if (!empty($themeColor)) :

?>
        <style type="text/css" id="diwp-theme-option-css">
            :root {
                --color-primary: <?php echo $header_bgcolor; ?>;
                --color-secondary: <?php echo $themeColor; ?>;
                /* ... */
            }
        </style>

<?php

    endif;
}

add_action('wp_head', 'diwp_generate_theme_option_css');
