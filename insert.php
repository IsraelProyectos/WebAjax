<?php
   error_reporting(E_ALL);
   $nick=$_POST['nickname'];
   $password=$_POST['pass'];
   $host = 'localhost';
   $db = 'db552233303';
   $uid = 'root';
   $pwd = 'lokomotiv1973';

   $link = mysql_connect($host, $uid, $pwd) or die("No se puede conectar");

   mysql_select_db($db) or die("No se puede seleccionar la bd");
   $query = mysql_query("INSERT INTO Users  (Nick, Password) VALUES ('".$nick."', '".$password."')");
   
   header("Location: index.php");
   exit;
?>
