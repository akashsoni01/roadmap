<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Filters</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            h1{
                color:purple;   
            }
            h3{
                color: #5ee875;   
            }
        </style> 

    </head>
        <body>
            <div class="container-fluid">
                <h1>Filters:</h1>
                <h3>Clean user inputs</h3>
                <div>
<?php
//username example
$myUsername = '<script>window.alert("Hi")</script>';
$myUsername = filter_var($myUsername, FILTER_SANITIZE_STRING);
echo $myUsername;
//email example
$myEmail = 'sam@     completeweb   developm\\\\ entcour    se.co.uk';
$myEmail = filter_var($myEmail, FILTER_SANITIZE_EMAIL);
echo "<br />" . $myEmail;
//URL example
$myURL = "http://££www.    google.com";
$myURL = filter_var($myURL, FILTER_SANITIZE_URL);
echo "<br />" . $myURL;
?>
                </div>
                <h3>Validate user inputs</h3>
                <div>
<?php

//Email validation
$myEmail = 'sam     completeweb   developm\\\\ entcour    se.co.uk';
$myEmail = filter_var($myEmail, FILTER_SANITIZE_EMAIL);
echo "<p>Cleaned email: $myEmail</p>";
echo "<p>Email validation: " . filter_var($myEmail, FILTER_VALIDATE_EMAIL) . "</p>";
if(filter_var($myEmail, FILTER_VALIDATE_EMAIL)){
    echo "<p>Valid Email</p>";   
}else{
    echo "<p>Invalid Email</p>";   
}
//URL validation
$myURL = "http://££www.    google.com";
$myURL = filter_var($myURL, FILTER_SANITIZE_URL);
echo "<p>Cleaned URL: $myURL</p>";
echo "<p>URL validation: ". filter_var($myURL, FILTER_VALIDATE_URL) ."</p>"
?>
                </div>
            </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        </body>
</html>