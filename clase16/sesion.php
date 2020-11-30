<?php
session_start();
if(!isset($_SESSION["username"])){
    $usuario = $_SESSION["username"];
    header("location: login.php");
}