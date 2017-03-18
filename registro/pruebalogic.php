<?php

require_once('../conexion.php');


date_default_timezone_set('UTC');
//Imprimimos la fecha actual dandole un formato
// $estado="1"; 
///////////////Guardar imagen en carpeta y direccion en la BD/////////////////

if(isset($_FILES['photo1'])&& $_FILES['photo1']['tmp_name']!=""){	
$filename=basename($_FILES['photo1']['name']);
$tipoimagen=$_FILES['photo1']['type'];

$ruta="assets/imagenes/".$nombrecategoria;
$ruta2="assets/imagenes/".$nombrecategoria;
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

//$photo2=mysql_real_escape_string($photo2);
$sql= "INSERT INTO tour(foto) VALUES ('$direccionimagen2')";

if($link->query($sql)==TRUE){
//if(mysqli_query($conn,$sql)==TRUE){
		echo "listo";
}else{
	//echo "Error: ".$sql."<br>".mysql_error($conn);
	echo "Error: ".$sql."<br>".$link->error;
}


?>
