<?php
require_once('../conexion.php');
session_start();

$id=$_SESSION['ID'];

if(isset($_FILES['photo1'])&& $_FILES['photo1']['tmp_name']!=""){ 
$filename=basename($_FILES['photo1']['name']);
$tipoimagen=$_FILES['photo1']['type'];

$ruta="imagenes/usuarios";
$ruta2="imagenes/usuarios";
if(!file_exists($ruta)){
   mkdir($ruta,0777, true);
}

$direccionimagen=$ruta."/".$filename;
$direccionimagen2=$ruta2."/".$filename;

if (move_uploaded_file($_FILES['photo1']['tmp_name'], $direccionimagen)) {
	//echo"<img src='".$direccionimagen."' />";
}

/////////////////////////////////////7
//$contbin = fread(fopen($_FILES['photo1']['tmp_name'],"rb"),$_FILES['photo1']['size']);
//$photo2 = base64_encode($contbin);
}
$data4=date("Y-m-d-G-i-s");





$query = "UPDATE users SET foto='$direccionimagen2' WHERE id='$id'";
$resultado = $link->query($query);

if($resultado)
{
?>
   <b> Registro Exitoso, Tour Añadido. <BR>
<?php
   
}
else
{ 
echo "no";
}






?>