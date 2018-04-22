<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>For Loop</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            h1{
                color:purple;   
            }
        </style> 

    </head>
        <body>
            <div class="container-fluid">
                <h1>For Loop:</h1>
                <div>
<?php
for($i = 1; $i <= 10; $i++){
 echo $i . "<br />";   
}

$carmakes = array("BMW", "Audi", "Mercedes");
foreach($carmakes as $value){
    echo $value . "<br />";   
}

$shoppingBasket = array("a"=>"yogurt", "b"=>"bread", "c"=>"eggs");
foreach($shoppingBasket as $key=>$value){
    echo $key . " : " . $value . "<br />";
}
?>
                </div>
            </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        </body>
</html>