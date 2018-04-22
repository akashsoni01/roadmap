<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>data types: integers and floats</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            h1{
                color:purple;   
            }
        </style>

    </head>
        <body>
            <div class="container-fluid">
                <h1>Integers and Floats</h1>
                <div>
<?php
$x = 7;
var_dump($x);
$y = 3;
$z = $x+$y;
echo "<br />";
echo $z;
$z = 0x1A;
echo "<br />";
var_dump($z);
$w = 0123;
echo "<br />";
var_dump($w);

$floatingNumber = 3.7;
echo "<br />";
var_dump($floatingNumber);
?>
                </div>
            </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        </body>
</html>