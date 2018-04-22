<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Populate table using form</title>
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
            <h1>Populate table using form:</h1>
            <h3>Connect to database:</h3>
<?php
//mysqli_connect(host, username, password, dbname)
$link = @mysqli_connect("mysql11.000webhost.com", "a7099072_user", "Hellodevelopers1", "a7099072_db") or die("ERROR: Unable to connect: " . mysqli_connect_error());

echo "<p>Connected successfully to the database.</p>";
?>
            <h3>Send data to database:</h3>
<?php

//get user inputs
$id = $_POST["ID"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];

//error messages
$missingFirstname = "<p><strong>Please enter your firstname!</strong></p>";
$missingLastname = "<p><strong>Please enter your lastname!</strong></p>";
$missingemail = "<p><strong>Please enter your email!</strong></p>";
$invalidemail = "<p><strong>Please enter a valid email address!</strong></p>";
$missingPassword = "<p><strong>Please enter a password!</strong></p>";


if($_POST["submit"]){
 //check for errors
    if(!$firstname){
        $errors .= $missingFirstname;   
    }else{
         $firstname = filter_var($firstname, FILTER_SANITIZE_STRING);  
    }
    if(!$lastname){
        $errors .= $missingLastname;   
    }else{
         $lastname = filter_var($lastname, FILTER_SANITIZE_STRING);  
    }
    if(!$email){
        $errors .= $missingemail;   
    }else{
         $email = filter_var($email, FILTER_SANITIZE_EMAIL); 
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors .= $invalidemail;   
        }
    }
    if(!$password){
        $errors .= $missingPassword;   
    }
    
    if($errors){
        $resultMessage = '<div class="alert alert-danger">' . $errors .'</div>';
        echo $resultMessage;
    }else{
        //no errors, prepare variables for the query
        $tblname = "users";
        $firstname = mysqli_real_escape_string($link, $firstname);
        $lastname = mysqli_real_escape_string($link, $lastname);
        $email = mysqli_real_escape_string($link, $email);
        $password = mysqli_real_escape_string($link, $password);
        $password = md5($password);
        
        //execute insert query
        if(!$id){
            $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";   
        }else{
            $sql = "INSERT INTO users (ID, firstname, lastname, email, password) VALUES ('$id', '$firstname', '$lastname', '$email', '$password')";   
        }
        if(mysqli_query($link, $sql)){
            $resultMessage = '<div class="alert alert-success">Data added successfully to the database table</div>';
            echo $resultMessage;
        }else{
            $resultMessage = '<div class="alert alert-warning">ERROR: Unable to excecute: ' .$sql. '. ' . mysqli_error($link). '</div>';
            echo $resultMessage;
        }
    }
    
}

?>
            <form action="5.populatetableusingform.php" method="post">
                <div class="form-group">
                    <label for="ID">ID:</label>
                    <input type="number" id="ID" placeholder="ID" class="form-control" name="ID" maxlength="4">
                </div>
                <div class="form-group">
                    <label for="firstname">Firstname:</label>
                    <input type="text" id="firstname" placeholder="Firstname" class="form-control" name="firstname"  maxlength="20">
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname:</label>
                    <input type="text" id="lastname" placeholder="Lastname" class="form-control" name="lastname"  maxlength="20">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" placeholder="Email" class="form-control" name="email"  maxlength="30">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" placeholder="Password" class="form-control" name="password"  maxlength="40">
                </div>
                <input type="submit" name="submit" class="btn btn-success btn-lg" value="Send data">


            
            
            </form>
                      
        </div>
    </div>
</div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        </body>
</html>