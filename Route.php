<?php
if( !defined("webStart") ) { exit(0); }

function call($controller, $action) {

    switch($controller) {
        case 'pages':
            $controller = new pagesController();
            break;
    }

    $controller->{ $action }();
}

$controllers = array('pages' => ['home', 'error']);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}