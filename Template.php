<?php

namespace Teks;

class Template
{

    public $globals;
    public $path;   

    function __construct($path = null, $globals = null) {
        $this->path = $path;
        $this->globals = $globals;
        
    }

    function render($file, array $data = array()) {
        
        
        if (isset($this->globals)) {
            extract($this->globals);
        }
        
        if ($data) {
            extract($data);
        }
        
        if (isset($this->path)) {
            $file = $this->path . '/' . $file;
            
        }
        
        ob_start();
        require $file;        
        return ob_get_clean();
        
        
    }
    
}
