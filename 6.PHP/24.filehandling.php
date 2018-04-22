<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>File Handling</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            h1{
                color:purple;   
            }
            h3{
                color:#42d5ce;   
            }
            .containingDiv{
                border:1px solid #7c73f6;
                margin-top: 100px;
                border-radius: 15px;
            }
        </style> 

    </head>
        <body>
<?php
include "header.php";
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-offset-1 col-sm-10 containingDiv">
            <h1>File Handling</h1>
            
                <h3>fopen/fclose:</h3>
<?php
if(file_exists("sometextf.txt")){
    $myFile = fopen("sometext.txt", "r"); 
    fclose($myFile);
}else{
    echo "<p>This file does not exist!</p>";
}

?>
            
                <h3>fread:</h3>
<?php
$fileHandle = fopen("sometext.txt", "r") or die("Unable to open file!");
$fileContent = fread($fileHandle,filesize("sometext.txt"));
fclose($fileHandle);
var_dump($fileContent);
?>
            
                <h3>file_get_contents:</h3>
<?php
$fileContent = file_get_contents("sometext.txt") or die("Unable to read file");
var_dump($fileContent);

?>
            
                <h3>file function:</h3>
<?php
$fileContent = file("sometext.txt") or die ("Unable to read file");
var_dump($fileContent);
echo "<br />";
foreach($fileContent as $line){
    echo $line . "<br />";   
}
?>
            
                <h3>fwrite:</h3>
<?php
$fileHandle = fopen("sometext.txt", "w") or die ("Unable to open file!");
fwrite($fileHandle, "This is new content") or die("Unbale to write to file!");
$fileContent = file("sometext.txt") or die("Unable to read file!");
var_dump($fileContent);
?>
        
                <h3>file_put_contents:</h3>
<?php
file_put_contents("sometext.txt", "\r\n This is some other new content!", FILE_APPEND) or die ("Unable to write to file!");
$fileContent = file("sometext.txt") or die("Unable to read file!");
var_dump($fileContent);
?>

        </div>
    </div>
</div>
<?php
include "footer.php";
?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        </body>
</html>