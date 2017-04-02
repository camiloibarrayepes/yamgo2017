<?php

require_once('../../conexion.php');
session_start();

$id=$_SESSION['ID'];
$precio=$_POST['precio'];
$tiempo=$_POST['tiempo'];
$lugares=$_POST['lugares'];
$idiomas=$_POST['idiomas'];
$perfil=$_POST['perfil'];

   $query = "INSERT INTO guias (`id_user`, `precio`, `tiempo`, `lugares`, `idiomas`, `perfil`) VALUES('$id', '$precio','$tiempo', '$lugares', '$idiomas', '$perfil')";
   $resultado = $link->query($query);

   if($resultado)
   {
   ?>
      <script>window.location.assign("../perfil_edit_guia.php?edit=1")</script>
      <?php         
   }
   else
   { 
      echo "no";
   }


?>