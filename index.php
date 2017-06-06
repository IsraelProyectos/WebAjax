<html>
<head>
<title>Formulario con Ajax</title>
<script type="text/javascript" language="JavaScript" src="prototype.js"></script>
<script type="text/javascript" src="funcionesOnKeyUp/onKeyUp.js"></script>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
<LINK REL="stylesheet" TYPE="text/css" HREF="styles.css">
</head>
<body>
  
<h3 align="center">FORMULARIO CON AJAX CON KEYUP HECHO CON PROTOTYPE</h3>
<div class="container"> 
<form action="insert.php" method="POST" onSubmit="return validarFormulario();">
  Escribe tu nick:
  <br/>
  <input id="nickname" name="nickname" onKeyUp="comprobarNick(this.value)" /> <span id="existeNombre" name="existeNombre"></span>
 
  <br/>
  <br/>

  Escribe tu password:
  <br/>
  <input id="pass" name="pass" onKeyUp="comprobarPassword(this.value)" /> <span id="existePassword"></span>
 
  <br/>
  <br/>

  <input type="submit" value="Registrarse" />
</form>
</div>
<div class="container">
  <table class="table table-hover" id="usuarios">
    <thead>
      <tr>
	<th>Usuario</th>
	<th>Password</th>
      </tr>
      <?php include'downloadAllUsers.php';?>
    </thead>
    
  </table>
    
</div>

</body>
</html>
