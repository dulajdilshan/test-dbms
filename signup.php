<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign up</title>
        <link rel="stylesheet" type="text/css" href="css/indexcss.css"/>
        
        
    </head>
    <body>
        <div class="bg">
            
            <div class="header">
                <p>Welcome...<p>
            </div>
            
            <div class="container">
                <form method="POST" action="">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Enter first name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Enter last name..">
    
    <label for="uname">Username</label>
    <input type="text" id="uname" name="uname" placeholder="Eneter your username..">

    <label for="country">Country(only 6 are accepted)</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="india">India</option>
      <option value="russia">Russia</option>
      <option value="srilanka">Sri Lanka</option>
      <option value="usa">United States</option>
    </select>
    
    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Eneter your password..">
    
    <label for="rpassword">Re-type Password</label>
    <input type="password" id="rpassword" name="rpassword" placeholder="Eneter your password again..">
  
    <input type="submit" name="submit" value="Submit" onclick="signup()">
    <a href="">Haven an Account ?</a>
  </form>
                <p id="message"></p>
        </div>
        </div>
        
        <!--javascript starts from here-->
        <script
      src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
        <script type="text/javascript" language="javascript">
            
            //Passing values to a php file without loading it 
            function signup(){
                var uname = document.getElementById('uname').value;
                var fname = document.getElementById('fname').value;
                var lname = document.getElementById('lname').value;
                var pswd = document.getElementById('password').value;
                var rpswd = document.getElementById('rpassword').value;
                var country = document.getElementById('country').value;
                
                if(pswd==rpswd){
                    var signupData = {'uname':uname,'fname':fname,'lname':lname,'pswd':pswd,'country':country};
                    alert(signupData['uname']);
                    $.ajax({
                        url: "signupAction.php",
                        type: "POST",
                        data: signupData,
                        
                    });
                }else{
                    alert("Password not matching..");
                }
                
            }
            
            //got to dashboard with new sign up
            
        </script>
        
    </body>
</html>
