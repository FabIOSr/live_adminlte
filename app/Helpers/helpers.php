<?php

if(!function_exists('userNameFull')){
    function userNameFull(){
        return auth()->check() ? auth()->user()->name : 'anonymous';
    }
}