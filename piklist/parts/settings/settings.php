<?php

/*
Title: Theme Settings Section
Setting: my_theme_settings
*/
piklist('field', array(
    'type'      => 'textarea',
    'field'     => 'address',
    'label'     => __('Address','sage'),
    'columns'   => 6
));

piklist('field', array(
    'type'      => 'text',
    'field'     => 'google_maps',
    'label'     => __('Google maps URL','sage'),
    'columns'   => 12
));
