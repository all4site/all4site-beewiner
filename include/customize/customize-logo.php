<?php

$wp_customize->add_section('logo', array(
    'title' => __('LOGO', 'all4site'),
    'priority' => 10,
));

// Logo for top herader

$wp_customize->add_setting('header_logo_all', array(
    "default" => get_template_directory_uri() . '/img/logoColor.png',
    "transport" => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'header_logo_all',
    array(
        'label' => __('Логотип', 'all4site'),
        'description' => __('Выберите картнику'),
        'section' => 'logo',
        'settings' => 'header_logo_all',
    )));
