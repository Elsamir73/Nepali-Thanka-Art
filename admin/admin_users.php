<?php

@include '../includes/config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
   header('location:../login.php');
}

if (isset($_GET['delete'])) {
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `user_form` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_users.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>dashboard</title>

   <link rel="stylesheet" href="css/style.css">

</head>

<body class="admin_body">

   <?php @include 'admin_header.php'; ?>

   <section class="users">

      <h1 class="title">users account</h1>

      <div class="box-container">
         <?php
         $select_users = mysqli_query($conn, "SELECT * FROM `user_form`") or die('query failed');
         if (mysqli_num_rows($select_users) > 0) {
            while ($fetch_users = mysqli_fetch_assoc($select_users)) {
         ?>
               <div class="box">
                  <p>user id : <span><?php echo $fetch_users['id']; ?></span></p>
                  <p>username : <span><?php echo $fetch_users['name']; ?></span></p>
                  <p>email : <span><?php echo $fetch_users['email']; ?></span></p>
                  <p>user type : <span style="color:<?php if ($fetch_users['user_type'] == 'admin') {
                                                         echo 'var(--orange)';
                                                      }; ?>"><?php echo $fetch_users['user_type']; ?></span></p>
                  <a href="admin_users.php?delete=<?php echo $fetch_users['id']; ?>" onclick="return confirm('delete this user?');" class="delete-btn">delete</a>
               </div>
         <?php
            }
         }
         ?>
      </div>

   </section>













   <script src="js/admin_script.js"></script>

</body>

</html>