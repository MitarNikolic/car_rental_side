<?php
function getFormattedStateFile(string $fileContent, string $separator){
    return explode($separator, $fileContent); 
}

function readStateFile(string $file){
    $fileContent = ""; 
    if(file_exists($file) && (filesize($file) > 0)){
        $filename = $file; 
        $filestream = fopen($filename, 'r+');
        $fileContent = fread($filestream, filesize($filename)); 
        fclose($filestream); 
    
    }
    
    return $fileContent; 
}

function writeStateFile(string $file, string $content){
    $filename = $file; 
    $filestream = fopen($filename, 'w+'); 
    fwrite($filestream, $contents); 
    fclose($filestream); 
}


function appendStateFile(string $filename, string $content){ 
    if(file_exists($filename)){
        $filestream = fopen($filename, 'a+'); 
        fwrite($filestream, $content); 
        fclose($filestream); 
    }
}
?>