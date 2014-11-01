<?php
class session{
    private static function start(){
        if(session_id()==''){
            session_start();
        }
    }
    public static function check($key){
        self::start();
        if(isset($_SESSION[$key])){
            return true;            
        }        
        return false;
    }
    public static function delete($key){
      self::start();
      if(isset($_SESSION["$key"])){
            unset($_SESSION["$key"]);
            if(!isset($_SESSION["key"])){
                return true;
            }        
        }
        return false;
    }
    public static function set($key,$value){
        self::start(); 
        $_SESSION[$key]=$value;
    }
    public static function get($key){
         self::start();                  
        if(isset($_SESSION[$key]))
            return $_SESSION[$key];
        else{
            //if(DEBUG)echo('not ser');
            return false;
        }
    }
}
?>