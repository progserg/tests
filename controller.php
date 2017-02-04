<?php
session_start();

$_SESSION['user'] = $_POST['user'];
$_SESSION['num_question'] = 1;

header("Location: http://".$_SERVER['HTTP_HOST']."/index.php");