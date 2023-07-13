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
        <i class="fa-solid fa-user"></i>
        <!-- <a href="contacts.php">message</a> -->
    </nav>

    <div class="icons">
    <i class="fa-solid fa-user"></i>
        <div id="menu-btn" class="fas fa-bars"></div>
        <p id=></p>
    </div>

    <div class="account-box">
       <p>username : <span><?php echo $_SESSION['admin_name'];?></span></p>  
       <a href="../logout.php" class="delete-btn">logout</a>
       <!-- <div>new <a href="../login.php">login</a> | <a href="../register.php">register</a> </div> -->
    </div>
    
</div>

</header>