# Teks PHP - Template Engine Kept Simple

<pre>$tpl = new \Teks\Template('/path/to/templates');
$tpl = new \Teks\Layout($tpl, 'layouts/default.php');

$tpl->base = '/path/to/base';
$tpl->css = array('css/main.css', array('css/print.css' => /*media:*/ 'print'));
$tpl->js = array('https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js', 
    'js/main.js');

echo $tpl->render('hello.php', array('name' => 'Bob'));
</pre>

## Teks on Silex
Teks provide a Service Provider for the Silex micro framework

<pre>...
$app = new Silex\Application;

$app['autoloader']->registerNamespace('Teks', __DIR__.'/path/to/vendors');

$app->register(new Teks\SilexProvider(), array(
    'teks.settings' => array(
        'path' => __DIR__.'/path/to//templates',
        'layout' => 'layouts/default.php',
        'css' => array('css/main.css', array('css/print.css' => 'print')),
        'js' => array(
            'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', 
            'js/main.js'),
        'base' => dirname($_SERVER['SCRIPT_NAME']),
    )
));

...

$app->get('/hello_teks', function() use($app) { 
    
    return $app['teks']->render('hello.php', array(
        'name' => 'Bob'
    ));

})

...</pre>

In any Teks template, the app variable refers to the Application object. So you 
can access any services from within your view.