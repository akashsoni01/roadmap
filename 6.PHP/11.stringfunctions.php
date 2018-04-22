<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>data types: String Functions</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            h1{
                color:purple;   
            }
        </style>

    </head>
        <body>
            <div class="container-fluid">
                <h1>String Functions:</h1>
                <div>
<?php
$message = "Welcome to my website! Have a good time exploring my website!";
echo "Length of my message: " . strlen($message);
echo "<br />";
echo "My message contains " . str_word_count($message) . " words.";
echo "<br />";
echo str_replace("website", "world", $message, $number_of_words_replaced);
echo "<br />";
echo "Number of words replaced: " . $number_of_words_replaced . " words.";
echo "<br />";
echo "Can you read from the right? <br />" . strrev($message);
?>
                </div>
            </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        </body>
</html>