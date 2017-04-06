<?php  
//check.php  
$connect = mysqli_connect("localhost", "root", "", "yamgo"); 
if(isset($_POST["email"]))
{
 $username = mysqli_real_escape_string($connect, $_POST["user_name"]);
 $query = "SELECT * FROM users WHERE email = '".$email."'";
 $result = mysqli_query($connect, $query);
 echo mysqli_num_rows($result);
}
?>