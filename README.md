Teks - (A PHP) Template Engine Kept Simple

<pre>use Teks;
$tpl = new Template('/path/to/templates');
$tpl = new Layout($tpl, 'layouts/default.php');
$tpl->css = array('css/main.css', 'css/print.css' => /*media:*/ 'print');
$tpl->js = array('https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js', 
    'js/main.js');

echo $tpl->render('hello.php', array('name' => 'Teks'));
</pre>

** Teks on Silex **
Teks provide a Service Provider for the Silex micro framework

<pre>...
$app = new Silex\Application(); 

$app['autoloader']->registerNamespace('Teks', __DIR__.'/vendors');
$app->register(new Teks\SilexProvider, array(
    'teks.settings' => array(
        'path' => __DIR__.'/templates',
        'layout' => 'layouts/default.php'),
        'css' => array('css/main.css', 'css/print.css' => /*media:*/ 'print')
        'js' = array('https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js', 
            'js/main.js');
));</pre>

