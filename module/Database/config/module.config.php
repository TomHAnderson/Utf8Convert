<?php

namespace Database;

return array(
    'doctrine' => array(
        'configuration' => array(
            'orm_default' => array(
                'string_functions' => array(
                    'char_length'  => 'DoctrineExtensions\Query\Mysql\CharLength'
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Database\Controller\Index' => 'Database\Controller\IndexController',
            'Database\Controller\Data' => 'Database\Controller\DataController',
            Controller\ConversionController::class => Controller\ConversionController::class,
            'Database\Controller\Database' => 'Database\Controller\DatabaseController',
        ),
        'factories' => [
            Controller\ValidateController::class => Controller\ValidateControllerFactory::class,
        ],
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__.'/../view',
        ),
    ),

    'console' => array(
        'router' => array(
            'routes' => array(
                'database-validate' => array(
                    'type'    => 'simple',
                    'options' => array(
                        'route'    => 'database:validate',
                        'defaults' => array(
                            'controller'    => Controller\ValidateController::class,
                            'action'        => 'validate',
                        ),
                    ),
                ),
                'database-generate-utf8tables' => array(
                    'type'    => 'simple',
                    'options' => array(
                        'route'    => 'database:generate:utf8-tables',
                        'defaults' => array(
                            'controller'    => 'Database\Controller\Index',
                            'action'        => 'databaseGenerateUtf8Tables',
                        ),
                    ),
                ),
                'database-truncate' => array(
                    'type'    => 'simple',
                    'options' => array(
                        'route'    => 'database:truncate',
                        'defaults' => array(
                            'controller'    => 'Database\Controller\Database',
                            'action'        => 'truncateUtf8ConvertDatabase',
                        ),
                    ),
                ),
                'conversion-create' => array(
                    'type'    => 'simple',
                    'options' => array(
                        'route'    => 'conversion:create [--name=conversionName] [--whitelist=] [--blacklist=]',
                        'defaults' => array(
                            'controller'    => 'Database\Controller\Conversion',
                            'action'        => 'create',
                        ),
                    ),
                ),
                'conversion-convert' => array(
                    'type'    => 'simple',
                    'options' => array(
                        'route'    => 'conversion:convert --name= [--force]',
                        'defaults' => array(
                            'controller'    => 'Database\Controller\Conversion',
                            'action'        => 'convert',
                        ),
                    ),
                ),
                'conversion-export' => array(
                    'type'    => 'simple',
                    'options' => array(
                        'route'    => 'conversion:export --name=conversionName',
                        'defaults' => array(
                            'controller'    => 'Database\Controller\Conversion',
                            'action'        => 'export',
                        ),
                    ),
                ),
                'conversion-clone' => array(
                    'type'    => 'simple',
                    'options' => array(
                        'route'    => 'conversion:clone [--from=] [--to=]',
                        'defaults' => array(
                            'controller'    => 'Database\Controller\Conversion',
                            'action'        => 'clone',
                        ),
                    ),
                ),
            ),
        ),
    ),
);
