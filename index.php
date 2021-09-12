<?php
define('BASEPATH', 'http://localhost/basicCrud/');

if(file_exists('src/main.php')){
    include_once('src/main.php');
}else{
    exit('Fatal error');
}