<?php

namespace Teks;

class Layout
{
    protected $tpl;
    
    function __construct(Template $tpl, $layout = null) {        
        
        if ($layout) {
            $tpl->layout = $layout;
        }
        
        $this->tpl = $tpl;
        
    }
    
    function render($file, array $data = array()) {
        
        $content = $this->tpl->render($file, $data);
        
        if ($this->tpl->layout) {
            
            $content = $this->tpl->render($this->tpl->layout, array(
                                                'content' => $content));
            
        }
        
        return $content;
        
    }
    
    function __set($name, $value) {
        $this->tpl->{$name} = $value;        
    }
    
    function &__get($name) {
        return $this->tpl->{$name};
    }
    
    function __isset($name) {
        return isset($this->tpl->{$name});
    }
    
    function __unset($name) {
        unset($this->tpl->{$name});
        
    }

}