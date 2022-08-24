<?php
session_start();
view('top');
view('logout');

echo 'Hello to forbiden world';

view('bottom');