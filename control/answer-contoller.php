<?php
include 'state-file-controller.php'; 
session_start(); 
$answer = $_REQUEST["answer"]; 
$questionId = $_REQUEST["questionId"]; 
appendStateFile('../model/state_files/user_answers', $questionId.'^'.$answer.';'); 
header('location:'.$_SESSION['currPage']);
?>