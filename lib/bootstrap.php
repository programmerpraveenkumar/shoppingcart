<?php

class Bootstrap{
    private $_tmp,$_url=array(),$_file;
    public function __construct(){
        $this->_tmp=isset($_GET["url"])?rtrim($_GET["url"],'/'):'index';     
        $this->_url=explode('/',$this->_tmp);
        $this->_file='controller/'.$this->_url[0].'.php';          
        if(file_exists($this->_file)){
                require $this->_file;
                new $this->_url[0]($this->_url);
        }
        else{
            echo $this->_file;
            die('file not found from controller '.$this->_file);
        }
    }
    
   
//    private function admincontroller($className){
//        try{
//            if(file_exists($this->_file)){
//                require $this->_file;                
//                $url=array_values(array_diff_key($this->_url,array($this->_url[0])));
//                if(class_exists($className))
//                new $className($url);
//                else{
//                    throw new driver\error($className);
//                }
//            }
//            else{
//                throw new driver\error($this->_file);
//            }
//        
//        }
//        catch(driver\error $e){
//            $e->adminerror();
//        }
//        
//        
//    }
//    private function usercontroller($className){
//    
//         try{
//            if(file_exists($this->_file)){
//                require $this->_file;
//                
//                $url=array_values(array_diff_key($this->_url,array($this->_url[0])));
//                new $className($url);
//            }
//            else{
//                 throw new driver\error($this->_url[0]);
//            }
//        }
//        catch(driver\error $e){
//            echo 'page is not found!!!';
//        //    $e->bootstrapError();
//        }
//    }
//    private function indexcontroller(){
//    
//        try{
//            if(file_exists($this->_file)){
//                require $this->_file;
//                $url=array_values(array_diff_key($this->_url,array($this->_url[0])));
//                new $this->_url[0]($url);
//            }
//            else{
//                 throw new driver\error($this->_url[0]);
//            }
//        }
//        catch(driver\error $e){
//            $e->bootstrapError();
//        }
//    }
//    private function nofile(){
//        library()->error()->bootstrapError();
//        
//    }
//    private function errorDriver(){    
//        library()->error()->bootstrapError();
//    }
    
}
?>