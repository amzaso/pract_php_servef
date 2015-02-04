<?php
namespace core\models;

class RenderView{
    

public static function renderView($request, $config, $data=null)
{

    ob_start();
        include ($config['view_path']."/".
                 $request['controller']."/".
                 $request['action'].".phtml");
        
        $content = ob_get_contents();
        
    ob_end_clean();
    
    return $content;
}
}