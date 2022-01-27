<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>authorcheck.php</title>
</head>
<body>
    <h2>authorcheck.php</h2>
<?php  
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $addauthorinfo =$_POST['addauthorinfo'];
        $removeauthorinfo=$_POST['removeauthorinfo'];
        $approverequestinfo=$_POST['$approverequestinfo'];
        echo "Addauthorinfo: ". $Adauthorinfo."<br>";
        echo "Removeauthorinfo: ". $Removeauthorinfo."<br>";
        echo "Approverequestinfo: ". $Approverequestinfo."<br>";
    }
    ?>