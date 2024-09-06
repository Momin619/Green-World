<?php
$fullname = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone-number'];
$address = $_POST['address'];
$city = $_POST['city'];

// Making the Connection
$connection = mysqli_connect('localhost','root','','green world') or die();

// Writing the Query
$insert = "INSERT INTO `order-information` (`Full_Name`,Email,`Phone_Number`,City,`Shipping_Address`) VALUES ('{$fullname}'
,'{$email}','{$phone}','{$address}','{$city}')";

// Executing the Theory 

$execute = mysqli_query($connection,$insert);

if(empty($fullname) || empty($email) || empty($phone) || empty($address) || empty($city) ){
    header( "Location: ./form.php");
}
else{
    echo '<h1> <b> Your Plants Has been Ordered </b> </h1>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    h1 {
        font-size: 3rem;
        font-family: "Poppins", sans-serif;
        color: white;
        display: flex;
        position: absolute;
        top: 45%;
        padding: 1rem;
        border-radius: 20px;
        left: 50%;
        border: 4px solid white;
        background-color: #00c227;
        transform: translate(-50%, -50%);
        align-items: center;
        justify-content: center;

    }

    body {
        /* background: linear-gradient(green, lime, teal); */

        /* background: linear-gradient(#b9fbc0, #8efc9c, #5bfc7d, #2afc5f); */
        /* background: linear-gradient(135deg, #a1f4b3, #6ff1a1, #3ced87, #00d563); */
        /* background: linear-gradient(135deg, #a8e06b, #5ae03a, #1ecb15, #00b212); */
        background: linear-gradient(#9cff91, #5aff6d, #1fdf44, #00c227);
        /* background: linear-gradient(135deg, #d0f7c1, #a1f0a1, #6ee080, #2dff50); */
        /* background: linear-gradient(135deg, #a1f4b3, #6ff1a1, #3ced87, #00d563); */
        /* background: linear-gradient(#a8d5ba, #7fbc8a, #4a773c, #2d4a26); */






    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Order-details
    </title>
</head>

<body>


</body>

</html>