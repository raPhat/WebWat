<?php

if( !defined("webStart") ) { exit(0); }

class indexController {

    function test( $req ) {
        $data['test'] = $req['id'];
        $data['name'] = $_POST['name'];
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}