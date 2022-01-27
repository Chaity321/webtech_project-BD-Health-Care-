<?php
include('../model/db.php');
?>
<?php
    $phonenumber=$id=$name=$phnnum=$email=$address=$e_type="";
	session_start();

	if(isset($_POST['submit']))
    {
        		
        if($_POST['id'] != "")
        {
            $id=$_POST['id'];
        }
        else
        {
            echo "Enter Your Id...";
        }
        if($_POST['name'] != "")
        {
            $name=$_POST['name'];
        }
        else
        {
			echo "Enter Your Name.....";
		}
        if($_POST['phnnum'] != "")
        {
            $phnnum=$_POST['phnnum'];
        }
        else
        {
			echo "Enter Your Phonenumber.....";
		}
        if($_POST["email" ] != "")
        {
            $email=$_POST["email" ];
        }
        else
        {
            echo "Enter Your Email.....";
        }	
             
            if($_POST['address']!= "")
            {
                $address=$_POST['address'];
            }
            else
            {
                echo "Enter Your Address.....";
            }
            $e_type=$_POST["e_type"];
            
            if(!empty($id && $name && $phnnum && $email && $address && $e_type))  
            {
                $addemployee = new db();
                $conn=$addemployee->OpenCon();   
                $Query=$addemployee->addemployee($conn,$id,$name,$phnnum,$email,$address,$e_type);      
                            
                             
                header("location:../view/employeeinfo.php?eid=p"); 
            }  
        }