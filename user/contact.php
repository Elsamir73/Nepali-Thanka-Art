<?php

@include '../includes/config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:../login.php');
};

if (isset($_POST['send'])) {
    $user_id = $_SESSION['user_id'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

    if (mysqli_num_rows($select_message) > 0) {
        $message[] = 'message sent already!';
    } else {
        mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
        $message[] = 'message sent successfully!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php @include 'header.php'; ?>

    <section class="heading">
        <h3>contact us</h3>
        <p> <a href="home.php">home</a> / contact </p>
    </section>



    <!-- Form -->
    <section id="form" class="">
        <div class="inner-width">
            <h1 class="section-title">Leave a Message</h1>
            <form action="https://formsubmit.co/shuzhal777@gmail.com" class="contact-form" method="post">
                <input type="text" id="name" name="name" class="nameZone" placeholder="Your Full Name" />
                <input type="email" id="email" name="email" class="emailZone" placeholder="Your Email *" required />
                <input type="text" id="subject" name="subject" class="subjectZone" placeholder="Subject *" required />
                <textarea class="messageZone" id="message" name="message" placeholder="Message *" required></textarea>
                <input type="submit" value="Send Message" class="btn" />
                <input type="hidden" name="_next" value="http://localhost/Nepali-Thanka-Art/home.php" />
            </form>
        </div>
    </section>

    <?php include 'footer.php'; ?>


</body>

</html>