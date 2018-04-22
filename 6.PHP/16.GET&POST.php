<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GET AND POST</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            h1{
                color:purple;   
            }
        </style> 

    </head>
        <body>
            <div class="container-fluid">
                <h1>Get and Post:</h1>
                <div>
<?php
echo "<h3>GET:</h3>";
print_r($_GET);
if($_GET["submit"]){
    if($_GET["username"]) {
        echo "<p>Hi ". $_GET["username"] . " . Welcome to my page!</p>";   
    }
}
echo "<h3>POST:</h3>";
print_r($_POST);
if($_POST["submit"]){
    if($_POST["country"]){
        echo "<p>Your Country is: " . $_POST["country"] . ".</p>";   
    }
}
?>
                    <form method="get" action="16.GET&POST.php">
                        <label for="username">Username:</label>
                    <input type="text" name="username" id="username">
                        <input type="submit" name="submit" value="Submit">
                    </form>
                    <form method="post" action="16.GET&POST.php">
                        <label for="country">Country:</label>
                    <input type="text" name="country" id="country">
                        <input type="submit" name="submit" value="Submit">
                    </form>
                </div>
            </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        </body>
</html>