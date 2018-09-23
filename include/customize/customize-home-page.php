<?php

    $wp_customize->add_section('top_header', array(
        'title' => __('Header', 'all4site'),
        'priority' => 10,
        'panel' => 'home_page',
    ));
// Background for Top Header

    $wp_customize->add_setting('header_main', array(
        "default" => get_template_directory_uri() . '/img/header.png',
        "transport" => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'top_header_main_control',
        array(
            'label' => __('Картинка на бекграунд', 'all4site'),
            'description' => __('Выберите картнику'),
            'section' => 'top_header',
            'settings' => 'header_main',
        )));

// Logo for top herader

    $wp_customize->add_setting('header_logo_about', array(
        "default" => get_template_directory_uri() . '/img/logoHeaderAbout.png',
        "transport" => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'top_header_logo_about_control',
        array(
            'label' => __('Логотип', 'all4site'),
            'description' => __('Выберите картнику'),
            'section' => 'top_header',
            'settings' => 'header_logo_about',
        )));
// Phone and Email for top header
    $wp_customize->add_setting('top_header_small_text', array(
        "default" => 'life & family coaching',
        "transport" => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'header_small_text',
        array(
            'label' => __('Введите данные', 'all4site'),
            'description' => __('Введите данные'),
            'section' => 'top_header',
            'settings' => 'top_header_small_text',
        )));

    $wp_customize->add_setting('top_header_phone', array(
        "default" => '+38 (093) 773 21 27',
        "transport" => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'header_phone',
        array(
            'label' => __('Введите данные', 'all4site'),
            'description' => __('Введите данные'),
            'section' => 'top_header',
            'settings' => 'top_header_phone',
        )));

    $wp_customize->add_setting('top_header_email', array(
        "default" => 'beewinnercomua@gmail.com',
        "transport" => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'header_email',
        array(
            'label' => __('Введите данные', 'all4site'),
            'description' => __('Введите данные'),
            'section' => 'top_header',
            'settings' => 'top_header_email',
        )));
// Header big text
    $wp_customize->add_setting('top_header_big_text_one', array(
        "default" => 'взаимотношения',
        "transport" => 'refresh',
    ));
    $wp_customize->add_control(new wp_customize_control(
        $wp_customize,
        'header_big_text_one',
        array(
            'label' => __('взаимотношения', 'all4site'),
            'description' => __('взаимотношения'),
            'section' => 'top_header',
            'settings' => 'top_header_big_text_one',
        )));

    $wp_customize->add_setting('top_header_big_text_two', array(
        "default" => 'гармония в жизни',
        "transport" => 'refresh',
    ));
    $wp_customize->add_control(new wp_customize_control(
        $wp_customize,
        'header_big_text_two',
        array(
            'label' => __('гармония в жизни', 'all4site'),
            'description' => __('гармония в жизни'),
            'section' => 'top_header',
            'settings' => 'top_header_big_text_two',
        )));

    $wp_customize->add_setting('top_header_big_text_tree', array(
        "default" => 'личностный рост',
        "transport" => 'refresh',
    ));
    $wp_customize->add_control(new wp_customize_control(
        $wp_customize,
        'header_big_text_tree',
        array(
            'label' => __('личностный рост', 'all4site'),
            'description' => __('личностный рост'),
            'section' => 'top_header',
            'settings' => 'top_header_big_text_tree',
        )));


