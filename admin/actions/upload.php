<?php
include_once 'db.php';



if(isset($_POST['submit'])){
    $FName=$_POST["FName"];
    $LName=$_POST["LName"];
    $Phone=$_POST["Phone"];
    $Email=$_POST["Email"];
    $Position=$_POST["Position"];
    $File = $_FILES["file"]["name"];

    
    $insert="insert into upload (firstname,lastname,phone,email,position,file)values('$FName','$LName','$Phone','$Email','$Position','$File' )";

    $query=mysqli_query($con,$insert);
    
    
    header("Location: /career/index.html#succ");
}



/*if(isset($_POST['submit'])){
    $FName=$_POST["FName"];
   
    
    $File = $_FILES["file"]["name"];

    
    $insert="insert into upload('First Name','Resume')values('$FName','$LName', $Phone,$Email,$Position,$File )";

    $query=mysqli_query($con,$insert);
    
    header("Location: /career/index.html#succ");

}*/



