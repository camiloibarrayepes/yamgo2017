<?php

require_once('../conexion.php');

$historia= $_POST['historia'];
$id_user = $_POST['id_user'];
$titulo = $_POST['titulo'];



if(isset($_FILES['photo1'])&& $_FILES['photo1']['tmp_name']!=""){ 
$filename=basename($_FILES['photo1']['name']);
$tipoimagen=$_FILES['photo1']['type'];

$nombrecategoria="";

$ruta="imagenes".$nombrecategoria;
$ruta2="imagenes".$nombrecategoria;
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

$query = "INSERT INTO experiencias (`id_user`, `titulo`, `historia`, `foto`) VALUES('$id_user', '$titulo', '$historia','$direccionimagen2')";
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
echo mysqli_error($link);
}






?>