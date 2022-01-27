<?php
include('../Controll/employeecontroller.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmployeeInfo</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style2.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<body>
<?php
include('header.php');
?>
<div class="public">
<h2>Search</h2>

<form action="" method="post">
   Search:<input type="text" placeholder="Searching....." id="search-live" >
  
    <input name="submit" type="submit" value="Search" class="btn">
</form><br>
<h3>Add any other employees<button class="button"> <a href="addemployee.php">Add Employees</a></button></h3>
<div id="livesearch"></div>


    <table border="1" width="1200px" >
        <h1>EMPLOYEE INFORMATION</h1>
        <tr>
            <th>employee id</th>
            <th>employee name</th>
            <th>employee  phnonenumber</th>
            <th>employee  email</th>
            <th>employee  address</th>
            <th>employee type</th>
            <th>Deleted</th>
            <th>Update</th>
        </tr>

    <?php
    while($data=mysqli_fetch_assoc( $userQuery))
    {    
        $id= $data['id'];
        $name= $data['name'];
        $phnnum= $data['phnnum'];
        $email= $data['email'];
        $address= $data['address'];
        $e_type= $data['e_type'];
        echo "<tr>
        
        <td>$id</td>
        <td> $name</td>
        <td> $phnnum</td>
        <td> $email</td>
        <td> $address</td>
        <td> $e_type</td>
        <td><a href='../Controll/employeecontroller.php?eid=$id'><button class='btn'>Delete</button></a></td>
        <td><button class='btn'>Update</button></td>
       
       </tr> ";
}
    ?>
    </table>
</div>
    <?php
    include('footer.php');
?>
<script src="ajaxsearch.js"></script>
</body>
</html>