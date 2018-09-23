<?php
$wp_customize->add_section('about_me', array(
    'title' => __('JustDoIt', 'all4site'),
    'priority' => 10,
    'panel' => 'aboutMe_page',
));


$wp_customize->add_setting('about_me_justdoit', array(
    "default" => 'just do it and be',
    "transport" => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'about_me_justdoit',
    array(
        'label' => __('just do it and be', 'all4site'),
        'description' => __('just do it and be'),
        'section' => 'about_me',
        'settings' => 'about_me_justdoit',
		)));


$wp_customize->add_setting('about_me_bewinner', array(
    "default" => 'a winner in your life!',
    "transport" => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'about_me_bewinner',
    array(
        'label' => __('a winner in your life!', 'all4site'),
        'description' => __('a winner in your life!'),
        'section' => 'about_me',
        'settings' => 'about_me_bewinner',
    )));
