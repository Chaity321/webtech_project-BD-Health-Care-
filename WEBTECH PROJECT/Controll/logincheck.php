<?php
include('../model/db.php');
?>
<?php
	session_start();
	
	if (isset($_POST['submit'])) {
		if (empty($_POST['email']) || empty($_POST['password'])) {
        echo "email or Password is invalid";
		}
		else
		{
		
		$_SESSION["email"] = $_POST['email'];
		$_SESSION["password"] = $_POST['password'];
		
		   }
		    //Get form data
	   $formdata = array(
		'email'=>$_POST["email"],
		'password'=> $_POST["password"]
	 );
	 $existingdata = file_get_contents('data.json');
	 $tempJSONdata = json_decode($existingdata);
	 $tempJSONdata[] =$formdata;
	 //Convert updated array to JSON
	 $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	 
	 //write json data into data.json file
	 if(file_put_contents("data.json", $jsondata)) {
		  echo "Data successfully saved <br>";
	  }
	 else 
		  echo "no data saved";

   $data = file_get_contents("data.json");
   $mydata = json_decode($data);
   $login = new db();
    $conn=$login->OpenCon();   
    $userQuery=$login->Login($conn,$_POST['email'],$_POST['password']);
	if($userQuery==1)
	{
		header("location:home.php");
	} 
	else
	{
		echo "email or Password is invalid";
	}
		}
?>

   	

	  