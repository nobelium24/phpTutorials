<?php
// $quotes = readfile('./readme.txt');
// echo $quotes;
$file = './readme.txt';
// file_exists($file) ? readfile($file) : 'file does not exist';
if (file_exists($file)) {
    //read file
    readfile($file) . '<br/>';
    //to copy a file
    copy($file, 'quotes.txt') . '<br/>';
    //absolute path
    echo realpath($file) . '<br/>';
    //file size
    echo filesize($file) . '<br/>';
    //rename file
    // rename($file, 'test.txt');
    
}

else {
    echo 'file does not exist';
}
//make directory
// mkdir('quotes');

//Open file for reading  
$handle = fopen($file, 'r+');

//Read form file
// echo fread($handle, filesize($file)) . '<br/>';
// echo fread($handle, 112) . '<br/>';

//Read a single line
// echo fgets($handle);

//Read a single character
// echo fgetc($handle);

//Write to a file
fwrite($handle, "\nI'm finding it difficult to move on");



?>