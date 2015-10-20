<?php

if( !defined("webStart") ) { exit(0); }

class adminController {

    function index() {
        if( isset( $_SESSION['email'] ) && isset( $_SESSION['password'] ) ) {
            $this->dashboard();
        } else {
            $this->loginPage();
        }
    }
    function loginPage() {
        require_once( ROOT_VIEW . '/admin/login.php');
    }
    function login() {
        require_once( ROOT_REQUEST . "loginRequest.php" );

        $req = new loginRequest();

        if( $req->_error() ) {
            $user = Connect::select("user", " WHERE email='".$req->_req('email')."' and password='".md5($req->_req('password'))."' ");
            if( count($user) > 0 ) {

                $_SESSION['email'] = $req->_req('email');
                $_SESSION['password'] = md5($req->_req('password'));

                echo json_encode(['status'=>true]);
                exit(0);
            }
        }

        echo json_encode(['status'=>false]);

    }
    function dashboard() {
        require_once( ROOT_VIEW . '/admin/dashboard.php');
    }
    function history() {
        if( isset( $_SESSION['email'] ) && isset( $_SESSION['password'] ) ) {
            require_once( ROOT_VIEW . '/admin/history.php');
        } else {
            $this->loginPage();
        }
    }
    function saveHistory() {
        $data = [
            'content' => $_POST['content']
        ];
        $result = Connect::update("text",$data," WHERE key_t='history' ");
        if($result) {
            echo json_encode(['status'=>true]);
        } else {
            echo json_encode(['status'=>false]);
        }
        exit(0);
    }
    function importantplace() {
        if( isset( $_SESSION['email'] ) && isset( $_SESSION['password'] ) ) {
            require_once( ROOT_VIEW . '/admin/importantplace.php');
        } else {
            $this->loginPage();
        }
    }
    function logout() {
        session_destroy();
    }

}