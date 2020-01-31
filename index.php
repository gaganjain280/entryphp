<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>
  <a href="login.php">login</a>

<form id="EmailForm" action="../gagantest/include/sign_up.php" method="post" style="border:1px solid #ccc" onsubmit="validateForm()">
  <div class="container">
   
    <p>Sign UP</p>
    <hr>
    <label for="email"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" onblur="emailval(this.value)" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw_rep" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    

    <div class="clearfix">
      <button type="submit" class="signupbtn" onclick="sendData()"><button>
    </div>
  </div>
</form>

<script>

function emailval(mail) 
{
 var mailformat = /^\w+([\.+-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(mail.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
return false;
}
 }
// }
// function emailval(inputText){
//   alert(inputText);
// var mailformat = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
// if(inputText.value.match(mailformat))
// {
// alert("You have entered a valid email address!");    //The pop up alert for a valid 
// }
// else
// {
// alert("You have entered an invalid email address!");    //The pop up alert for an 
// return false;
// }
// }





  function sendData(){

	 var email = document.getElementById("email");
   var psw = document.getElementById("psw");
   var psw_rep = document.getElementById("psw_rep");
   var name = document.getElementById("name");

// ValidateEmail(email);




   //var myform = document.getElementById("email");
   dataString="email="+email+"&psw="+psw+"&psw_rep="+psw_rep+"&name"+name+"sign_up_data=";
  //  var fd = new FormData(myform );
    $.ajax({
        url: "../gagantest/include/sign_up.php",
        data: dataString,
        cache: false,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (result) {
            alert(result);
            // do something with the result
        }
    });
    }
</script>


</body>
</html>
