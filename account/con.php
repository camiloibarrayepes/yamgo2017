<?php
   //Start session
   session_start();
   
   //Include database connection details
   
   
   //Array to store validation errors
   $errmsg_arr = array();
   
   //Validation error flag
   $errflag = false;
   
  require_once('../conexion.php');
   
   //Function to sanitize values received from the form. Prevents SQL injection
   
   
   //Sanitize the POST values
   $email = $_POST['email'];
   $password = $_POST['password'];
   
   
   
   //If there are input validations, redirect back to the login form
   if($errflag) {
      $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
      session_write_close();
      header("location: index.php");
      exit();
   }
   
   //Create query
   $qry="SELECT * FROM users WHERE email='$email' AND password='$password'";
   $result=mysqli_query($link,$qry);
   
   //Check whether the query was successful or not
   if($result) {
      if(mysqli_num_rows($result) == 1) {
         //Login Successful
         session_regenerate_id();
         $member = mysqli_fetch_assoc($result); 

         $_SESSION['logged_in'] = true;
         
         $_SESSION['ID'] = $member['id'];
         $_SESSION['NAME'] = $member['nombre'];        
         $_SESSION['CIUDAD'] = $member['ciudad'];
         $_SESSION['EMAIL'] = $member['email'];
         $_SESSION['PERFIL'] = $member['perfil'];
         $_SESSION['FOTO'] = $member['foto'];
         $_SESSION['ROL'] = $member['rol'];
         $_SESSION['TEL'] = $member['telefono'];

           
            
         session_write_close();
         header("location: perfil_edit.php");
         exit();
      }else {
         //Login failed
         header("location: mal.php");
         exit();
      }
   }else {
      die("Query failed");
   }

    
    
?>