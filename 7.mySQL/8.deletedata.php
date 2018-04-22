<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Delete data</title>
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
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-offset-1 col-sm-10 containingDiv">
            <h1>Delete Data:</h1>
            <h3>Connect to database:</h3>
<?php
//mysqli_connect(host, username, password, dbname)
$link = @mysqli_connect("mysql11.000webhost.com", "a7099072_user", "Hellodevelopers1", "a7099072_db") or die("ERROR: Unable to connect: " . mysqli_connect_error());

echo "<p>Connected successfully to the database.</p>";
?>
            <h3>Delete data:</h3>
<?php
$sql = "DELETE FROM users WHERE firstname='george'";
//$sql = "DROP users";
if(mysqli_query($link,$sql)){
    echo "<p>Data was deleted successfuly!</p>";   
}else{
    echo "<p>ERROR: Unable to execute $sql.". mysqli_error($link) ." </p>";   
}

//close connection
mysqli_close($link);
//$link->close($link);
?>
                      
        </div>
    </div>
</div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        </body>
</html>