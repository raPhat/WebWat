<?php

if( !defined("webStart") ) { exit(0); }

class Request {

    private $request;
    private $error;

    protected function _check( $req ) {
        foreach( $req as $key => $value) {
            if ( isset($this->var[$key]) ) {
                if( $this->var[$key] == 'email' ) {
                    //
                    if( filter_var($value, FILTER_VALIDATE_EMAIL) )
                        $this->request[$key] = $value;
                    else
                        $this->error[$key] = $value;
                    //
                } else {
                    //
                    if( preg_match($this->var[$key], $value) )
                        $this->request[$key] = $value;
                    else
                        $this->error[$key] = $value;
                    //
                }
            }
        }
    }

    function _error() {
        if( count($this->error)==0 )
            return true;
        else
            return false;
    }

    function _req( $key ) {
        return $this->request[$key];
    }

}