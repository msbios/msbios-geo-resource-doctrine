<?php

return [
    // Retrieve list of modules used in this application.
    'modules' => [
        'Zend\Router',
        'Zend\I18n',

        'DoctrineModule',
        'DoctrineORMModule',

        'MSBios\Session',
        'MSBios\Doctrine',
        'MSBios\I18n',
        'MSBios\I18n\Doctrine',
        'MSBios\Geo\Resource\Doctrine',
    ],
    'module_listener_options' => [
        'module_paths' => [
            './module',
            './vendor',
        ],
        'config_glob_paths' => [
            realpath(__DIR__) . '/autoload/{{,*.}global,{,*.}local}.php',
        ],
        'config_cache_enabled' => false,
        // 'config_cache_key' => 'application.config.cache',
        'module_map_cache_enabled' => false,
        // 'module_map_cache_key' => 'application.module.cache',
        'cache_dir' => 'data/cache/',
    ]
];
