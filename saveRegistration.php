<html>
<head>
<title>Creative Multimedia Competition 2020</title>
</head>
<body>

  <?php
   
     $date = date("d-m-Y");

     //get input values from form
     extract($_POST);
 
  ?>
  <p>Date: <b><?php print($date) ?></b></p>
  <h3>Creative Multimedia Competition 2020</h3>
  <table>
     <tr><td>Advisor Name</td>
        <td>:</td>
        <td><b><?php print($adName) ?></b></td>
     </tr>
    <tr><td>Advisor Contact</td>
        <td>:</td>
        <td><b><?php print($adContact) ?></b></td>
    </tr>
    <tr><td>Advisor Email</td>
        <td>:</td>
        <td><b><?php print($adEmail) ?></b></td>
    </tr>
    <tr><td>Campus</td>
        <td>:</td>
        <td><b><?php print($campus) ?></b></td>
    </tr>
    <tr><td>Member 1</td>
        <td>:</td>
        <td><b><?php print($member1) ?></b></td>
    </tr>
    <tr><td>Member 2</td>
        <td>:</td>
        <td><b><?php print($member2) ?></b></td>
    </tr>
    <tr><td>Member 3</td>
        <td>:</td>
        <td><b><?php print($member3) ?></b></td>
    </tr>

  </table>

  <?php
   include 'db_con.php';
        //create query
      $sql = "INSERT INTO competition (advisorName, advisorContact, advisorEmail, campus, memberA, memberB, memberC) VALUES ('$adName', '$adContact', '$adEmail', '$campus', '$member1', '$member2', '$member3')";

      //execute query
      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } 
      else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      //close connection
      $conn->close();
  ?> 

  <br>

  <form action="adminMenu.php">
     <input type="button" name="printButton" onClick="window.print()" value="Print">
     <input type="submit" value="Back to Main" name="cmdBackMain">
  </form>


</body>
</html>
