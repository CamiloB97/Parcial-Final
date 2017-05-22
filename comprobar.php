<?php error_reporting (0);?>
<?php
session_start();
if(!$_SESSION['logged']){
    header("Location: index.php");
    exit;
}
$id=$_SESSION['id'];
$nombre=$_SESSION['nombre'];

$conexion=mysql_connect("localhost","root","");

		mysql_select_db("afiliado",$conexion);
            $consulta=mysql_query("SELECT * FROM afiliado WHERE id_afiliado ='$id' ");

            echO"<h1><center>usuarios registrados bajo su enlace</center></h1>" ;
            echo"<center>";
      echo"<table BORDER=1>
<tr bgcolor=#cccccc border=1>


<td>Nombre</td>

<td>Email</td>


</tr>" ;

while($row=mysql_fetch_array($consulta))
      {
         echo "<tr >";

    echo "<td>".$row["nombre"]."</td>";

    echo "<td>".$row["correo"]."</td>";

}

echo"</tr></table></center>";

echo"<br>
    <center><input type='button' onclick=' location.href=\"administracion.php\" ' value='Volver' name='boton' /> </center>";


?>
