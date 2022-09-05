<?php

namespace App;

use App\Controllers\HomeController as HC;
use App\Controllers\AnimalController as A;
use App\Controllers\LoginController as L;
use App\Controllers\ApiController as Api;
use App\Controllers\ReactController as Re;
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
        if (!Auth::authorize($url)) {
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
        } elseif ($method == 'GET' && count($url) == 3 && $url[0] == 'animals' && $url[1] == 'edit') {
            return ((new A)->edit($url[2]));
        } elseif ($method == 'POST' && count($url) == 3 && $url[0] == 'animals' && $url[1] == 'update') {
            return ((new A)->update($url[2]));
        } elseif ($method == 'POST' && count($url) == 3 && $url[0] == 'animals' && $url[1] == 'delete') {
            return ((new A)->delete($url[2]));
        } elseif (($method == 'GET' && count($url) == 1 && $url[0] == 'login')) {
            if (Auth::isLogged()) {
                return self::redirect('');
            }
            return ((new L)->login());
        } elseif (($method == 'POST' && count($url) == 1 && $url[0] == 'login')) {
            return ((new L)->doLogin());
        } elseif (($method == 'POST' && count($url) == 1 && $url[0] == 'logout')) {
            return ((new L)->logout());
        } elseif ($method == 'GET' && count($url) == 2 && $url[0] == 'api' && $url[1] == 'go') {
            return ((new Api)->show());
        } elseif ($method == 'POST' && count($url) == 2 && $url[0] == 'api' && $url[1] == 'go') {
            return ((new Api)->doApi());
        } elseif ($method == 'GET' && count($url) == 2 && $url[0] == 'react' && $url[1] == 'list') {
            return ((new Re)->list());
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
    static public function json($data)
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST');
        header("Access-Control-Allow-Headers: X-Requested-With");
        header("Content-Type: application/json");
        echo json_encode($data);
    }
}
