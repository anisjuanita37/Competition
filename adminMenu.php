<?php 
session_start();

if(empty($_SESSION['username'])):
   header('Location:login.html');
endif;
?>

<html>
<head>
  <title>Main Menu for Admin</title>
</head>

<body>
  <p>Main Menu for</p>
  <?php echo $_SESSION['username']?>
  
  <form action="competitionList.php" method="post">
  
     <p><input type="submit" value="View Record" name="cmdView"></p>
 
  </form>

  <form action="searchRecord.php" method="post">

     <p><input type="submit" value="Search Record" name="cmdSearch"></p>

  </form>

  <form action="deleteList.php" method="post">

     <p><input type="submit" value="Delete Record" name="cmdDelete"></p>

  </form>

  <form action="logout.php" method="post">

     <p><input type="submit" value="Log Out" name="cmdlogout"></p>

  </form>

  <form action="regProcess.php" method="post">

     <p><input type="submit" value="TEST" name="cmdlogout"></p>

  </form>
</body>
</html>