<?php

define("webStart", true);

define("ROOT_CONTROLLER", "../controller/");
define("ROOT_MODAL", "../modal/");
define("ROOT_VIEW", "../view/");

if( webStart ) {

    require_once("../Connect.class.php");
    require_once("../App.class.php");
    $app = new App();

}