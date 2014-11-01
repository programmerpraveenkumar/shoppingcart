<?php
class controller{
    public function __construct(){
        $this->model=new model();
        $this->view=new view();
    }
    public function help(){    
        return new driver\help();
    }
    protected  function methodExists($obj,$name){
        if(isset($name[1]) && method_exists($obj,$name[1])){
            return true;
        }
        return false;

    }
    protected function adminSessionCheck(){
        if(!session::check('admin')){
                  header("location:".PATH.'login?msg=sh_login');
                  exit();
        }               
    }
}
