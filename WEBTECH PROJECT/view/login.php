<?php
include('../Controll/logincheck.php');

// if(isset($_SESSION['email'])){
//     header("location:home.php");
//     }
?>
<!DOCTYPE html>
<html>
<head>
	<title>BD Health Protection</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="login">
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
		
        <table border="1" align="center" width="350px">


              <tr>
                  <td>
                      <legend><b>ADMIN LOGIN</b></legend>         
                  <table>
                      <tr>
                          <td>Email:</td>
                          <td><input type="text" name="email" value=""></td>
                        </tr>
                      <tr>
                          <td>Password:</td>
                          <td><input type="password" name="password" value=""></td>
                      </tr>
                      
                      <tr>
                          <td colspan="2"><hr/></td>
                          
                      </tr>
                      <tr>
                          <td ><input type="submit" name="submit" value="Login" class="btn"></td>
                          <td><a href="registration.php">Register</a></td>
                          
                      </tr>
                   </table>
                  </td>
              </tr>
          </table>


  </form>
</div>
</body>
</html>






