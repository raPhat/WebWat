<?php

if( !defined("webStart") ) { exit(0); }

class loginRequest extends Request {

    protected $var = [
        'email' => 'email',
        'password' => '/^[^\s]+$/'
    ];

    function __construct() {
        parent::_check( $_POST );
    }

}