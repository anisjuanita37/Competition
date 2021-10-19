<html>
<head>
  <title>Creative Multimedia Competition 2020</title>
</head>
<body>

<?php
    include 'db_con.php';

    $id=$_REQUEST['id'];
  
    //get input value
  // $adName=$_POST['advisor_name'];

  // sql to delete a record
  $sql = "DELETE FROM competition  WHERE id='".$id."'";
 

  if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } 
  else {
    echo "Error deleting record: " . $conn->error;
  }

  //close connection  
  $conn->close();
  echo '<p><a href="adminMenu.php">Back to Main Menu</a></p>';
?>
</body> 
</html>