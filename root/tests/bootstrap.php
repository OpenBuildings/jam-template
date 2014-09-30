<?php

require_once __DIR__.'/../vendor/autoload.php';

Kohana::modules(array(
    'database'  => MODPATH.'database',
    'jam'       => __DIR__.'/../modules/jam',
    '{%repository_name%}' => __DIR__.'/..',
));

function test_autoload($class)
{
    $file = str_replace('_', '/', $class);

    if ($file = Kohana::find_file('tests/classes', $file))
    {
        require_once $file;
    }
}

spl_autoload_register('test_autoload');

Kohana::$config
    ->load('database')
        ->set('default', array(
            'type'       => 'MySQL',
            'connection' => array(
                'hostname'   => 'localhost',
                'database'   => '{%repository_name%}',
                'username'   => 'root',
                'password'   => '',
                'persistent' => TRUE,
            ),
            'table_prefix' => '',
            'charset'      => 'utf8',
            'caching'      => FALSE,
        ));
