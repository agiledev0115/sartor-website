<?php

require("_basic-auth.php");

require_auth();

$db = new PDO('sqlite:database/database.sqlite');

$newsletter = $db->query("SELECT * from newsletter");

$rsvp = $db->query("SELECT * from rsvp");

header('Location: thankyou/thankyou.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th {
            text-align: left;
        }
        table td, table th {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Newsletter</h1>
    <table style="width:100%">
        <tr>
            <th>Email</th>
        </tr>
        <?php
            foreach ($newsletter as $row) {
                echo "<tr><td>".$row["email"]."</td></tr>";
            }
        ?>
    </table>

    <h1 style="text-align:center;">RSVP</h1>
    <table style="width:100%">
        <tr>
            <th>Email</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th>Company</th>
            <th>Website URL</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip Code</th>
        </tr>
        <?php
            foreach ($rsvp as $row) {
                echo "<tr><td>".$row["email"]."</td><td>".$row["first_name"]."</td><td>".$row["last_name"]."</td><td>".$row["phone"]."</td><td>".$row["company"]."</td><td>".$row["website_url"]."</td><td>".$row["address"]."</td><td>".$row["city"]."</td><td>".$row["state"]."</td><td>".$row["zip_code"]."</td></tr>";
            }
        ?>
    </table>
</body>
</html>
