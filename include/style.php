<?php

function all4site_enqueue()
{
    wp_enqueue_style('all4site_css', get_template_directory_uri() . '/css/main.min.css');
    wp_enqueue_script('all4site_jq_source', get_template_directory_uri() . '/js/source.min.js', array(), '' ,  true);
    wp_enqueue_script('all4site_jq_main', get_template_directory_uri() . '/js/main.js', array(), '' ,  true);
    wp_enqueue_script('jquery');

}

function all4site_jquery_register()
{
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', ('http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'), false, null, true);
        wp_enqueue_script('jquery');
    }
}
