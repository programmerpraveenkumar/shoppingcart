<?php
class path {    
    public function __construct(){                         
         define('DEBUG',true);                
         $seprateurl=explode('/',$_SERVER["PHP_SELF"]);          
         define('PATH','http://'.$_SERVER["HTTP_HOST"].'/'.$seprateurl[1].'/');
         //define('PATH','http://'.$_SERVER["HTTP_HOST"].'/');
         define('ADMIN',PATH.'admin/');
         define('INCLUDE_PATH',PATH.'public/');      
         define('ADMIN_INCLUDE_PATH',PATH.'public/admin/');      
         define("GALLERY_PATH","photos/gallery/");
         define("HEADER_PATH","photos/header/");
         define("PHOTO_PATH",PATH."photos/");       
    }
    private function view(){
        $time=$_SERVER["REMOTE_ADDR"];
        $this->storedProcedure("sp_pageview('viewentry','(ipaddress,time)values(\'$time\',NOW())')");
    }
}    