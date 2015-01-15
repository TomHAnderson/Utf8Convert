<?php
/**
 * Configuration file generated by ZF Apigility Admin
 *
 * The previous config file has been stored in application.config.old
 */
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
        'Phpro\DoctrineHydrationModule',
        'ZF\\Apigility\\Doctrine\\Server',
        'DoctrineModule',
        'DoctrineORMModule',
        'DoctrineDataFixtureModule',
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
        'DatabaseApi'
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor'
        ),
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php'
        )
    )
);
