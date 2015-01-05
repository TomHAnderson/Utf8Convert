<?php

return array(
    'modules' => array(
        'ZF\\DevelopmentMode',
        'ZF\\Apigility',
        'ZF\\Apigility\\Provider',
        'ZF\\Apigility\\Documentation',
        'AssetManager',
        'ZF\\ApiProblem',
        'ZF\\Configuration',
        'ZF\\MvcAuth',
        'ZF\\OAuth2',
        'ZF\\Hal',
        'ZF\\ContentNegotiation',
        'ZF\\ContentValidation',
        'ZF\\Rest',
        'ZF\\Rpc',
        'ZF\\Versioning',
        'DoctrineModule',
        'DoctrineORMModule',
        'DoctrineDataFixtureModule',
// php5.4
//        'Phpro\\DoctrineHydrationModule',
//        'ZF\\Apigility\\Doctrine\\Server',
        'ZfcBase',
        'ZfcUser',
        'ZfcUserDoctrineORM',
        'ZfcAdmin',
        'ZfcUserAdmin',
        'MaglMarkdown',
        'Application',
        'Database',
        'Db',
        'DataVisualization',
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor'
        ),
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
    )
);
