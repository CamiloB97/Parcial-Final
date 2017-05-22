<!DOCTYPE html>
  <?php error_reporting (0);?>
<html>

<head>
  <title>Hello!</title>
</head>

<body>

<h1><center>En esta PAgina es donde se coloca el Famoso Video de Introduccion</center></h1>
<center><p>Aqui pondremos el segundo Formulario</p></center>
<?php
$nombre= $_GET['nombre1'];
$codigo= $_GET['codigo'];
$correo= $_GET['correo1'];

echo"

<center><form action='form2.php' method='POST'>
<table>
<tr>
<td>
   <label>Nombre y apellido</label>
    </td>
    <td>
   <input type=\"text\"  name=\"datos\" value='$nombre' require='hola'/>
   </td>
   </tr>
   <td>
   <label>Correo</label>
   </td>
   <td>
   <input type=\"text\" name='correo' value='$correo' require='hola' />
     </td>
   </tr>
   <td>
   <label>Contraseña</label>
       </td>
       <TD>
   <input type=\"password\" name='pass' value=''  require='hola'/>
   <input type=\"text\" name='codigo2' hidden='hidden' value='$codigo' />
           </td>
           </tr>
           <tr>
           <td>
           <center>
   <input type='submit' name='regis' value='Registrar' />
               </center></td></tr>
</form></center>";

    if(isset($_POST['regis'])){


        $nombre2= $_POST['datos'];
        $correo2= $_POST['correo'];
        $pass2= $_POST['pass'];
        $codigo2= $_POST['codigo2'];



         mysql_connect("localhost","root","");
    mysql_select_db("afiliado");
    $consulta="INSERT INTO afiliado (id, nombre, correo, pass, id_afiliado) VALUES (NULL,'$nombre2','$correo2','$pass2','$codigo2')";



         if(mysql_query($consulta) ){
 	echo"
				<script>
					alert('REGISTRO REALIZADO CON EXITO');
					location.replace('index.php');
				</script>
			";

            }
    }




?>


</body>
</html>