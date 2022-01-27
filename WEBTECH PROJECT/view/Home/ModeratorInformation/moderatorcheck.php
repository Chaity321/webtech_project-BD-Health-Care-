<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>moderatorcheck.php</title>
</head>
<body>
    <h2>moderatorcheck.php</h2>
<?php  
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $addmoderatorinfo =$_POST['addmoderatorinfo'];
        $removemoderatorinfo=$_POST['removmoderatorinfo'];
        $approverequestinfo=$_POST['$approverequestinfo'];
        echo "Addmoderatorinfo: ". $Addpublicinfo."<br>";
        echo "Removemoderatorinfo: ". $Removemoderatorinfo."<br>";
        echo "Approverequestinfo: ". $Approverequestinfo."<br>";
    }
    ?>