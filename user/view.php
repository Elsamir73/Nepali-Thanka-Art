<!-- <?php

@include '../includes/config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:../login.php');
}
?
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link rel="stylesheet" href="./user/dashboard.css">
</head>
<body>
    <?php include 'header.php' ?>

<section class="home">

   <div class="content">
      <h3>new collections</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime reiciendis, modi placeat sit cumque molestiae.</p>
      <a href="about.php" class="btn">discover more</a>
   </div>

</section>
<section class="products">

    <h1 class="title">latest products</h1>
     
    <div class="box-container">
  
       <?php
           $select_products = mysqli_query($conn, "SELECT * FROM 'products'") or die('query failed');
           if(mysqli_num_rows($select_products) > 0){
              while($fetch_products = mysqli_fetch_assoc($select_products)){
        ?>
        <form action="" method="POST" class="box">
            <a href="view_page.php?pid=<?php echo $fetch_products['id'];?>" class="fas fa-eye"></a>
            <div class="price">$<?php echo $fetch_products['price']; ?>/-</div>
            <img src="../uploaded_img/<?php echo $fetch_products['image']; ?>" 
            alt="">
            <div class="name"><?php echo $fetch_products['name']; ?></div>
            <input type="number" name="product_quantity" value="1" min="0"
            class="qty">
            <input type="hidden" name="product_id" value="<?php echo
             $fetch_products['id']; ?>">
             <input type="hidden" name="product_name" value="<?php echo
             $fetch_products['name']; ?>">
             <input type="hidden" name="product_price" value="<?php echo
             $fetch_products['price']; ?>">
             <input type="hidden" name="product_image" value="<?php echo
             $fetch_products['image']; ?>">
             <input type="submit" value="add to cart" name="add_to_cart" class="btn">
        </form>
        <?php        
            }
        }else{
            echo '<p class="empty">no products added yet!</p>';
        }
        ?>
       
       
    </div>

</section>



<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html> -->