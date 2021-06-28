<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php 
    if(isset($_SESSION['errorMsg'])){
      echo "<div style='background-color:red; color:white'>" . $_SESSION['errorMsg'] . "</div>";
      unset($_SESSION['errorMsg']);
    }
  ?>


  <form action="process.php" method="post">
    <input type="text" name="title" id="">
    <br><br>
    <input type="text" name="auther" id="">
    <br><br>
    <select name="type">
    <option value="pdf">PDF</option>
    <option value="txt">Text</option>
    <option value="excel">Excel</option>
    </select>
    <br><br>
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <br><br>
    <input type="submit" value="submit">
  </form>

</body>
</html>