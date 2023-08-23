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
    <title>Document</title>
    <link rel="stylesheet" href="css/details.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php @include 'header.php'; ?>

    <article class="product">
        <h2 class="product-title">Converse Chuck Taylor All Star Low Top</h2>
        <img src="https://i.ibb.co/Jr7Wh1d/challenges.jpg" alt="Chuck Taylor All Star Shoe" height="250" width="250" class="product-img" />

        <div class="product-info">
            <div class="product-price">
                <p class="price"><strong> $65.00</strong> </p>
                <p class="shipping">Free shipping</p>
            </div>
            <p class="sale">Sale</p>

            <p class="product-description">Ready to dress up or down, these classic canvas Chucks are an everyday wardrobe staple.</p>

            <a href="https://www.converse.com" target='_blank' class="more-info">More information &rarr;</a>
        </div>

        <div class="product-details">
            <h3 class="details-title"> Product details</h3>
            <ul class="details-list">
                <li>Lightweight, durable canvas sneaker</li>
                <li>Lightly padded footbed for added comfort</li>
                <li>Iconic Chuck Taylor ankle patch</li>
            </ul>
        </div>
        <button class="add-cart">Add to cart</button>

    </article>

    <?php include 'footer.php'; ?>

</body>

</html>