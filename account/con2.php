<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('../conexion.php');
	
	//Array to store validation errors
	
	//Sanitize the POST values
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	
	
	//Create query
	$qry="SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);            
			
			$_SESSION['SESS_FIRST_NAME'] = $member['nombre'];
			$_SESSION['ID'] = $member['id'];
			
			
           
            
			session_write_close();
			header("location: login.php");
			exit();
		}else {
			//Login failed
			header("location: login-form2.php");
			exit();
		}
	}else {
		die("Query failed");
	}

    
    
?>