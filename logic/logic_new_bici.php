<?php

require_once('../conexion.php');

$marca= $_POST['marca'];
$color= $_POST['color'];
$id_user = $_POST['id_user'];



if(isset($_FILES['photo1'])&& $_FILES['photo1']['tmp_name']!=""){ 
$filename=basename($_FILES['photo1']['name']);
$tipoimagen=$_FILES['photo1']['type'];

$ruta="assets/imagenes/bikes";
$ruta2="assets/imagenes/bikes";
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
$query = "INSERT INTO bike (`id_user`, `marca`, `color`, `foto`) VALUES('$id_user', '$marca','$color', '$direccionimagen2')";
$resultado = $link->query($query);

if($resultado)
{
?>
   <script>window.location.assign("../account/bikes_users/index.php?ok")</script>
   
<?php
   
}
else
{ 
echo "no";
}

?>