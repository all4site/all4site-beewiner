<?php
$wp_customize->add_section('top_header_course_three', array(
    'title' => __('Курс третий', 'all4site'),
    'priority' => 12,
    'panel' => 'home_page',
));


$wp_customize->add_setting('header_course_three_h1', array(
    "default" => 'хочу замуж',
    "transport" => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'top_header_course_three_h1',
    array(
        'label' => __('хочу замуж', 'all4site'),
        'description' => __('хочу замуж'),
        'section' => 'top_header_course_three',
        'settings' => 'header_course_three_h1',
		)));

$wp_customize->add_setting('header_course_three_icon', array(
    "default" => 'far fa-heart',
    "transport" => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'top_header_course_three_icon',
    array(
        'label' => __('far fa-heart', 'all4site'),
        'description' => __('far fa-heart'),
        'section' => 'top_header_course_three',
        'settings' => 'header_course_three_icon',
		)));

$wp_customize->add_setting('header_course_three_text', array(
    "default" => 'Curabitur aliquet quam id dui posuere blandit. Dthreec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
    "transport" => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'top_header_course_three_text',
    array(
        'label' => __('Введите текст', 'all4site'),
        'description' => __('Введите текст'),
        'section' => 'top_header_course_three',
				'settings' => 'header_course_three_text',
				'type' => 'textarea',
		)));

$wp_customize->add_setting('header_course_three_button', array(
    "default" => '#!',
    "transport" => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'top_header_course_three_button',
    array(
        'label' => __('Введите ссылку на урок', 'all4site'),
        'description' => __('Введите ссылку на урок'),
        'section' => 'top_header_course_three',
				'settings' => 'header_course_three_button',
		)));





