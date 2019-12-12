<?php
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();
return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/database/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/database/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'migrations',
        'default_database' => getenv('APP_ENV'),
        'production' => [
            'adapter' => getenv('DB_DRIVER'),
            'host' => getenv('DB_HOST'),
            'name' => getenv('DB_NAME'),
            'user' => getenv('DB_USER'),
            'pass' => getenv('DB_PASS'),
            'unix_socket' => getenv('DB_SOCKET'),
            'port' => getenv('DB_PORT'),
            'charset' => 'utf8',
        ],
        'development' => [
            'adapter' => getenv('DB_DRIVER'),
            'host' => getenv('DB_HOST'),
            'name' => getenv('DB_NAME'),
            'user' => getenv('DB_USER'),
            'pass' => getenv('DB_PASS'),
            'unix_socket' => getenv('DB_SOCKET'),
            'port' => getenv('DB_PORT'),
            'charset' => 'utf8',
        ],
        'testing' => [
            'adapter' => getenv('DB_DRIVER'),
            'host' => getenv('DB_HOST'),
            'name' => getenv('DB_NAME'),
            'user' => getenv('DB_USER'),
            'pass' => getenv('DB_PASS'),
            'unix_socket' => getenv('DB_SOCKET'),
            'port' => getenv('DB_PORT'),
            'charset' => 'utf8',
        ]
    ],
    'version_order' => 'creation'
];