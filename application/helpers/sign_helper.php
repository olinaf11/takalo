<?php
if (!defined('BASEPATH')) exit('No direct script accessallowed');

if ( ! function_exists('checkSign')) {
    function checkSign($email, $password, $name) {
        if ($email=="" || $email == null || $password=="" || $password == null || $name=="" || $name == null){
            return false;
        }
        return true;
    }
}
