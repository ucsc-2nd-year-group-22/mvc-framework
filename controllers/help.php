<?php

class Help extends Controller{

    function __construct() {
        parent::__construct();
        
    }

    function index() {
        $this->view->rendor('help/index');
    }

    public function other($arg = false) {
        require 'models/help_model.php';
        $model = new Help_model();
        $this->view->rendor('help/index');
        
        // $this->view->blah = $model->blah();
    }

}