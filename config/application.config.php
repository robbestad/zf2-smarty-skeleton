<?php
return array(
    'modules' => array(
        'Application',
        'ZfcBase',
        'ZfcUser',
        'SmartyModule',
        'ZendDeveloperTools',
        'Twigly',
        'DluPhpSettings',
        'ZF2NetteDebug'
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        'module_paths' => array(
            './module',
            './vendor',
        ),
    ),
);
