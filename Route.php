<?php

class Route {

    static $status;

    static function splitUri( $uri = null ) {
        if( is_null($uri) ) {
            $cutGet = explode("?", $_SERVER['REQUEST_URI'] );
            $uri = $cutGet[0];
        }
        $temp = explode("/", $uri );
        if ( count($temp)>1 ) {
            unset($temp[0]);
            $temp = array_values($temp);
        }
        return $temp;
    }

    static function get( $uri , $controller , $vars = [] ) {
        if( Route::$status ) { return false; }
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ) { return false; }

        Route::run( $uri , $controller , $vars );

    }

    static function post( $uri , $controller , $vars = [] ) {
        if( Route::$status ) { return false; }
        if( $_SERVER['REQUEST_METHOD'] != 'POST' ) { return false; }

        Route::run( $uri , $controller , $vars );
    }

    static private function run( $uri , $controller , $vars = [] ) {
        $sltCt = Route::splitUri();
        $slt = Route::splitUri($uri);

        if( count($slt)!=count($sltCt) ) {
            return false;
        }
        for( $i=0; $i<count( $sltCt ); $i++ ) {
            if( preg_match("/^{+.+}$/", $slt[$i]) ) {
                $temp = substr( $slt[$i], 1, -1);
                if( isset($vars[$temp]) && preg_match($vars[$temp], $sltCt[$i]) ) {
                    $vars[$temp] = $sltCt[$i];
                } else {
                    return false;
                }
            } else if( $slt[$i]!=$sltCt[$i] ) {
                return false;
            }
        }

        Route::$status = Route::call($controller , $vars);
    }

    static function call( $controller , $req ) {

        $conthodler = explode("@", $controller);

        require_once( ROOT_CONTROLLER . $conthodler[0] .".php" );

        $controller = new $conthodler[0]();

        if( count($req)==0 )
            $controller->{ $conthodler[1] }();
        else
            $controller->{ $conthodler[1] }($req);

        return true;
    }

    static function error() {
        if( Route::$status ) { return false; }
        echo "404 Page Not Found.";
    }

}