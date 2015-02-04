<?php
namespace core\models;

class Dispatch
{
    public $request;
    public $config;
    
    public function __construct($request,$config)
    {
        $this->request = $request;
        $this->config = $config;
        
    }
    
    public function run()
    {
        $controller = $this->request['controller'];
        $action = $this->request['action'];
        
        echo $controller;
        echo $action;
        
        $ruta = "application\\controllers\\".$controller;

        $controller = new $ruta($this->request, $this->config);
        $controller->$action();        
    }    
}