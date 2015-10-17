<?php

if( !defined("webStart") ) { exit(0); }

class App {

    function __construct() {
        $this->_autoload();
        $this->_get();
    }

    private function _get() {
        if( isset($_GET['controller']) && isset($_GET['action']) ) {
            $controller = $_GET['controller'];
            $action = $_GET['action'];
        } else {
            $controller = "pages";
            $action = "home";
        }
        require_once('Call.php');
    }

    private function _autoload() {
        // โหลด Language
        require_once( ROOT_LANG . "Language.php" );
        if( isset($_GET['lang']) ) {
            Language::$type = $_GET['lang'];
        }
        Language::_load();

        // โหลด Controller
        require_once( ROOT_CONTROLLER . "pagesController.php" );
        require_once( ROOT_CONTROLLER . "indexController.php" );

        // โหลด Modal
        //require_once( ROOT_MODAL . "page.php" );
    }
}