<?php
view('top');
if (isLogged()){
    view('list');
}else{
    view('login');
}
view('bottom');