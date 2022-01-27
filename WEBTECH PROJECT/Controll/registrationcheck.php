<?php
include('../model/db.php');
?>
<?php
    $username=$id=$email=$dateofbirth=$gender=$address=$confirmpassword=$password="";
	session_start();

	if(isset($_POST['submit']))
    {
        
		if($_POST['username'] != "")
        {
            $username=$_POST['username'];
        }
        else
        {
			echo "Enter Your Username.....";
		}

        if($_POST['id'] != "")
        {
            $id=$_POST['id'];
        }
        else
        {
            echo "Enter Your Id...";
        }
        if($_POST["email" ] != "")
        {
            $email=$_POST["email" ];
        }
        else
        {
            echo "Enter Your  Email.....";
        }	
        if($_POST["date" ] != "")
        {
            $dateofbirth=$_POST["date" ];
        }

        else
        {
            echo "Enter Your Date of Birth.....";
        }
        $gender=$_POST["gender"];
            if($_POST['address']!= "")
            {
                $address=$_POST['address'];
            }
            else
            {
                echo "Enter Your Address.....";
            }
            if($_POST['password']!= "")
            {
        
                $password=$_POST['password'];
            }
            else
            {
            echo "Enter Your Password....."; 
            }
            if($_POST['confirmpassword']!= "")
            {
        
                $confirmpassword=$_POST['confirmpassword'];
            }
            else
            {
            echo "Enter Your confirmpassword....."; 
            }  
            if(!empty($username && $id && $email && $dateofbirth && $gender && $address && $confirmpassword && $password))  
            {
                $edit = new db();
                $conn=$edit->OpenCon();   
                $userQuery=$edit->edit($conn,$username,$id,$email,$dateofbirth,$gender,$address,$confirmpassword,$password);      
                            
                             
                header("location:login.php"); 
            }  
            

                
                   

					
				
               	
		
            
		
        
	}
?>








