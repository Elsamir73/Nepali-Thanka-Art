<?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

<header class="header">

   <div class="header">

      <a href="home.php" class="logo">Nepali Thanka Art.</a>

      <nav class="navbar">
         <ul>
            <li><a href="home.php">home</a></li>
            <li><a href="#">pages +</a>
               <ul>
                  <li><a href="about.php">about</a></li>
                  <li><a href="contact.php">contact</a></li>
               </ul>
            </li>
            <li><a href="shop.php">shop</a></li>
            <li><a href="orders.php">orders</a></li>
            <li><a href="#">account +</a>
                <ul>
                  <li><a href="../login.php">login</a></li>
                  <li><a href="../register.php">register</a></li>
                </ul>
            </li>
         </ul>
      </nav>
      
           <div class="icons">
               <div id="menu-btn" class="fas fa-bars"></div>
               <a href="search.php" class="fas fa-search"></a>
               <a href="user-btn.php" class="fas fa-user"></a>
               <!-- <?php
                $select_cart_count = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
                $cart_num_rows = mysqli_num_rows($select_cart_count);
               ?> -->
               <a href="cart.php"> <i class="fas fa-shopping"></i><span>(<?php echo $cart_num_rows; ?>)</span>(00)</a>
           </div>  

           <div class="account-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="../logout.php" class="delete-btn">logout</a>
          </div>


   </div>

</header>