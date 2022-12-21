
<?php


function get_dbc()
{
    $mysqli = new mysqli("localhost", "root", "", "database");
    if (!$mysqli) die("Unable to connect to MySQL: " . mysqli_error($mysqli));
    return $mysqli;
}


$First=$_POST['First'];
$Last=$_POST['Last'];
$email=$_POST['Email'];
// validate the data matches an email
$mysqli = get_dbc();
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    $insert = $mysqli->prepare("insert into brandinfo (first,last,email) values (?,?,?)");
    $insert->bind_param('sss',$First,$Last,$email);
    $insert->execute();
    /// double check it actually executed and didnt error out
    if($insert->affected_rows == 1){
    
   echo"succes";
    }else{
        echo "error not a valid email";
    }
}