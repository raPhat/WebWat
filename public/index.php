<?php
session_save_path();
session_start();
define("webStart", true);

define("ROOT_CONTROLLER", "../controller/");
define("ROOT_MODAL", "../modal/");
define("ROOT_VIEW", "../view/");
define("ROOT_LANG", "../language/");
define("ROOT_REQUEST", "../controller/request/");

if( webStart ) {

    require_once("../Connect.class.php");
    require_once("../App.class.php");
    $app = new App();

}