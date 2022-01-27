function validateForm() {
    var username = document.getElementById("username").value;
    var id = document.getElementById("id").value;
    var email = document.getElementById("email").value;
    var date = document.getElementById("date").value;
    var male = document.getElementById("male");
    var female = document.getElementById("female");
    var other = document.getElementById("other");
    var address = document.getElementById("address").value;
    var password = document.getElementById("password").value;
    var confirmpassword = document.getElementById("confirmpassword").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    
    if (username == "") {
     document.getElementById("err-username").innerHTML="Please entter your name";
      return false;
    }
    if (id == "" || id.length < 5 ) {
        document.getElementById("err-id").innerHTML="Enter Your id";
        return false;
    }
    if(email == ""){
        document.getElementById("err-email").innerHTML="Please enter a valid email";
        return false;
    }else if(!res){
  
      document.getElementById("err-email").innerHTML="Your Email format is incorrect";
      return false; 
    }
    if (date == "") {
        document.getElementById("err-date").innerHTML="Please enter your date";
        return false;
    }
    if (!male.checked && !female.checked && !other.checked) {
        document.getElementById("err-gender").innerHTML="Select your Gender";
        return false;
    }
    if (address == "") {
        document.getElementById("err-address").innerHTML="Please enter your address";
        return false;
    }
    if (password == "") {
     document.getElementById("err-pass").innerHTML="Please fill your password";
      return false;
    }else if(!password.length > 8) {
        document.getElementById("err-pass").innerHTML="Password at least 8 characters";
        return false;
    }

    
    if (confirmpassword == "") {
        document.getElementById("err-confirmpassword").innerHTML="Please enter your confirmpassword";
        return false;
    }

  }

 