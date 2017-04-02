<?php

require_once('../../conexion.php');
session_start();
$est = $_REQUEST['est'];

/* est = 1 activar perfil presta biker
   est = 2 activar perfil guia
   est = 3 desactivar perfil presta biker
   est = 4 desactivar perfil guia
*/

$id=$_SESSION['ID'];

/*si es guia y quiere ser presta biker */


$query = "UPDATE users SET rol='$est' WHERE id='$id' ";
$resultado = $link->query($query);

if($resultado)
{
?>
	<script>window.location.assign("index.php?est=<?php echo $est?>")</script>
   
<?php
   
}
else
{ 
echo "no";
echo mysqli_error($link);
}





?>