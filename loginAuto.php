<?php 

session_start();

// Code to connect to database
include 'db_con.php';
 
// Define $myusername and $mypassword
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

$sql = "SELECT username, password FROM admin WHERE username='$myusername' and password='$mypassword'";
$result = $conn->query($sql);

$row=mysqli_fetch_array($result);

// Mysql_num_row is counting table row
if ($result->num_rows > 0) 
{
    $_SESSION['id']=$row['id'];
    $_SESSION['username']=$row['username'];

    //redirect to file "adminMenu.php"
    header("location:adminMenu.php");
}
else 
{
    echo "<p>Wrong Username or Password. Please try again.</p>";
}
$conn->close();
?>