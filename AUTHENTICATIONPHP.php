<?php

$login = ['renato', 'nathan', 'creuza', 'fernando','rubens'];
$pass = 'test_pass';

if(($_SERVER['PHP_AUTH_PW']!= $pass || $_SERVER['PHP_AUTH_USER'] != $login)|| !$_SERVER['PHP_AUTH_USER'])
{
    header('WWW-Authenticate: Basic realm="Test auth"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Auth failed';
    exit;
}else{

    echo ("Authentication Successfully {$_SERVER['PHP_AUTH_USER']} congratulations!!!");
}
?>