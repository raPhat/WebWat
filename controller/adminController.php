<?php

if( !defined("webStart") ) { exit(0); }

class adminController {

    function index() {
        if( isset( $_SESSION['username'] ) && isset( $_SESSION['password'] ) ) {
            $this->dashboard();
        } else {
            $this->login();
        }
    }
    function login() {
        require_once( ROOT_VIEW . '/admin/login.php');
    }
    function dashboard() {
        require_once( ROOT_VIEW . '/admin/dashboard.php');
    }

}