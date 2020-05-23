<?php
    $msg = "";
    if (isset($_POST['submit'])) {
        $con = new mysqli("localhost", "root", "", "projet-web-2");
        $email = $con->real_escape_string($_POST['email']);
        $mdp = $con->real_escape_string($_POST['Mdp']);
        if ($email == "" || $mdp == "")
            $msg = "veuillez verifiez les champs!";
        else {
            $sql = $con->query("SELECT * FROM client WHERE email='$email'");
            if ($sql->num_rows > 0) {
                $data = $sql->fetch_array();
                if (password_verify($mdp, $data['Mdp'])) 
                        $msg = "You have been logged in";
                         header("Location:home.php");
                         session_start();
        //store the username in SESSION global variable
                      $_SESSION['email']=$email;
                      
                    $session=$_SESSION['email'];
                    }
                 else{
                    $msg = "Please check your inputs!";
                    
                    header("Location:login.php");
                 }
        }
    }else{
        $_SESSION['email']="";
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>SE CONNECTER</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
         <!--SHOW HIDE pwd --> 
		<link rel="stylesheet"  href="//youtube.local/assets/dcode.css">
	<link rel="stylesheet" type="text/css" href="//youtube.local/assets/favicon.ico">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
	 integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
		<!-- Terms checkbox  
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">-->
	</head>
<script src="terms.js" ></script>
<style >
</style>
	<body>
		<div class="wrapper" style="background-image: url('images/bg-registration-form-2.jpg');">
			<div class="inner">
			<div class="login-form">
                    <form method="POST" action="login.php">
                        <div class="form-wrapper">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                            <div class="form-wrapper">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="Mdp">
                        </div>
                                <div class="checkbox">
                                    <label>
                                <input type="checkbox"> Remember Me
                            </label>
                                    <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>
                                </div>
                                <div><?php if ($msg != "") echo $msg . "<br><br>" ?></div>
                                <input type="submit" name="submit" id="submit" value="Log In " class="termsdanger">
                                <div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="s'inscrire.php"> Sign Up Here</a></p>
                                </div>
                    </form>
                </div>
			</div>
		</div>
<script >
function toggle()
{
	const passField= document.getElementById("passField") ;
	if (passField.type == "password")
	{
		passField.type = "text" ;
	}
	else {
		passField.type="password"
	}
}
var pwd =document.getElementById('pwd');
var eye =document.getElementById('eye');
eye.addEventListener('click',togglePass);
function togglePass() 
{
	eye.classList.toggle('active');
	(pwd.type =='password')? pwd.type='text' : pwd.type = 'password' ;
}
function terms_changed(termsCheckBox){
if(termsCheckBox.checked)
{
document.getElementById("submit_button").disabled= false ;
document.getElementById("submit_button").classList.add('buttontermsgreen');
document.getElementById("submit_button").classList.remove('termsdanger');
}
else
{
document.getElementById("submit_button").disabled= true  ;
document.getElementById("submit_button").classList.add('termsdanger');
document.getElementById("submit_button").classList.remove('buttontermsgreen');
}
}
	</script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>