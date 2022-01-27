<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "bd health";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }
 function edit($conn,$username,$id,$email,$dateofbirth,$gender,$address,$confirmpassword,$password)
 {
$result = $conn->query("INSERT INTO `registration` (`username`,`id`,`email`,`dateofbirth`,`gender`,`address`,`confirmpassword`,`password`) VALUES ('$username','$id','$email','$dateofbirth','$gender','$address','$confirmpassword','$password')");
 }

 function Login($conn,$email,$password)
 {
$result = $conn->query("SELECT *FROM registration WHERE  email='$email' AND password='$password'");
$num=mysqli_num_rows($result);
return $num;

 }
 function Search($conn,$table,$search)
 {
$result = $conn->query("SELECT * FROM $table WHERE cid='$search' OR cname='$search' OR cnid='$search' OR cadd='$search' OR vacdate='$search' OR vacstatus='$search' ");
 return $result;
 }
 function Searchlive($conn,$table,$search)
 {
$result = $conn->query("SELECT * FROM $table WHERE name Like '%".$search."%' OR email Like '%".$search."%' OR phnnum Like '%".$search."%' OR address Like '%".$search."%'   OR e_type Like '%".$search."%' OR id Like '%".$search."%'" );
 return $result;
 }

 function Profile($conn,$email)
 {
$result = $conn->query("SELECT *FROM registration WHERE  email='$email'");
//$data=mysqli_fetch_assoc($result);
return $result;

 }
 function profileupdate($conn,$username,$id,$dateofbirth,$gender,$address,$emailid)
 {
$result = $conn->query("UPDATE  registration SET username='$username' ,id='$id',dateofbirth='$dateofbirth',gender='$gender',address='$address' WHERE email='$emailid'");
 }

 function addemployee($conn,$id,$name,$phnnum,$email,$address,$e_type)
 {
$result = $conn->query("INSERT INTO `employee` (`id`,`name`,`phnnum`,`email`,`address`,`e_type`) VALUES ('$id','$name','$phnnum','$email','$address','$e_type')");
 }

 function ShowAll($conn,$table)
 { 
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }
 function Delete($conn,$id)
 { 
$result = $conn->query("DELETE FROM `employee` WHERE id='$id'");
 
 }


function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>