<?php
session_start(); 
//Add the Message to the DB and display the anwser here. 
//Placeholder is using a file instead of DB.

$name = $_REQUEST['name']; 
$email = $_REQUEST['email']; 
$message = $_REQUEST['message'];


//Writing
$filename = '../model/state_files/user_messages.txt'; 
$filestream = fopen($filename, 'a+'); 
fwrite($filestream, $name.', '.$email.', '.$message.';');
fclose($filestream); 

header('location:'.$_SESSION['currPage']);

?>