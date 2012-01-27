<?php

require __DIR__ . '/../vendors/silex.phar';

$app = new Silex\Application;
$app['debug'] = true;
$app['autoloader']->registerNamespace('Teks', __DIR__.'/../../..');

$app->register(new Teks\SilexProvider(), array(
    'teks.settings' => array(
        'path' => __DIR__.'/../templates',
        'layout' => 'layouts/default.php',
        'css' => array('css/main.css', array('css/print.css' => 'print')),
        'js' => array(
            'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', 
            'js/main.js'),
        'base' => dirname($_SERVER['SCRIPT_NAME']),
    )
));

$app->get('/{name}', function ($name) use ($app) {
    return $app['teks']->render('hello.php', array(
        'name' => $name,
        ));
})
->value('name', 'Bob');

$app->run();