<?php
include('../model/db.php');
?>
<?php

    $employeeinfo2 = new db();
   
    $output="";
    $search=$_POST['search'];
    $conobj=$employeeinfo2->OpenCon();
    
    $userQuery2=$employeeinfo2->Searchlive($conobj,"employee",$search);
    
    if ($userQuery2->num_rows > 0) {
        $output.="<h1 >Search result</h1>";
        $output.="<table border='1' width='1050px'><tr>
        <th>employee id</th>
        <th>employee name</th>
        <th>employee phonenumber</th>
        <th>employee email</th>
        <th>employe address</th>
        <th>employe type</th>
        <th>Deleted</th>
        <th>Update</th>
    </tr>";
        // output data of each row
        while($data = $userQuery2->fetch_assoc()) {

    
        $id= $data['id'];
        $name= $data['name'];
        $phnnum= $data['phnnum'];
        $email= $data['email'];
        $address= $data['address'];
        $e_type= $data['e_type'];
        
        $output.="<tr>
        
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
        $output.= "</table><br>";
        echo $output;
      } else {
        echo "0 results";
      }

    
?>