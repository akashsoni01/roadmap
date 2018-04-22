<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Array functions</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            h1{
                color:purple;   
            }
        </style> 

    </head>
        <body>
            <div class="container-fluid">
                <h1>Array Functions:</h1>
                <div>
<?php
$shoppingBasket1 = array("bread", "milk", "eggs", "bread");
$shoppingBasket2 = array("apple", "banana", "orange");
$shoppingBasket = array_merge($shoppingBasket1, $shoppingBasket2);
echo "<p>Shopping Basket:</p>";
print_r($shoppingBasket);
echo "<p>Number of items in Shopping basket: </p>" . count($shoppingBasket);


$count = array_count_values($shoppingBasket);
echo "<p>Basket Count</p>";
print_r($count);
echo "<p>Number of bread iteams in Basket: </p>" . $count["bread"];


if(in_array("bread", $shoppingBasket)){
    echo "<p>There is bread in the basket.</p>";
}else{
    echo "<p>There is no bread in the basket.</p>";   
}

array_push($shoppingBasket,"yogurt");
echo "<p>Shopping Basket after adding yogurt: </p>";
print_r($shoppingBasket);
if($_GET["submit"]){
    if($_GET["item"]){
        array_push($shoppingBasket,$_GET["item"]); 
    }
}
echo "<p>Shopping Basket:</p>";
print_r($shoppingBasket);

array_splice($shoppingBasket, 0, 4,array("mango", "kiwi"));
echo "<p>Shopping Basket:</p>";
print_r($shoppingBasket);

sort($shoppingBasket);
echo "<p>Shopping Basket sorted in ascending order:</p>";
print_r($shoppingBasket);

$carMakes = array("BMW"=>"X5", "Audi"=>"A6", "Mercedes"=>"CLS");
echo "<p>Car makes:</p>";
print_r($carMakes);
asort($carMakes);
echo "<p>Car makes sorted in ascending order by value:</p>";
print_r($carMakes);
ksort($carMakes);
echo "<p>Car makes sorted in ascending order by keys:</p>";
print_r($carMakes);
?>
                    <form method="get">
                        <label for="item">Add item to shopping Basket:</label>
                        <input type="text" name="item" id="item">
                        <input type="submit" name="submit" value="Submit">
                    </form>
                </div>
            </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        </body>
</html>