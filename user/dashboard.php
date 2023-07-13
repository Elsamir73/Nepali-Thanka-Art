<?php

@include '../includes/config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:../login.php');
}

echo $_SESSION['user_name'];
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
  <?php include 'header.php'; ?>
<div class="container">

<div class="content">
  <h3>hi, <span>user</span></h3>
  <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
  <p>this is a user  page</p>
  <a href="../login.php" class="btn">login</a>
  <a href="../register.php" class="btn">register</a>
  <a href="../logout.php" class="btn">logout</a>
</div>    

</div>
<?php @include 'footer.php'; ?>

<script.src="js/script.js"></script>
</body>
</html>