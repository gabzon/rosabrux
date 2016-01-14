<?php

/*
Title: Options
Post Type: post
*/

piklist('field', array(
    'type' => 'text',
    'field' => 'width',
    'label' => __('Largeur'),
));

piklist('field', array(
    'type' => 'select',
    'field' => 'border_color',
    'value' => '000000',
    'label' => __('Border color'),
    'choices' => array(
        'black'       => 'noir',
        '#371d94'     => 'violet',
        '#e30914'     => 'rouge',
        '#fed216'     => 'jaune',
        'white' => 'blanc'
    )
));

piklist('field', array(
    'type' => 'select',
    'field' => 'font_color',
    'value' => '000000',
    'label' => __('Font color'),
    'choices' => array(
        'black'    => 'noir',
        '#371d94'   => 'violet',
        '#f9001c'   => 'rouge',
        '#fed216'   => 'jaune'
    )
));

piklist('field', array(
    'type' => 'select',
    'field' => 'margin_border',
    'value' => '40px',
    'label' => __('Margin'),
    'choices' => array(
        '0'      => '0px',
        '10px'   => '10px',
        '20px'   => '20px',
        '30px'   => '30px',
        '40px'   => '40px',
        '50px'   => '50px',
        '60px'   => '60px',
        '70px'   => '70px',
        '80px'   => '80px'
    )
));

?>
