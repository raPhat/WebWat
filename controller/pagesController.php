<?php

if( !defined("webStart") ) { exit(0); }

class pagesController {

    function home() {
        require_once( ROOT_VIEW . 'home.php');
    }

    function test() {
        echo "asdasdasd ".Language::lang('sayhi');
    }

    function error() {
        echo "404 Not Found Page.";
    }

}