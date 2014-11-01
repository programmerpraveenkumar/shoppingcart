<?php
class model{
    var $data=array();
    public function load($file,$funcionName){
        $modelName=$file.'Model';
        $file='model/'.$modelName.'/'.$modelName.'.php';        
        if(file_exists($file)){
            require $file;
            $model=new $modelName();
            if(count($this->data)>0){
                $model->fromController=$this->data;
            }
            return $model->$funcionName();
        }
        else{
            error::developerError($file.' is not found from model');
        }
    }
    public function __set($field,$value){        
        $this->data[$field]=$value;
    }
}
