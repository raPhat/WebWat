<?php

class Language {
    static $type = "th";
    static private $lang;

    static function _load() {
        Language::$lang = require_once( ROOT_LANG . Language::$type ."/"."lang.php" );
    }

    static function lang( $key ) {
        return Language::$lang[$key];
    }

}