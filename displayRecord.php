<?php
  include 'db_con.php';
  
  //escape special characters in a string
  $advisor = mysqli_real_escape_string($conn, $_POST['advisor_name']);

  //create and execute query
  $sql = "SELECT * FROM competition WHERE advisorName LIKE '%$advisor%'";
  $result = $conn->query($sql);

  //check if records were returned
  if ($result->num_rows > 0) {

     //create a table to display the record
     echo 'Selected record as the following: <br><br>';
     echo '<p><table cellpadding=10 cellspacing=0 border=1 align="center">';
     echo '<tr><td align="center"><b>No</b></td>
     <td align="center"><b>Advisor Name</b></td>
     <td align="center"><b>Advisor Contact</b></td>
     <td align="center"><b>Advisor Email</b></td>
     <td align="center"><b>Advisor Campus</b></td>
     <td align="center"><b>Team Member 1</b></td>
     <td align="center"><b>Team Member 2</b></td>
     <td align="center"><b>Team Member 3</b></td>
     <td align="center">&nbsp&nbsp</td>
     </tr>';
     
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
        ?>
        <td><a href="editRecord.php?id=<?php echo $row["id"]; ?>">UPDATE</a></td></tr>
        <?php
        echo '</tr>';
     }
     echo '</table></p>';
  } 
  else {
    echo '<font color=red>No record found';
  }

  //close connection 
  $conn->close();

?>