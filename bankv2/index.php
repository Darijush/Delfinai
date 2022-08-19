<?php
define('INSTALL','/delfinai/bankv2/');
define('DIR',__DIR__.'/');
define('URL', 'http://localhost/delfinai/bankv2/');

router();

function router(){
    $url = $_SERVER['REQUEST_URI'];
    $url = str_replace(INSTALL,'',$url);
    $url = explode('/',$url);
    $method = $_SERVER['REQUEST_METHOD'];
    if($method == 'GET' && count($url) == 1 && $url[0]=='login'){
        if(isLogged()){
            redirect('home');
        }
        view('login');
    }
    elseif($method == 'POST' && count($url) == 1 && $url[0]=='login'){
        doLogin();
    }
    elseif($method == 'GET' && count($url) == 1 && $url[0]==''){
        view('home');
    }
    elseif($method == 'GET' && count($url) == 1 && $url[0]=='client'){
        if(!isLogged()){
            redirect('login');
        }
        view('client');
    }    
    elseif($method == 'POST' && count($url) == 1 && $url[0]=='logout'){
        doLogout();
    }
    else{
        echo '404';
    }



}

function view($tmp){
    require DIR.'inc/'.$tmp.'.php';
};
function redirect($where){
    header('Location:'.URL.$where);
    die;
}
function doLogin(){
    $data = file_get_contents(DIR.'inc/users.json');
    $data = json_decode($data, 1);
    foreach($data as $user){
        if($user['name']== $_POST['name']){
            if($user['pass']== md5($_POST['psw'])){
                $_SESSION['login'] = 1;
                $_SESSION['user'] = $user;
                makeMsg('blue','Logged IN');
                redirect('client');
            }
        }
    }
    makeMsg('crimson','wrong pswd or name');
    redirect('login');
}

function isLogged(){
    return isset($_SESSION['login']) && $_SESSION['login']==1;
};
function doLogout(){
    unset($_SESSION['login']);
    unset($_SESSION['user']) ;
    makeMsg('green','Logged OUT');
    redirect('login');
}
function makeMsg($type,$text){
    $_SESSION['msg'] = ['type'=> $type, 'text' => $text];
}