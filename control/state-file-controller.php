<?php
function getFormattedStateFile(string $fileContent, string $separator){
    return array_filter(explode($separator, $fileContent)); 
}

function readStateFile(string $file){
    $filename = $file; 
    $filestream = fopen($filename, 'r+'); 
    $fileContent = fread($filestream, filesize($filename)); 
    fclose($filestream); 
    return $fileContent; 
}

function writeStateFile(string $file, string $content){
    $filename = $file; 
    $filestream = fopen($filename, 'w+'); 
    fwrite($filestream, $contents); 
    fclose($filestream); 
}


function appendStateFile(string $file, string $content){
    $filename = $file; 
    $filestream = fopen($filename, 'a+'); 
    fwrite($filestream, $content); 
    fclose($filestream); 
}
?>