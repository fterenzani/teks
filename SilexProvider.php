<?php

namespace Teks;

use Silex\Application;
use Silex\ServiceProviderInterface;

class SilexProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {        
       
        $app['teks'] = $app->share(function() use ($app) {
            
            $tpl = new Template();
            
            $tpl->globals['app'] = $app;
            
            $settings = array();
            if (isset($app['teks.settings'])) {
                $settings = $app['teks.settings'];
            }
            
            foreach ($settings as $name => $value) {
                $tpl->{$name} = $value;
            }
            
            return new Layout($tpl);
                        
        });
    }
}
