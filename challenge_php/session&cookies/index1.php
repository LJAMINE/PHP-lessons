<?php 


session_start();

$_SESSION["aaa"]=222;


if (isset($_SESSION["aaa"])) {
    echo $_SESSION["aaa"];
}else {
    echo 'error';
}