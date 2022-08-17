<?php


define('INSTALL','/delfinai/08-16/');
router();

function router(){
    $url = $_SERVER['REQUEST_URI'];
    $url = str_replace(INSTALL,'',$url);
    $url = explode('/',$url);
    if($url[0]== 'addmoney'){
        require __DIR__.'inc.add.php';
    }


}