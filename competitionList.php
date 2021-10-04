<html>
<head>
  <title>Creative Multimedia Competition 2020</title>
</head>
<body>

  <h3 align="center">Creative Multimedia Competition 2020</h3>

<?php
  include 'db_con.php';

  //create and execute query
  $sql = "SELECT * FROM competition";
  $result = $conn->query($sql);

  //check if records were returned
  if ($result->num_rows > 0) {

     //create a table to display the record
     echo '<table cellpadding=10 cellspacing=0 border=1 align="center">';
     echo '<tr><td align="center"><b>No</b></td>
     <td align="center"><b>Advisor Name</b></td>
     <td align="center"><b>Advisor Contact</b></td>
     <td align="center"><b>Advisor Email</b></td>
     <td align="center"><b>Advisor Campus</b></td>
     <td align="center"><b>Team Member 1</b></td>
     <td align="center"><b>Team Member 2</b></td>
     <td align="center"><b>Team Member 3</b></td></tr>';
     
     // output data of each row
     while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td align="center">'.$row["id"].'</td>';
        echo '<td align="center">'.$row["advisorName"].'</td>';
        echo '<td align="center">'.$row["advisorContact"].'</td>';
        echo '<td align="center">'.$row["advisorEmail"].'</td>';
        echo '<td align="center">'.$row["campus"].'</td>';
        echo '<td align="center">'.$row["memberA"].'</td>';
        echo '<td align="center">'.$row["memberB"].'</td>';
        echo '<td align="center">'.$row["memberC"].'</td>';
        echo '</tr>';
     }
  } 
  else {
    echo "0 results";  //if no record found in the database
  }

  //close connection 
  $conn->close();
  echo '<p><a href="adminMenu.php">Back to Main Menu</a></p>';
?>

</body>
</html>
