<?php

namespace App;

use App\Controllers\HomeController as HC;
use App\Controllers\AnimalController as A;
use App\Controllers\LoginController as L;
use App\Middleware\Auth;

class App
{

    static public function start()
    {
        session_start();
        self::router();
    }
    static public function router()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('/', $url);
        array_shift($url);
        $method = $_SERVER['REQUEST_METHOD'];
        if(!Auth::authorize($url)){
            return self::redirect('login');
        }
        if ($method == 'GET' && count($url) == 1 && $url[0] == '') {
            return ((new HC)->home());
        } elseif (($method == 'GET' && count($url) == 2 && $url[0] == 'animals' && $url[1] == 'create')) {
            return ((new A)->create());
        } elseif (($method == 'POST' && count($url) == 2 && $url[0] == 'animals' && $url[1] == 'store')) {
            return ((new A)->store());
        } elseif ($method == 'GET' && count($url) == 1 && $url[0] == 'animals') {
            return ((new A)->list());
        }elseif ($method == 'GET' && count($url) == 3 && $url[0] == 'animals' && $url[1] == 'edit' ) {
            return ((new A)->edit($url[2]));
        }elseif ($method == 'POST' && count($url) == 3 && $url[0] == 'animals' && $url[1] == 'update' ) {
            return ((new A)->update($url[2]));
        }elseif ($method == 'POST' && count($url) == 3 && $url[0] == 'animals' && $url[1] == 'delete' ) {
            return ((new A)->delete($url[2]));
        }elseif (($method == 'GET' && count($url) == 1 && $url[0] == 'login' )) {
            return ((new L)->login());
        }elseif (($method == 'POST' && count($url) == 1 && $url[0] == 'login' )) {
            return ((new L)->doLogin());
        }elseif (($method == 'POST' && count($url) == 1 && $url[0] == 'logout' )) {
            return ((new L)->logout());
        }
    }
    static public function view($name, $data = [])
    {
        extract($data);
        require DIR . 'resources/view/' . $name . '.php';
    }
    static public function redirect($where)
    {
        header('Location:' . URL . $where);
    }
}
