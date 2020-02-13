<?php 
session_start();
session_destroy();
header('Location: administrador.php');
?>