<?php

require_once('../conexion.php');
session_start();


/* est = 1 activar perfil presta biker
   est = 2 activar perfil guia
   est = 3 desactivar perfil presta biker
   est = 4 desactivar perfil guia
*/

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$ciudad=$_POST['ciudad'];
$perfil=$_POST['perfil'];
$username=$_POST['username'];

/*si es guia y quiere ser presta biker */


$query = "UPDATE users SET username='$username', nombre='$nombre', email='$email', telefono='$telefono', ciudad='$ciudad', perfil='$perfil' WHERE id='$id' ";
$resultado = $link->query($query);

if($resultado)
{
?>
	<script>window.location.assign("perfil_edit.php?edit")</script>
   
<?php
   
}
else
{ 
echo "no";
echo mysqli_error($link);
}





?>