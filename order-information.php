<?php
// Capture the form data
$fullname = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone_number = $_POST['phone_number'] ?? '';
$shipping_address = $_POST['shipping_address'] ?? '';
$city = $_POST['city'] ?? '';
$indoor_plant = $_POST['indoor_plant'] ?? '';
$outdoor_plant = $_POST['outdoor_plant'] ?? '';
$delivery_option = $_POST['delivery_option'] ?? '';

// Establish a connection to the database
$connection = mysqli_connect('localhost', 'root', '', 'green world');

// Check the connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // SQL query to insert data into the correct table
    $query = "INSERT INTO `order-information` (`Full_Name`, `Email`, `Phone_Number`, `Shipping_Address`, `City`, `indoor_plant`, `outdoor_plant`, `Delivery_option`) 
              VALUES ('$fullname', '$email', '$phone_number', '$shipping_address', '$city', '$indoor_plant', '$outdoor_plant', '$delivery_option')";

    // Execute the query and check for success
    if (mysqli_query($connection, $query)) {
        // Redirect the user after successful submission (PRG pattern)
        header("Location: order-information.php?success=1");
        exit();
    } else {
        echo "Error inserting data: " . mysqli_error($connection);
    }
}

// Close the connection to the database
mysqli_close($connection);

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
    table {
        position: absolute;
        z-index: 777;
    }
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