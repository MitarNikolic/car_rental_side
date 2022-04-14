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

$name = $_REQUEST['name']; 
$email = $_REQUEST['email']; 
$message = $_REQUEST['message'];


//Writing
include './state-file-controller.php'; 
$id = GetId(); 
appendStateFile('../model/state_files/user_messages.txt',  $id.'^'. $name.'^'.$email.'^'.$message.';'); 
$filename = '../model/state_files/user_messages.txt'; 
$filestream = fopen($filename, 'a+'); 
SetId(++$id); 
header('location:'.$_SESSION['currPage']);

?>