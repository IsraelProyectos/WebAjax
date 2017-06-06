<?php
   //hola
   error_reporting(E_ALL);
   $nick=$_GET['nickname'];
   $password=$_GET['pass'];
   $campoComprobacion=$_GET['campoComprobacion'];
   $host = 'localhost';
   $db = 'db552233303';
   $uid = 'root';
   $pwd = 'lokomotiv1973';
   $stringRespuestaNick='El nick ya esta en uso';
   $stringRespuestaPass='El password ya esta en uso';
   
   $link = mysql_connect($host, $uid, $pwd) or die("No se puede conectar");
   mysql_select_db($db) or die("No se puede seleccionar la bd");
   
   if(strcmp($campoComprobacion, 'nick')==0){
   $sql = ("SELECT COUNT(*) FROM Users WHERE Nick = '".$nick."'");
   }else{
   $sql = ("SELECT COUNT(*) FROM Users WHERE Password = '".$password."'");
   }
   
   $result = mysql_query($sql);
   $result = mysql_fetch_array($result);
   
   if(strcmp($campoComprobacion, 'nick')==0){
     if($result[0]>=1){
      echo "<span style='color:red;'>".$stringRespuestaNick."</span>";
     }else{
      echo "<font color='green'>El nick es correcto</font>";
     }
   }else{
     if($result[0]>=1){
      echo "<span style='color:red;'>".$stringRespuestaPass."</span>";
     }else{
      echo "<font color='green'>El password es correcto</font>";
     }
   }
   
   
?>
