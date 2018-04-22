<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Error Handling</title>
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
            <h1>Error Handling:</h1>
            <h3>Example 1:</h3>
<?php
function errorHandler1($errno, $errstr, $errfile, $errline, $errcontext){
    echo "<p><strong>Error</strong>: [$errno] $errstr.</p>";
}
// Set error handler
set_error_handler("errorHandler1");
echo filesize("inexistingfile.txt");
?>
            <h3>Example 2:</h3>
<?php
function calculateFileSize($file){
    if(!file_exists($file)){
        trigger_error($file . " does not exist and thus size cannot be retrieved!", E_USER_WARNING);  
        return false;
    }else{
        return filesize($file);   
    }
}

function errorHandler2($errno, $errstr, $errfile, $errline, $errcontext){
    $log = "Error[$errno] on " . date("d/m/Y H:i:s") . "\r\n";
    $log .= "Details: $errstr. \r\n";
    $log .= "Location: In $errfile on line $errline. \r\n";
    $log .= "Variables: " . print_r($errcontext, true) . "\r\n";
    
    error_log($log, 3, "logs/errorhandlingerrors.log");
    error_log($log, 1, "sam@hellodevelopers.890m.com");
    die("<p>An error occured, please try again!</p>");   
}

set_error_handler("errorHandler2");
echo calculateFileSize("inexistingfile.txt");

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