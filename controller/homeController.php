<?php

if( !defined("webStart") ) { exit(0); }

class homeController {

    function page() {
        require_once( ROOT_VIEW . 'home.php');
    }

}