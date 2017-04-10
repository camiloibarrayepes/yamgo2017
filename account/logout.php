<?php
session_start(); 
session_destroy();
if(isset($_GET['desc_ac']))
{
	header("Location: login.php?desc_ac"); 
}
else
{
header("Location: ../index.php"); 
}
?>