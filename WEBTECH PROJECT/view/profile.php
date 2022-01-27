<?php
include('../Controll/profilecontroller.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Info</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style1.css">
</head>
<body>

<?php
include('header.php');
?>
<?php

include('../Controll/profileupdate.php');
?>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data" class="profile">
		
		  <table border="1" align="center" width="450px" height="450px">

           

                <tr>
                    <td>
						<div class="profile-img"><img src="https://www.pngitem.com/pimgs/m/146-1468479_my-profile-icon-blank-profile-picture-circle-hd.png"/></div>

			
			        <table>
				       <tr>
					      <td>Username:</td>
				          <td><input type="text" name="username" value="<?php echo $data['username'];?> "></td>
				        </tr>
                        <tr>
                            <td>Id:</td>
                            <td><input type="text" name="id" value="<?php echo $data['id'];?>"></td>
                          </tr>
				        <tr>
					        <td>Email:</td>
					        <td><input type="email" name="email" value="<?php echo $data['email'];?>"></td>
				        </tr>
                        <tr>
					        <td>Date of Birth:</td>
					        <td><input type="date" name="date" value="<?php echo $data['dateofbirth'];?>"></td><hr/>
				        </tr>
                        <tr>
					        <td>Gender:</td>
					        <td><input type="text" name="gender" value="<?php echo $data['gender'];?>"></td><hr/>
				        </tr>
                        </tr>
                        <tr>
                           <td>Address:</td>
                           <td><input type="text" name="address" value="<?php echo $data['address'];?>"></td>
                       </tr>
        
                        <tr>
					        <td colspan="2"><input type="submit" name="submit" value="Save" class="btn">
                                <a href="home.php">Back</a>
                            </td>
					        
				        </tr>
			         </table>
                    </td>
                </tr>
            </table>

	</form>

<?php
include('footer.php');
?>
</body>
</html>


