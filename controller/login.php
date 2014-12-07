<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class login extends controller{
    public function __construct() {
                parent::__construct();        
        $this->login();
    }
    public function login(){
            $this->view->load('admin/login');
   }
} 