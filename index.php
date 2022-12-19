
<?php 

    session_start();
    $ownpath = str_replace($_SERVER['DOCUMENT_ROOT'], "",str_replace("\\", "/",dirname(__FILE__)).'/');
    $_SESSION["APP_ROOT"] =$ownpath;
    define('APP_ROOT', $_SESSION["APP_ROOT"] ); 
    $loggedin=isset($_SESSION['login']); 
    
    if($loggedin){
        include "sartor/admin/dashboard.php";
    }else{
        include "home.php";
    }

?>