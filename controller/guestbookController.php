<?php

if( !defined("webStart") ) { exit(0); }

class guestbookController {

    function page() {
        require_once( ROOT_VIEW . 'guestbook.php');
    }

}