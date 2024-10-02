<?php

$Fullname = $_POST['name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$shipping_address = $_POST['shipping_address'];
$city = $_POST['city'];

// Writing the Query
$query = "INSERT INTO `order-information` (`Full_Name`,Email,`Phone_Number`,`Shipping_Address`,City ) VALUES ('{$Fullname}','{$email}','{$phone_number}','{$shipping_address}','{$city}')" ;

// Making he connection
$connection = mysqli_connect('localhost','root','','green world') or die();


$execution = mysqli_query($connection,$query);
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <link rel="stylesheet" href="./components.css">
    <link rel="icon" href="pics/a_cool_logo_of_a_plant_website_for_menu_bar_with_title_green_world.jpeg">

    <link rel="stylesheet" href="./order-information.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order-information</title>

    <style>

    </style>



</head>

<body>
    <div class="background">
        <img src="./sample-background-images/order-information-image/rename-removebg-preview.png" alt="">
    </div>
    <div class="transparent"></div>

    <div class="plant-order">
        <h1 class="plants">Your Plants has been ordered</h1>
    </div>
</body>

</html>