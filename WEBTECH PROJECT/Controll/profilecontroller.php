<?php
include('../model/db.php');
?>
<?php
	session_start();
    

            
            $Profile = new db();
            $conn=$Profile->OpenCon();   
            $userQuery=$Profile->Profile($conn,$_SESSION['email']);
            $data=mysqli_fetch_assoc( $userQuery);
                  
                         
                   
                   

					
				
               	
		
            
		
        
	
?>








