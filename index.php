<?php
class loadFiles{
    
    public static function library($file){
        $file='lib/'.$file.'.php';        
        if(file_exists($file)){
            require $file;
        }
        else{
            
            error::errorlog($file.' is not available');
        }
        
    }
    public static function driver($file){
        $file='driver/'.$file.'.php';
        if(file_exists($file)){
            require $file;
        }
        else{
            error::errorlog($file.' is not available');
        }
    }
}
spl_autoload_register(array('loadFiles','library'));
spl_autoload_register(array('loadFiles','driver'));
new path();
new Bootstrap();
?>