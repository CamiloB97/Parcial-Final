<?php
session_start();
if(!$_SESSION['logged']){
    header("Location: index.php");
    exit;
}
$id=$_SESSION['id'];
$nombre=$_SESSION['nombre'];
?>
<html>
<head>

</head>
<ul>
<li>Bienvenido <?php echo $nombre; ?></li>
 <li><a href="comprobar.php">Ver mis afiliados</a></li>
 <li><a href="close.php">Cerrar Sesion</a></li>
 </ul>

<form action="" method="POST">
  <label>Generar Link Afiliador</label>
  <input type="text" hidden="hidden" name="id" value="<?php echo $id;?>" />
  <input type="submit" name="codigo"  value ="GENERAR"/>

</form>
<?php

    if(isset($_POST['codigo'])){




               echo"
                      <html>

                      <head>

                      <script language='javascript'>

function copia_portapapeles(){
   document.f1.campo1.select()
   window.clipboardData.setData('Text', document.f1.campo1.value);
}
</script>
                  </head>
<body>


<form name='f1'>
    <textarea rows='1' cols='35' name='campo1'>localhost/afiliado/form.php?id=$id</textarea> <br/>
    <input type='button' onclick='copia_portapapeles()' value='Copiar' />
</form>
<input type=\"button\" onclick=\" location.href='administracion.php' \" value=\"Limpiar\" name=\"boton\" />


";
 }
?>

