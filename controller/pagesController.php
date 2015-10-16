<?php

if( !defined("webStart") ) { exit(0); }

class pagesController {

    public $page =
        [
            'title' => 'เว็บไซต์วัดบ้านเด่นสะหรีศรีเมืองแกน :: WatBanDenSaRheSriMaungGan' ,
            'description'
        ];

    function home() {
        $page = $this->page;
        require_once( ROOT_VIEW . 'home.php');
    }

    function error() {
        echo "404 Not Found Page.";
    }

}