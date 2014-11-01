<?php
class error extends Exception{    
    private $errocode=array(
        "emptyurl"=>"",
         "pagenotfound"=>"",
    );
    private function controler(){
        return new controller();
    }
    public static function code($msg,$code){
        $error=new error();
        $error=array(
            "bootstrap"=>$error->errorcolor($msg)." file not found from bootstrap",
            "view"=>$error->errorcolor($msg)." file not found from view",
            "adminmethodnotfound"=>$error->errorcolor($msg)." file not found from view",
        
            );
        
        return $error[$code];
    }
    private function errorcolor($msg){
        if(isset($msg)){
            return '<span class="error" style="color:red;">'.$msg.'</span>';
        }
    }
    public function errorredirect(){        
         header("location:".PATH.$this->errocode[$this->getMessage()]);
    }
    public function notfound(){
        $v=$this->controler();        
        $v->view->errordata='requested page is not found';        
        $v->view->load('index');
    }
    public static function developerError($message){
        $developerError=true;
        if($developerError){
            die($message);
        }
        $file='adperror.log';
        $message=$message.'--'.date("F d Y H:i:s.")."---\r\n";        
        $error=fopen($file,'a+');
        fwrite($error,$message );
        fclose($error);              
    }
    public static function errorlog($message){
        $developerError=true;
        if($developerError){
            die($message);
        }
        $file='adperror.log';
        $message=$message.'--'.date("F d Y H:i:s.")."---\r\n";        
        $error=fopen($file,'a+');
        fwrite($error,$message );
        fclose($error);              
    }
}

