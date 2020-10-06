<?php

class Dashboard extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if($logged == false) {
            Session::destroy();
            header('location: ../login');
            exit;
        }
    }

    function index() {
        $this->view->rendor('dashboard/index');
    }

    function logout() {
        // Session::destroy();
        Session::unset('loggedIn');
        header('location: ../login');
        exit;
    }
    
}