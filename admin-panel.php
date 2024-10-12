<?php
// Capture the form data
$fullname = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone_number = $_POST['phone_number'] ?? '';
$shipping_address = $_POST['shipping_address'] ?? '';
$city = $_POST['city'] ?? '';
$indoor_plant = $_POST['indoor_plant'] ?? '';
$outdoor_plant = $_POST['outdoor_plant'] ?? '';
// Debugging: Output the form data to make sure they are captured correctly

// Establish a connection to the database
$connection = mysqli_connect('localhost', 'root', '', 'green world');

// Check the connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to insert data into the correct table
$query = "INSERT INTO `order-information` (`Full_Name`, `Email`, `Phone_Number`, `Shipping_Address`, `City`,`indoor_plant`,`outdoor_plant`) 
          VALUES ('$fullname', '$email', '$phone_number', '$shipping_address', '$city','{$indoor_plant}','{$outdoor_plant}')";

// Execute the query
if (mysqli_query($connection, $query)) {
    echo "";
} else {
    echo "Error inserting data: " . mysqli_error($connection);
}

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}




$get_data = "SELECT * FROM `order-information`";
$new_connect = mysqli_query($connection, $get_data);

if (mysqli_num_rows($new_connect) > 0) {
    echo "<table border='1' cellpadding='10'>";
    echo "<thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Shipping Address</th>
                <th>City</th>
                <th>Indoor Plant</th>
                <th>Outdoor Plant</th>
            </tr>
          </thead>
          <tbody>";

    while ($row = mysqli_fetch_assoc($new_connect)) {
        echo "<tr>
                <td>{$row['Full_Name']}</td>
                <td>{$row['Email']}</td>
                <td>{$row['Phone_Number']}</td>
                <td>{$row['Shipping_Address']}</td>
                <td>{$row['City']}</td>
                <td>{$row['indoor_plant']}</td> 
                <td>{$row['outdoor_plant']}</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    echo "No orders found.";
}

// Close the connection
mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon"
        href="/pics/a_cool_logo_for_a_plant_website_with_a_title_of_green_world_and_a_background_of_65cf66.jpeg">

    <link rel="stylesheet" href="./admin-panel.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-panel</title>
</head>

<body>

</body>

</html>