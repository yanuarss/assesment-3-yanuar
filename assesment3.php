<?php

// print message above options
add_action('assesment_3_after_render', function($text='')
{
    echo 'Silahkan pilih timezone Anda<br/>';
});

// filter timezone options
add_filter('assesment_3_timezones', function($options=[])
{
    // get list of timezone
    $timezone = timezone_identifiers_list();
    // make value same as text
    return array_combine($timezone, $timezone);
});
