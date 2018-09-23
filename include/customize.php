<?php
function all4site_customize_register($wp_customize)
{
    require get_template_directory() . '/include/customize/customize-home-page.php';
    require get_template_directory() . '/include/customize/customize-home-page-justdoit.php';
    require get_template_directory() . 'inc';

// add panels
    $wp_customize->add_panel('home_page', array(
        'priority' => 10,
        'title' => ('HOME'),
    ));
//remove panels
    $wp_customize->remove_section(custom_css);
    $wp_customize->remove_section(title_tagline);
    $wp_customize->remove_section(static_front_page);
}
