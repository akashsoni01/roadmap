<?php
// This results in an error.
// The output above is before the header() call
header('Location: http://akash.thecompletewebhosting.com/');
?>
<?php
//mysqli_connect(host, username, password, dbname)
//$link = @mysqli_connect("mysql11.000webhost.com", "a7099072_user", "Hellodevelopers1", "a7099072_db") or die("ERROR: Unable to connect: " . mysqli_connect_error());
//var_dump($link);
//
//
//echo "<p>Connected successfully to the database.</p>";


//connect
$link = new mysqli("185.116.214.59", "akashthe_user", "akash@123", "akashthe_roadmap"); // your host should be local if you are using my free web hosting
//check connection

if($link->connect_errno > 0){
    die("Unable to connect: " . $link->connect_error);   
}

echo "<p>Connected successfully to the database.</p>"; 
?>


            <h3>Populate table</h3>
<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$query = $_POST['query'];
$tech = $_POST['tech'];
$email = $_POST['email'];

$sql = "INSERT INTO users(firstname,lastname,query,tech,email) VALUES('$firstname','$lastname','$query','$tech','$email')";

if(mysqli_query($link, $sql)){
    echo "<p>New row added successfully!</p>";  
}else{
    echo "ERROR: Unable to execute $sql" . mysql_error($link);   
}
?>









