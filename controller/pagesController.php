<?php

if( !defined("webStart") ) { exit(0); }

class pagesController {

    function home() {
        $page = new Page();

        require_once( ROOT_VIEW . 'home.php');
    }

    function test() {
        echo $_POST['name'];
    }

    function error() {
        echo "404 Not Found Page.";
    }

}