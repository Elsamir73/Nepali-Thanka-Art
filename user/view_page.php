<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:../login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
  <?php @include 'header.php'; ?>





  <?php @include .'footer.php';?>

  <script.src="js/script.js"></script>
</body>
</html>  