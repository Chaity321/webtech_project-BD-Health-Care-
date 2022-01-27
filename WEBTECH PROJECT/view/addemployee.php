<?php
include('../Controll/addemployeecheck.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="style2.css">
</head>

<body>
<?php
include('header.php');
?>
<div >
<H1><b>Add Employees Information</b></H1>
<form action="" method="post" onsubmit="return validateForm() "  class="addemployee">
		
		  <table border="1" align="center" width="750px" height="450px">

           
                <tr>
                    <td>
                        <legend><b>Add Employee</b></legend>
			
			        <table>
				       <tr>
                            <td>Id:</td>
                            <td><input type="text" name="id"  id="id" ><span></span></td>
                          </tr>
						<tr>
					      <td>Name:</td>
				          <td><input type="text" name="name" id="name" ><span id="err-name" ></span></td>
				        </tr>
						<tr>
					      <td>Phonenumber:</td>
				          <td><input type="text" name="phnnum" id="phnnum" ><span id="err-phnnum" ></span></td>
				        </tr>
                      
                        <tr>
					        <td>Email:</td>
					        <td><input type="email" name="email" id="email" ><span id="err-email" ></span></td>
				        </tr>
                       
						<tr>
                           <td>Address:</td>
                           <td><input type="text" name="address" id="address" ><span id="err-address" ></span></td>
                       </tr>
					   <tr>
					        <td>Employee Type:</td>
					        <td>
                                <input class="gender" type="radio" name="e_type" id="author" value="author">Author
                                <input class="gender" type="radio" name="e_type" id="moderator" value="moderator">Moderator
                                
								<span id="err-e_type" ></span>
                            </td>
							
                        </tr>
                        
				        <tr>
					        <td colspan="2"><hr/></td>
					        
				        </tr>
                        <tr>
					        <td colspan="2"><input type="submit" name="submit" id="submit"value="Save" class="btn">
                                <a href="../view/addemployee.php">Back</a>
                            </td>
                            </tr>  
				        </tr>
			         </table>
                    </td>
                </tr>
            </table>

	</form>
</div>
<?php
    include('footer.php');
?>

</body>
</html>


