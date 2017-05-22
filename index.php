<!DOCTYPE html>
   <?php error_reporting (0);?>
<html>

<head>
  <title>Hello!</title>
</head>

<body>
   <br>
   <br>
   <br>
   <h1><center>SISTEMA DE AFILIADOS </center></h1>
<center><form action="index.php" method="POST">
<label>USUARIO</label>
<input type="text" name="usuario" />
<br>
<label>Contraseña</label>
<input type="password" name="pass" />
<br>
<input type="submit" value="ingresar" name="hola" />
</form></center>
<?php




    if(isset($_POST['hola'])){


  $usuario= $_POST['usuario'];
  $pass= $_POST['pass'];

  $conexion=mysql_connect("localhost","root","");

		mysql_select_db("afiliado",$conexion);






  $sql = mysql_query(
        "SELECT * FROM afiliado
        WHERE correo='$usuario' AND
        pass='$pass'
        LIMIT 1");



  if(mysql_num_rows($sql) == 1){

          $row = mysql_fetch_array($sql);
        session_start();
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['logged'] = TRUE;

        header("Location: administracion.php");
        exit;

  }else{
           echo"
         <script language='JavaScript' type='text/javascript'>
         alert('USUARIO no existe o ingreso mal los datos ');
         </script>  ";




  }

   }

?>

</body>
</html>