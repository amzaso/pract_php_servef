<?php

namespace application\controllers;


class Index
{
    public function index(){
        ob_start();
        include('../modules/application/src/application/views/index/index.phtml');
        $content = ob_get_contents();
        ob_end_clean();
        
        include('../modules/application/src/application/layouts/jumbotron.phtml');
    }
}

// switch($request['action'])
// {
//     case 'index':
     
//     break;   
// }


























