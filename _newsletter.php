<?php

$email = strtolower($_POST["email"]);

//SQLite. Store in DataBase
$db = new PDO('sqlite:database/database.sqlite');

$db->exec('CREATE TABLE IF NOT EXISTS newsletter(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    email VARCHAR(60)
)');

$db->exec("INSERT INTO newsletter(email) VALUES('".$email."')");

header('Location: thankyou/thankyou.php');


?>
