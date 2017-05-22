<?php error_reporting (0);?>


<?php

if($_GET)
	{ $codigo= $_GET['id'];
 echo"
<html>

<head>
  <title>Hello!</title>
</head>

<body>
<h1><center>en esta pagina es donde se hace el primer Formulario Que llevara al segundo formulario donde estara el video</center></h1>
<center>
<br>
<h1><center>Bienvenido quieres formar parte de nuestra comunidad ingresa los
  siguientes datos </center></h1>
<form action=\"form2.php\" method=\"GET\">
           <label>Ingresa tu Direccion de Correo</label>
           <br>
           <input type=\"text\" name=\"correo1\"  />
           <br>
           <label>Ingresa tu Nombre y Apellido</label>
           <br>
           <input type=\"text\" name=\"nombre1\"  />
           <bR>
           <input type=\"text\" name=\"codigo\" hidden='hidden' value=\"$codigo\" />
           <input type='submit' name='fomr2' values='Ingresar' />


</form>
</center>
</body>
</html>  ";

}
 ?>