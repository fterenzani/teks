<?php

require __DIR__ . '/../vendors/UniversalClassLoader.php';
$loader = new \Symfony\Component\ClassLoader\UniversalClassLoader();
$loader->registerNamespace('Teks', __DIR__.'/../../..');
$loader->register();

$teks = new Teks\Template(__DIR__ . '/../templates');
$teks = new Teks\Layout($teks, 'layouts/default.php');

$teks->base = dirname($_SERVER['SCRIPT_NAME']);
        
$teks->css[] = 'css/main.css';
$teks->css[] = array('css/print.css' => 'print');

$teks->js[] = 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js';
$teks->js[] = 'js/main.js';

echo $teks->render('hello.php', array('name' => 'Bob'));