<?php

if( !defined("webStart") ) { exit(0); }

class galleryController {

    function page() {
        require_once( ROOT_VIEW . 'gallery.php');
    }

}