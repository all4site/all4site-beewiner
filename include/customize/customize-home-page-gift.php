<?php
$wp_customize->add_section('top_header_gift', array(
    'title' => __('Подарок', 'all4site'),
    'priority' => 11,
    'panel' => 'home_page',
));


$wp_customize->add_setting('header_gift_h1', array(
    "default" => 'для вдохновения',
    "transport" => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'top_header_main_gift_h1',
    array(
        'label' => __('для вдохновения', 'all4site'),
        'description' => __('для вдохновения'),
        'section' => 'top_header_gift',
        'settings' => 'header_gift_h1',
		)));


$wp_customize->add_setting('header_gift_span_1', array(
    "default" => 'Подпишись на новости и получи подарок -',
    "transport" => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'top_header_main_gift_span_1',
    array(
        'label' => __('Подпишись на новости и получи подарок -', 'all4site'),
        'description' => __('Подпишись на новости и получи подарок -'),
        'section' => 'top_header_gift',
        'settings' => 'header_gift_span_1',
		)));


$wp_customize->add_setting('header_gift_span_2', array(
    "default" => 'видое - урок',
    "transport" => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'top_header_main_gift_span_2',
    array(
        'label' => __('видое - урок', 'all4site'),
        'description' => __('видое - урок'),
        'section' => 'top_header_gift',
        'settings' => 'header_gift_span_2',
		)));


$wp_customize->add_setting('header_gift_span_3', array(
    "default" => '"Как навести порчу"',
    "transport" => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'top_header_main_gift_span_3',
    array(
        'label' => __('"Как навести порчу"', 'all4site'),
        'description' => __('"Как навести порчу"'),
        'section' => 'top_header_gift',
        'settings' => 'header_gift_span_3',
		)));



