<html>
<head>
  <title>Registration Form</title>
</head>


<?php session_start();

   include 'db_con.php';

   $user = $_SESSION['username'];
 
   $sql = "SELECT * FROM admin WHERE username = '$user'";
   $result = $conn->query($sql);
 
    //check if records were returned
    if ($result->num_rows > 0) {
  
       // output data of each row
       while($row = $result->fetch_assoc()) {
?>

<body>
  <form method='#'>
    
    <h2 align="center">Creative Multimedia Competition 2020</h2>
    <h3 align="center">Registration Form</h3><br>

    <table align="center" border="1">

      <tr>
          <th colspan="2">Advisor</th>
      </tr>

      <tr>
          <th width="104">Name</td>
          <td width="350"><?php echo $row["username"]?></td>
      </tr>

      <tr>
          <th width="104">Password</td>
          <td width="350"><?php echo $row["password"]?></td>
      </tr>
<?php
         }
    
    } 
    else {
    echo '<font color=red>No record found';
    }

   ?>
      <tr>
          <th width="104">Date</td>
          <td width="350"><input type="text" name="tarikh" size="30"></td>
      </tr>

      <tr>
          <th width="104">Session</td>
          <td width="350"><select name="sesi">
              <option value="0421">0421</option>
              <option value="1120">1120</option>
              <option value="0120">0120</option>
              <option value="0720">0720</option>
          </td>
      </tr>

      <tr>
          <td>&nbsp&nbsp</td>
          <td>&nbsp&nbsp</td>
      </tr>

      <tr>
          <td>&nbsp</td>
          <td>&nbsp</td>
      </tr>

      <tr>
          <td width="104"><input type="submit" name="submitBtn" value="Submit"></td>
          <td width="350"><input type="reset" name="resetBtn" value="Clear"></td>
      </tr>
    </table>
  </form>

 
</body>
</html>


<?php
      
      

      $s=$_GET['sesi'];
      $t=$_GET['tarikh'];
      //create query
      $sql = "INSERT INTO register (username, tarikh, sesi) VALUES ('$user', '$t', '$s')";

      //execute query
      if(mysqli_query($conn,$sql)){
        echo "data inserted into DB<br>";                   
      }else{
       if(mysqli_errno($conn) == 1062)
           echo "You have already registered for club<br>";
       else
        echo "db insertion error:".$sql."<br>";

    }//else end

      //close connection
      $conn->close();
  ?> 



