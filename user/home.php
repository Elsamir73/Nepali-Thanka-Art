<?php

include "../includes/config.php";

session_start();

if (!isset($_SESSION['user_name'])) {
   header('location:../login.php');
};


if (isset($_POST['add_to_cart'])) {

   $product_id = $_POST['product_id'];
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];
   $user_id = $_SESSION["user_id"];



   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if (mysqli_num_rows($check_cart_numbers) > 0) {
      $message[] = 'already added to cart';
   } else {

      mysqli_query($conn, "INSERT INTO `cart`(user_id, pid, name, price, quantity, image) VALUES('$user_id', '$product_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>NTA</title>

   <link rel="stylesheet" href="css/style.css">
</head>

<body>

   <?php include 'header.php'; ?>


   <section class="home">

      <div class="content">
         <h3>Exploring Primitive Side Of Thanka </h3>
         <p>Each thanka is created using traditional methods and strictly adhering to the proportions of deities as they are laid down in Buddhist scripture</p>
         <a href="about.php" class="btn">discover more</a>
      </div>

   </section>

   <section class="products">

      <h1 class="title">Latest Items</h1>

      <div class="box-container">

         <?php
         $select_products = mysqli_query($conn, "SELECT * FROM `prod` LIMIT 6") or die('query failed');
         if (mysqli_num_rows($select_products) > 0) {
            while ($fetch_products = mysqli_fetch_assoc($select_products)) {
         ?>
               <form action="" method="POST" class="box card-box">
                  <a href="view_page.php?pid=<?php echo $fetch_products['id']; ?>">
                     <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                     </svg>

                  </a>
                  <div class="price">$<?php echo $fetch_products['price']; ?>/-</div>
                  <img src="../uploaded_img/<?php echo $fetch_products['image']; ?>" alt="" class="image">
                  <div class="name"><?php echo $fetch_products['name']; ?></div>
                  <input type="number" name="product_quantity" value="1" min="0" class="qty">
                  <input type="hidden" name="product_id" value="<?php echo $fetch_products['id']; ?>">
                  <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                  <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
                  <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
                  <input type="submit" value="add to cart" name="add_to_cart" class="btn">
               </form>
         <?php
            }
         } else {
            echo '<p class="empty">no items added yet!</p>';
         }
         ?>

      </div>

      <!-- <div class="more-btn">
         <a href="shop.php" class="option-btn">More Products</a>
      </div> -->

   </section>

   <section class="home-contact">

      <div class="content">
         <h3>have any problems?</h3>
         <!-- <p>Contact Us.</p> -->
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </section>



   <?php include 'footer.php'; ?>



</body>

</html>