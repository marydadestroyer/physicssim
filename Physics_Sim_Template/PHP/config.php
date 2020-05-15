<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Physics Sim',
        'site_url' => 'http://physicssim.com/',
        'nav_menu' => [
            '' => 'home',
            'features' => 'features',
            'gettingStarted' => 'gettingStarted',
            'aboutUs' => 'aboutUs',
            'help' => 'help'
        ],
        /*'template_path' => 'template',*/
        'Content_path' => 'Content',
        'version' => 'v3.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}
?>
