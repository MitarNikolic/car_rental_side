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


//TODO: Validate all the below
//name can contain space but no special charackters. 
$name = htmlspecialchars($_REQUEST['name']);
$email = htmlspecialchars($_REQUEST['email']); 
$message = htmlsdpecialchars($_REQUEST['message']); 

//Writing
include './state-file-controller.php'; 
$id = GetId(); 
appendStateFile('../model/state_files/user_messages.txt',  $id.'^'. $name.'^'.$email.'^'.$message.';'); 
$filename = '../model/state_files/user_messages.txt'; 
$filestream = fopen($filename, 'a+'); 
SetId(++$id); 
header('location:'.$_SESSION['currPage']);

?>