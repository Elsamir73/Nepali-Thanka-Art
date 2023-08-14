<?php include "../includes/config.php" ?>
<?php
if (isset($error)) {
   foreach ($error as $error) {
      echo '<span class="error-msg">' . $error . '</span>';
   };
};
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<header class="header">

   <div class="flex">

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
         <a href="search.php" class="fas fa-search icon"></a>
         <i id="menu-btn" class="fas fa-user icon"></i>
         <!-- <?php
               $select_cart_count = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
               $cart_num_rows = mysqli_num_rows($select_cart_count);
               ?> -->
         <a href="cart.php">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
               <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
            </svg>

            <span>(<?php echo $cart_num_rows; ?>)</span>
         </a>
      </div>


      <!-- <svg id="menu-btn" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
         <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
      </svg> -->

      <div class="account-box">

         <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
         <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
         <a href="../logout.php" class="delete-btn btn">logout</a>
         <button class="delete-btn btn" id="user-btn">Close</button>
      </div>


   </div>
   <script src="../js/script.js"></script>
</header>