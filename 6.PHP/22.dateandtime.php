<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Date and Time</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            h1{
                color:purple;   
            }
            h3{
                color:#42d5ce;   
            }
            .contactForm{
                border:1px solid #7c73f6;
                margin-top: 50px;
                border-radius: 15px;
            }
        </style> 

    </head>
        <body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-offset-1 col-sm-10 contactForm">
            <h1>Date and Time</h1>
            <div> 
                <h3>Date using the date() function:</h3>
<?php
//Formatting the Dates and Times with PHP
// Day of the month:
    //d (01/31)->two digits with leading zeros
    //j (1/31)->without leading zeros
// Day of the week:
    //D (Mon/Sun)->text as an abbreviation
    //l (monday)->full lowercase
    //L (MONDAY)->full uppercase
// Month:
    //m (01/12)->two digits with leading zeros
    //M (Jan)->text as an abbreviation
    //F (January)-> Full month
// Year:
    //y (09/15)->two digits
    //Y (2009-2015)->Four Digits

// Separators:
    //hyphens: (-)
    //dots: (.)
    //slashes: (/)
    //spaces: ( )
$today = date("j-m, y");
echo "<p>Today is: $today.</p>";

?>
                
                
                <h3>Time using the date() function:</h3>
<?php
//format the time string:
//hour:
    //h (01-12)->12-hour format with leading zeros
    //H (00-24)->24-hour format with leading zeros
//minutes:
    //i (01-59)->minutes with leading zeros
//seconds:
    //s (01-59) ->seconds with leading zeros
//Ante meridiem and Post meridiem
    //a->lowercase
    //A->uppercase

$today = date("H:i:s A");
echo "<p>Time is: $today.</p>";

?>
     
                
                
                <h3>Current timestamp using time() function:</h3>
<?php
$timestamp = time();
echo "<p>Timestamp is : $timestamp</p>";
?>
                
                
                <h3>Convert timestamp to time:</h3>
<?php
$time = date("F d, Y h:i:s A", $timestamp);
echo "<p>Time is $time.</p>";
?>

                
                <h3>Convert time to timestamp using mktime() function:</h3>
<?php
//mktime(hour,minute,second,month,day,year)
$timestamp = mktime(15, 20, 12, 5, 10, 2017);
echo "<p>Timestamp is : $timestamp</p>";
$time = date("F d, Y h:i:s A", $timestamp);
echo "<p>Time will be $time.</p>";
?>
                                
                <h3>Find out what day of the week you were born:</h3>
<?php
$timestamp = mktime (0,0,0,15,04,1977);
$time = date("l",$timestamp);
echo "<p>You were born on a $time.</p>";
?>
                
                <h3>Date in 1000 days from now:</h3>
<?php
$timestamp = mktime(0, 0, 0, date("m"), date("d")+1000, date("Y"));
$time = date("D d M, Y", $timestamp);
echo "<p>Date in 1000 days from now: $time.</p>";

?>
                
            </div>
        </div>
    </div>
</div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        </body>
</html>