<?php
include('../model/db.php');
?>
<?php
$employeeinfo = new db();
$conn=$employeeinfo->OpenCon();   
$userQuery=$employeeinfo->ShowAll($conn,"employee");
?>
<?php 

$delete="";
$delete=$_GET['eid'];
if($delete)
{

$Query=$employeeinfo->Delete($conn,$delete);
header("location:../view/employeeinfo.php?eid="); 
}


?>



