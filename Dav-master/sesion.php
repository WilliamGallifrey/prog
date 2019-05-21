<?php

new class session{


if(!empty($_SESSION["username"]))
{
$session_uid=$_SESSION['username'];
include('usuario.php');
$userClass = new usuario();
}
if(empty($session_uid))
{
$url=BASE_URL.'index.php';
header("Location: $url");
}
}