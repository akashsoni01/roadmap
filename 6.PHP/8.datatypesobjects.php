<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>data types: objects</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            h1{
                color:purple;   
            }
        </style>

    </head>
        <body>
            <div class="container-fluid">
                <h1>Objects:</h1>
                <div>
<?php
class car{
    //properties
    public $make = "Ford";
    private $status = "off";
    
    //methods
    function turn_on(){
     $this->status = "on";          
    }
    function getStatus(){
        return $this->status;   
    }
}

$myCar = new car;
var_dump($myCar);
echo "<br />";
echo $myCar->make;
echo "<br />";
$myCar->turn_on();
var_dump($myCar);
echo "<br />";
echo $myCar->getStatus();
?>
                </div>
            </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        </body>
</html>