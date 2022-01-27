<?php
include('../model/db.php');
?>
<?php
$customerinfo = new db();
$conn=$customerinfo->OpenCon();   
$userQuery=$customerinfo->ShowAll($conn,"customer");

?>
<?php
if (isset($_POST['submit'])) {

    $search=$_POST['search'];
   
    

    $conobj=$customerinfo->OpenCon();
    
    $userQuery2=$customerinfo->Search($conobj,"customer",$search);
    
    if ($userQuery2->num_rows > 0) {
        echo "<table border='1' width='1050px'><tr>
        <th>public id</th>
        <th>public name</th>
        <th>public nid</th>
        <th>public address</th>
        <th>vaccine date</th>
        <th>vaccine status</th>
    </tr>";
        // output data of each row
        while($data = $userQuery2->fetch_assoc()) {

    
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
        echo "</table>";
      } else {
        echo "0 results";
      }
    }
?>