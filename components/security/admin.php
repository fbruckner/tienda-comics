<?php
session_start();

if(!isset($_SESSION['id_usuario']) or $_SESSION['fk_tipo_usuario'] != 1){
    die("Error 404!!!");
}

?>