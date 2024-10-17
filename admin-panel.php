<?php
// Establish a connection to the database
$connection = mysqli_connect('localhost', 'root', '', 'green world');

// Check the connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to fetch all data from the database for display
$get_data = "SELECT * FROM `order-information`";
$new_connect = mysqli_query($connection, $get_data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="logo-pics/tree.png">
    <link rel="stylesheet" href="./admin-panel.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 1px solid black;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    h1 {
        text-align: center;
        margin: 20px;
    }
    </style>
</head>

<body>

    <header>
        <h1>Admin Panel - Order Information</h1>
    </header>

    <main>
        <?php
        // Check if there are any records and display them in a table
        if (mysqli_num_rows($new_connect) > 0) {
            echo "<table>";
            echo "<thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Shipping Address</th>
                        <th>City</th>
                        <th>Indoor Plant</th>
                        <th>Outdoor Plant</th>
                        <th>Delivery Option</th>
                    </tr>
                  </thead>
                  <tbody>";

            // Loop through the records and display them row by row
            while ($row = mysqli_fetch_assoc($new_connect)) {
                echo "<tr>
                        <td>{$row['Full_Name']}</td>
                        <td>{$row['Email']}</td>
                        <td>{$row['Phone_Number']}</td>
                        <td>{$row['Shipping_Address']}</td>
                        <td>{$row['City']}</td>
                        <td>{$row['indoor_plant']}</td>
                        <td>{$row['outdoor_plant']}</td>
                        <td>{$row['Delivery_option']}</td>
                      </tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "<p>No orders found.</p>";
        }

        // Close the connection to the database
        mysqli_close($connection);
        exit();
        ?>
    </main>

</body>

</html>