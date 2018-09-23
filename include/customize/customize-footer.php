<?php
$wp_customize->add_section('footer', array(
    'title' => __('Footer', 'all4site'),
		'priority' => 11,
		'panel' => 'footer_page'
));


$wp_customize->add_setting('footer_work_mn', array(
    "default" => 'ПН 9-00 - 10-00',
    "transport" => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'footer_work_mn',
    array(
        'label' => __('ПН', 'all4site'),
        // 'description' => __('ПН'),
        'section' => 'footer',
        'settings' => 'footer_work_mn',
		)));

$wp_customize->add_setting('footer_work_tu', array(
    "default" => 'ВТ 9-00 - 10-00',
    "transport" => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'footer_work_tu',
    array(
        'label' => __('ВТ', 'all4site'),
        // 'description' => __('ВТ'),
        'section' => 'footer',
        'settings' => 'footer_work_tu',
		)));

$wp_customize->add_setting('footer_work_we', array(
    "default" => 'СР 9-00 - 10-00',
    "transport" => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'footer_work_we',
    array(
        'label' => __('СР', 'all4site'),
        // 'description' => __('СР'),
        'section' => 'footer',
        'settings' => 'footer_work_we',
		)));

$wp_customize->add_setting('footer_work_th', array(
    "default" => 'ЧТ 9-00 - 10-00',
    "transport" => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'footer_work_th',
    array(
        'label' => __('ЧТ', 'all4site'),
        // 'description' => __('ЧТ'),
        'section' => 'footer',
        'settings' => 'footer_work_th',
		)));

$wp_customize->add_setting('footer_work_fr', array(
    "default" => 'ПТ 9-00 - 10-00',
    "transport" => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'footer_work_fr',
    array(
        'label' => __('ПТ', 'all4site'),
        // 'description' => __('ПТ'),
        'section' => 'footer',
        'settings' => 'footer_work_fr',
		)));


