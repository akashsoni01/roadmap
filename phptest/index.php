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
            </div>
            <?php
            print_r($_POST);
            ?>
            <form method="get" action="index.php">
            <label for="username">User Name</label>
                <input type="text" id="username" name="username" >
                <input type="submit" value="Submit">
            </form>
        </body>
</html>