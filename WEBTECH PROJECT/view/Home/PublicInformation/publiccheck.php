<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>publiccheck.php</title>
</head>
<body>
    <h2>publiccheck.php</h2>
<?php  
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $addpublicinfo =$_POST['addpublicinfo'];
        $removepublicinfo=$_POST['removepublicinfo'];
        $approverequestinfo=$_POST['approverequestinfo'];
        echo "Addpublicinfo: ". $Addpublicinfo."<br>";
        echo "Removepublicinfo: ". $Removepublicinfo."<br>";
        echo "Approverequestinfo: ". $Approverequestinfo."<br>";
    }
?>