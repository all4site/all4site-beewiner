<?php
$wp_customize->add_section('top_header_justdoit', array(
    'title' => __('JustDoIt', 'all4site'),
    'priority' => 10,
    'panel' => 'home_page',
));


$wp_customize->add_setting('header_main_justdoit', array(
    "default" => 'just do it and be',
    "transport" => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'top_header_main_jusdoit_top',
    array(
        'label' => __('just do it and be', 'all4site'),
        'description' => __('just do it and be'),
        'section' => 'top_header_justdoit',
        'settings' => 'header_main_justdoit',
		)));


$wp_customize->add_setting('header_main_bewinner', array(
    "default" => 'a winner in your life!',
    "transport" => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'top_header_main_jusdoit_bottom',
    array(
        'label' => __('a winner in your life!', 'all4site'),
        'description' => __('a winner in your life!'),
        'section' => 'top_header_justdoit',
        'settings' => 'header_main_bewinner',
    )));
