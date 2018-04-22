<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Send Email</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            h1{
                color:purple;   
            }
        </style> 

    </head>
        <body>
            <div class="container-fluid">
                <h1>Send Email:</h1>
                <div>
<?php
$to = "sam@developwithsam.890m.com";
$subject = "We are learning PHP!";
$message = "<html><body><h1 style='color:green'>We are learning PHP!</h1><h3 style='color:orange'>What are you waiting for?</h3><p>Join us and spread the word!</p></body></html>";
$headers = "Content-type: text/html;";
echo mail($to, $subject, $message, $headers);
?>
                </div>
            </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        </body>
</html>