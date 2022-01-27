<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PublicInfo</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style2.css">
</head>

<body>
<?php
include('header.php');
?>
<div class="public">
<h2>Search</h2>

<form action="" method="post">
   Search:<input type="text" name="search" placeholder="Searching....."  >
   
  
    <input name="submit" type="submit" value="Search" class="btn">
</form><br>
<?php
include('../Controll/customercontroller.php');


?><br>

    <table border="1" width="1050px" >
        <h1>PUBLIC INFORMATION</h1>
        <tr>
            <th>public id</th>
            <th>public name</th>
            <th>public nid</th>
            <th>public address</th>
            <th>vaccine date</th>
            <th>vaccine status</th>
        </tr>

    <?php
    while($data=mysqli_fetch_assoc( $userQuery))
    {    
        $id= $data['cid'];
        $name= $data['cname'];
        $nid= $data['cnid'];
        $address= $data['cadd'];
        $vaccinedate= $data['vacdate'];
        $vaccinestatus= $data['vacstatus'];
        echo "<tr>
        
        <td>$id</td>
        <td> $name</td>
        <td> $nid</td>
        <td> $address</td>
        <td> $vaccinedate</td>
        <td> $vaccinestatus</td>
       </tr> ";
}
    ?>
    </table>

</div>
<?php
    include('footer.php');
?>

</body>
</html>