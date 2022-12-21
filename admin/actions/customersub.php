
<?php
/*include_once 'db.php';
$email=$_POST['email'];
$insert="insert into em(business_email)values('$email')";
$query=mysqli_query($con,$insert);
header("Location: /career/company/jobs.php?success=true");*/



function get_dbc()
{
    $mysqli = new mysqli("localhost", "root", "", "database");
    if (!$mysqli) die("Unable to connect to MySQL: " . mysqli_error($mysqli));
    return $mysqli;
}

$email=$_POST['email'];
// validate the data matches an email
if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
    
   $mysqli = get_dbc();
  //check if this email already exists
  $query_email = $mysqli->prepare("select email from brand where email=?");
  $query_email->bind_param('s',$email);

  $query_email->execute();
  $query_email_result = $query_email->get_result(); //this does require mysqli_nd to be active in php most web hosts have this active so its fine
  if($query_email_result->num_rows == 1){
      
    echo "sorry this email is already registered";
  }else{
     
    //insert the new email
    $insert_email = $mysqli->prepare("insert into em(business_email) value (?)");
    $insert_email->bind_param('s',$email);
    $insert_email->execute();
    if($insert_email->affected_rows == 1){
        var_dump("im her 4");
     echo "success";
        
    }else{
        var_dump("im her 5");
    echo "there was an issue adding this data to the database";
    }
  }
}

