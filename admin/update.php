<?php

@include '../includes/config.php';

$id = $_GET['edit'];

if (isset($_POST['update_product'])) {

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = '../uploaded_img/' . $product_image;

    if (empty($product_name) || empty($product_price) || empty($product_image)) {
        $message[] = 'please fill out all';
    } else {
        $update = "UPDATE prod SET name= '$product_name', price= '$product_price', image= '$product_image'
    WHERE id =$id";
        $upload = mysqli_query($conn, $update);
        if ($upload) {
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
        } else {
            $message[] = 'could not add the product';
        }
    }
};

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM prod WHERE id = $id");
    header('location:home.php');
};

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Update</title>

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->

    <link rel="stylesheet" href="css/adminup.css">
</head>

<body>

    <?php

    if (isset($message)) {
        foreach ($message as $message) {
            echo '<span class="message">' . $message . '</span>';
        }
    }

    ?>

    <div class="container">

        <div class="admin-product-form-container">

            <?php

            $select = mysqli_query($conn, "SELECT * FROM prod WHERE id = $id");
            while ($row = mysqli_fetch_assoc($select)) {

            ?>

                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <h3>update the product</h3>
                    <input type="text" placeholder="enter product name" value="<?= $row['name']; ?>" name="product_name" class="box">
                    <input type="number" placeholder="enter product price" value="<?= $row['price']; ?>" name="product_price" class="box">
                    <input type="text" class="box" placeholder="details" value="<?= $row['details'] ?>">
                    <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
                    <input type="submit" class="btn" name="update_product" value="update product">
                    <a href="home.php" class="btm">go back</a>
                </form>

            <?php }; ?>

        </div>

    </div>

</body>

</html>