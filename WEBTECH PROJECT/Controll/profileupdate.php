<?php
 $username=$id=$email=$dateofbirth=$gender=$address=" ";
	if(isset($_POST['submit']))
    {

            
                $username=$_POST['username'];
            
            

            
                $id=$_POST['id'];
            
            
            
                $email=$_POST["email" ];
            
       
            
                $dateofbirth=$_POST["date" ];
            

        
              
                $gender=$_POST["gender"];
            
        
            
                $address=$_POST['address'];
            
                          
            $profileupdate = new db();
            $conns=$profileupdate->OpenCon();   
            $userQuerys=$profileupdate->profileupdate($conns,$username,$id,$dateofbirth,$gender,$address,$_SESSION['email']);      
                        
                         
            header("location:profile.php");       
                   

					
				
               	
		
            
		
        
	}
?>








