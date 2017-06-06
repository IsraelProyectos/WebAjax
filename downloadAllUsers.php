<?php
   error_reporting(E_ALL);
   $nick=$_GET['nickname'];
   $password=$_GET['pass'];
   $campoComprobacion=$_GET['campoComprobacion'];
   $host = 'localhost';
   $db = 'db552233303';
   $uid = 'root';
   $pwd = 'lokomotiv1973';

   $link = mysql_connect($host, $uid, $pwd) or die("No se puede conectar");
   mysql_select_db($db) or die("No se puede seleccionar la bd");
   $sql = ("SELECT Nick, Password FROM Users");
   $res = mysql_query($sql);
   while($row=mysql_fetch_array($res)){
      echo "<tr>
          <td>$row[Nick]</td>
          <td>$row[Password]</td>
      </tr>";
   }

?>