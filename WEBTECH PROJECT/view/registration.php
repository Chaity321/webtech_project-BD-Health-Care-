<?php
include('../Controll/registrationcheck.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>BD Health Protection</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style1.css">
	
</head>
<body>
<div >

<form action="" method="post" onsubmit="return validateForm() "  class="registration">
		
		  <table border="1" align="center" width="750px" height="450px">

           
                <tr>
                    <td>
                        <legend><b>ADMIN REGSTRATION</b></legend>
			
			        <table>
				       <tr>
					      <td>Username:</td>
				          <td><input type="text" name="username" id="username"  ><span id="err-username" ></span></td>
				        </tr>
                        <tr>
                            <td>Id:</td>
                            <td><input type="text" name="id"  id="id" ><span id="err-id" ></span></td>
                          </tr>
				        <tr>
					        <td>Email:</td>
					        <td><input type="email" name="email" id="email" ><span id="err-email" ></span></td>
				        </tr>
                        <tr>
					        <td>Date of Birth:</td>
					        <td><input type="date" name="date" id="date" value="date"><span id="err-date" ></span></td><hr/>
				        </tr>
                        <tr>
					        <td>Gender:</td>
					        <td>
                                <input class="gender" type="radio" name="gender" id="male" value="Male">Male
                                <input class="gender" type="radio" name="gender" id="female" value="Female">Female
                                <input  class="gender" type="radio" name="gender" id="other" value="Other">Other
								<span id="err-gender" ></span>
                            </td>
							
				        </tr>
                        </tr>
                        <tr>
                           <td>Address:</td>
                           <td><input type="text" name="address" id="address" ><span id="err-address" ></span></td>
                       </tr>
                       <tr>
                        <tr>
					        <td>Password:</td>
					        <td><input type="password" name="password" id="password" ><span id="err-pass" ></span></td>
				        </tr>
                        <tr>
					        <td>Confirm Password:</td>
					        <td><input type="password" name="confirmpassword" id="confirmpassword" ><span id="err-confirmpassword" ></span></td>
				        </tr>
                        
				        <tr>
					        <td colspan="2"><hr/></td>
					        
				        </tr>
                        <tr>
					        <td colspan="2"><input type="submit" name="submit" id="submit"value="Submit" class="btn">
                                <a href="login.php">Login</a>
                            </td>
					        
				        </tr>
			         </table>
                    </td>
                </tr>
            </table>

	</form>
</div>
<script src="validation.js"></script>
</body>
</html>


