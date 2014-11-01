<?php
class view{        
    public function load($file){
        $file='view/'.$file.'View.php';
        if(file_exists($file)){            
             require $file;
        }
        else{            
               error::developerError($file,'view');           
        }
    
    }
}
