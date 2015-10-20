<?php

if( !defined("webStart") ) { exit(0); }

class App {

    static $text = array();

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

        $this->setAllText();

        // โหลด Request
        require_once( ROOT_REQUEST . "Request.class.php" );

        // โหลด Controller
//        require_once( ROOT_CONTROLLER . "pagesController.php" );
//        require_once( ROOT_CONTROLLER . "indexController.php" );
//        require_once( ROOT_CONTROLLER . "homeController.php" );
//        require_once( ROOT_CONTROLLER . "historyController.php" );
//        require_once( ROOT_CONTROLLER . "importantplaceController.php" );
//        require_once( ROOT_CONTROLLER . "galleryController.php" );
        // โหลด Modal
        //require_once( ROOT_MODAL . "page.php" );
    }

    private function setAllText() {
        $result = Connect::select("text","");
        foreach( $result as $val ) {
            App::$text[$val['key_t']] = $val['content'];
        }
    }
}