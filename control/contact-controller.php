<?php
session_start(); 

function GetId(){
$idFileName = '../model/state_files/idLog.txt'; 
$idFile = fopen($idFileName, 'r+');
$id = fread($idFile, filesize($idFileName)); 
fclose($idFile);
return $id; 
}

function SetId(int $id){
    $idFileName = '../model/state_files/idLog.txt'; 
    $idFile = fopen($idFileName, 'w+');  
    fwrite($idFile, $id); 
    fclose($idFile);
}

//name can contain space but no special charackters. 
$name = htmlspecialchars($_REQUEST['name']);
$email = htmlspecialchars($_REQUEST['email']); 
$message = htmlspecialchars($_REQUEST['message']); 

$error = false;

$nameregex = '/^[A-ZÜÖÄ][a-züöä]*$/';
if (!preg_match($nameregex, $name)) {
    echo 'Name is not valid';
    $error = true;
}


$emailregex = '/^[^@\s]+@[^@\s]+\.[^@\s]+$/';
if (($email != NULL) || ($email != "")) {
    if (!preg_match($emailregex, $email)) {
        echo 'Email is not valid';
        $error = true;
    }
}

//Regex pattern that allows only letters, numbers, spaces, and some special characters.
$messageregex = '/^[A-Za-z0-9\s\,\.\?\!\:\;\(\)\-\_\+\=\@\#\$\%\&\*\[\]\{\}\"\'\`\/\|\\\]*$/';
if (($message != NULL) || ($message != "")) {
    if (!preg_match($messageregex, $message)) {
        echo 'Message is not valid';
        $error = true;
    }

}

if ($error == false) {
    //Writing
    include './state-file-controller.php'; 
    $id = GetId(); 
    appendStateFile('../model/state_files/user_messages.txt',  $id.'^'. $name.'^'.$email.'^'.$message.';'); 
    $filename = '../model/state_files/user_messages.txt'; 
    $filestream = fopen($filename, 'a+'); 
    SetId(++$id); 
    header('location:'.$_SESSION['currPage']);
} else {
    echo '<script>alert("The data you entered in the formular is invalid!");</script>';
}

?>