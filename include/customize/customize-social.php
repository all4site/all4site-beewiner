<?php
$wp_customize->add_section('social', array(
    'title' => __('SOCIAL', 'all4site'),
    'priority' => 11,
));


$wp_customize->add_setting('social_facebook', array(
    "default" => 'Facebook',
    "transport" => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'social_facebook',
    array(
        'label' => __('Facebook', 'all4site'),
        'section' => 'social',
        'settings' => 'social_facebook',
		)));

$wp_customize->add_setting('social_youtube', array(
    "default" => 'Youtube',
    "transport" => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'social_youtube',
    array(
        'label' => __('Youtube', 'all4site'),
        'section' => 'social',
        'settings' => 'social_youtube',
		)));

$wp_customize->add_setting('social_instagram', array(
    "default" => 'Instagram',
    "transport" => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'social_instagram',
    array(
        'label' => __('Instagram', 'all4site'),
        'section' => 'social',
        'settings' => 'social_instagram',
		)));
