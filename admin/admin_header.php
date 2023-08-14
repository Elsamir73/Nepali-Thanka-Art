<?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
?>

<header class="header">

<div class="flex">
    <a href="home.php" class="logo">Admin<span>Panel</span></a>

    <nav class="navbar">
        <!-- <a href="admin_page.php">home</a> -->
        <a href="products.php">products</a>
        <a href="admin_orders.php">orders</a>
        <a href="admin_users.php">users</a>
        <!-- <i class="fa-solid fa-user"></i> -->
        <!-- <a href="contacts.php">message</a> -->
    </nav>

    <svg id="menu-btn" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
<path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
</svg>

    <div class="account-box">
       <p>username : <span><?php echo $_SESSION['admin_name'];?></span></p>  
       <a href="../logout.php" class="delete-btn">logout</a>
       <button class="delete-btn" id="user-btn">Close</button>
       <!-- <div>new <a href="../login.php">login</a> | <a href="../register.php">register</a> </div> -->
    </div>
    
</div>

</header>

<script src="../js/admin_script.js">
</script>