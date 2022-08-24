<?php
session_start();
define('INSTALL', '/delfinai/bankv2/');
define('DIR', __DIR__ . '/');
define('URL', 'http://localhost/delfinai/bankv2/');

router();

require_once DIR . 'classes/Account.php';
require_once DIR . 'classes/IdNumber.php';
require_once DIR . 'classes/NameSurname.php';

function router()
{
    $url = $_SERVER['REQUEST_URI'];
    $url = str_replace(INSTALL, '', $url);
    $url = explode('/', $url);
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == 'GET' && count($url) == 1 && $url[0] == '') {
        if (isLogged()) {
            redirect('client');
        }
        view('login');
    } elseif ($method == 'POST' && count($url) == 1 && $url[0] == 'login') {
        doLogin();
    } elseif ($method == 'GET' && count($url) == 1 && $url[0] == '') {
        view('home');
    } elseif ($method == 'GET' && count($url) == 1 && $url[0] == 'client') {
        if (!isLogged()) {
            redirect('login');
        }
        view('client');
    } elseif ($method == 'POST' && count($url) == 1 && $url[0] == 'logout') {
        doLogout();
    } elseif ($method == 'GET' && count($url) == 1 && $url[0] == 'create') {
        if (!isLogged()) {
            redirect('login');
        }
        view('create');
    } elseif ($method == 'POST' && count($url) == 1 && $url[0] == 'addMoney') {
        if (!isLogged()) {
            redirect('login');
        }

        view('addMoney');
    } elseif ($method == 'POST' && count($url) == 1 && $url[0] == 'withdrawMoney') {
        if (!isLogged()) {
            redirect('login');
        }

        view('withdrawMoney');
    } elseif ($method == 'POST' && count($url) == 1 && $url[0] == 'deleteAcc') {
        if (!isLogged()) {
            redirect('login');
        }

        view('deleteAcc');
    } elseif ($method == 'POST' && count($url) == 1 && $url[0] == 'client') {
        if (!isLogged()) {
            redirect('login');
        }
        if ($_POST['confirm'] == 1 && $_POST['addAsset']>0) {
            $asset = $_POST['addAsset'];
            updateAccount($asset);
            view('client');
        } elseif ($_POST['confirm'] == 1 && $_POST['withdrawAsset']<= $_POST['balance'] && $_POST['withdrawAsset']>0) {
            $asset = -$_POST['withdrawAsset'];
            updateAccount($asset);
            view('client');
      } elseif ($_POST['confirm'] == 1 && $_POST['balance']== 0) {
            destroy($_POST['IBAN']);
            view('client');
        }
        else{
            makeMsg('yellow', 'No action made');
            redirect('client');
        } 

    } elseif ($method == 'POST' && count($url) == 1 && $url[0] == 'create') {
        createClient();
    } else {
        echo '404';
    }
}
require_once DIR . 'classes/Iban.php';

function view($tmp)
{
    require DIR . 'inc/' . $tmp . '.php';
};
function redirect($where)
{
    header('Location:' . URL . $where);
    die;
}
function doLogin()
{
    $data = file_get_contents(DIR . 'inc/users.json');
    $data = json_decode($data, 1);
    foreach ($data as $user) {
        if ($user['name'] == $_POST['username']) {
            if ($user['pass'] == md5($_POST['password'])) {
                $_SESSION['login'] = 1;
                $_SESSION['user'] = $user;
                makeMsg('blue', 'Logged IN');
                redirect('client');
            }
        }
    }
    makeMsg('crimson', 'wrong pswd or name');
    redirect('login');
}

function isLogged()
{
    return isset($_SESSION['login']) && $_SESSION['login'] == 1;
};
function doLogout()
{
    unset($_SESSION['login']);
    unset($_SESSION['user']);
    makeMsg('green', 'Logged OUT');
    redirect('login');
}
function makeMsg($type, $text)
{
    $_SESSION['msg'] = ['type' => $type, 'text' => $text];
}

function createClient()
{
    require DIR . 'classes/Account.php';
    require DIR . 'classes/IdNumber.php';
    require DIR . 'classes/NameSurname.php';
    $id = new IdNumber;
    $nameSurname = new NameSurname;
    if ($nameSurname->checkNames($_POST['name']) && $nameSurname->checkNames($_POST['surname']) && ($id->checkId($_POST['asmKodas']) == 2)) {
        $nameSurname->name = $_POST['name'];
        $nameSurname->surname = $_POST['surname'];
        $id->id = $_POST['asmKodas'];
        $ibanNr = $_POST['IBAN'];
        $userAccount = new Account($nameSurname->name, $nameSurname->surname, $ibanNr, $id->id);
        makeMsg('green', 'USER CREATED');
        redirect('client');
    }
    makeMsg('crimson', 'WRONG INPUT DATA');
    redirect('create');
}
function updateAccount($asset){
    require DIR.'classes/Account.php';
    Account::updateBalance($_POST['IBAN'], $asset );
    makeMsg('green', 'Assets updated');
}
function destroy($acc){
    require DIR.'classes/Account.php';
    Account::deletAccount($_POST['IBAN'] );
    makeMsg('green', 'Account is deleted');
}
