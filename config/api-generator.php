<?php

return [
    'authorization' => [
        'user_class'     => 'CmsAdmin',
        'user_namespace' => 'App\\Models',
        'user_var_name'  => 'cmsAdmin',
        'user_title'     => 'CMS Admin',
    ],

    'controller' => [
        'namespace' => 'App\\Http\\Controllers',
        'path'      => 'app'.DIRECTORY_SEPARATOR.'Http'.DIRECTORY_SEPARATOR.'Controllers',
    ],

    'model' => [
        'namespace' => 'App\\Models',
        'path'      => 'app'.DIRECTORY_SEPARATOR.'Models',
    ],

    'policy' => [
        'namespace' => 'App\\Policies',
        'path'      => 'app'.DIRECTORY_SEPARATOR.'Policies',
    ],

    'query' => [
        'namespace' => 'App\\QueryBuilders',
        'path'      => 'app'.DIRECTORY_SEPARATOR.'QueryBuilders',
    ],

    'request' => [
        'namespace' => 'App\\Http\\Requests',
        'path'      => 'app'.DIRECTORY_SEPARATOR.'Http'.DIRECTORY_SEPARATOR.'Requests',
    ],

    'resource' => [
        'namespace' => 'App\\Http\\Resources',
        'path'      => 'app'.DIRECTORY_SEPARATOR.'Http'.DIRECTORY_SEPARATOR.'Resources',
    ],

    'test' => [
        'namespace'       => 'Tests\\Feature\\Api\\CmsEndpoints',
        'path'            => 'tests'.DIRECTORY_SEPARATOR.'Feature'.DIRECTORY_SEPARATOR.'Api'.DIRECTORY_SEPARATOR.'CmsEndpoints',
        'api_path_prefix' => 'api',
    ],

    'database_seeder_path' => 'database'.DIRECTORY_SEPARATOR.'seeders'.DIRECTORY_SEPARATOR.'DatabaseSeeder.php',
    'route_path'           => 'routes'.DIRECTORY_SEPARATOR.'api.php',
];
