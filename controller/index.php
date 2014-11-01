<?php
class index extends controller{
    public function __construct($url) {
        parent::__construct();
        if($this->methodExists($this,$url)){
            $this->{$url[1]}();
        }
        else{
            $this->index();
        }
    }
    private function index(){
        $this->view->load('index');
    }
}
    
?>