<?php 
require_once 'vendor/autoload.php';


use Twilio\Rest\Client;

if(isset($_POST['mobile']) &&  isset($_POST['message'])) { 
//twilo code

$sid='AC95d78c66420911af24db4d538ed69f15';
$token='0e5aa7d319b7ed0699a9c12169a3cafe';

$client = new Client ($sid,$token);
$message = $client->messages->create(
$_POST['mobile'],array(
'from' => '+923435542500',
'body' => 'message',

)
);
if($message ->$sid ){
	echo "message sent";
}
	
}
?>


<h1>Sending sms </h1>

<form action="" method ="post">


<input type="test" placeholder ="Mobile" name="mobile">
<br>
<textarea placeholder="message" name="message"></textarea>
<input type="submit"  value="send">

</form>