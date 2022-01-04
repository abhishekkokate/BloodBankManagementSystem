<?php session_start();  ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Blood bank Management System</title>
    <link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--slider-->
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.flexslider.js" type="text/javascript"></script>
    <!-- Bootstrap cdn Start  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <script src="js/main.js"></script>
</head>

<body>
    <?php include('admin/function.php'); ?>



    <div class="nav_bg">
        <div class="wrap">
            <?php require('header.php');?>
        </div>

        <div class="jumbotron">
            <img src="img/HomepgJ.png" alt="">
        </div>
        <div>
            <form method="post" id="lgin" class="login" >
                <h2>Login</h2>
                <div class="field">
                    <input type="email" name="t1" required="required" title="Please Enter a valid Email"
                        placeholder="Enter Email Id">
                </div>
                <div class="field">
                    <input type="password" name="t2" required="required"
                        title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"
                        placeholder="Enter password">
                </div>
                <div class="field">
                    <div class="pass-link"><a href="/pages/forgotpass.html">Forgot Password?</a></div>
                </div>
                <div class="field">
                    <input type="submit" name="sbmt" value="Login">
                </div>
                <div>

                </div>
                <div id="signupLnk" class="signup-link">Not a Donor? <a href="registration.php">Sign-up now</a></div>
                <div id="signupLnk" class="signup-link" style="margin-top: 2rem">Admin-<a href="/BloodBank/admin/admimlogin.php">Login</a></div>
            </form>
        </div>

        </form>
        <div style="height: 6rem"> </div>
    </div>





    </div>


    <?php

$_SESSION['donorstatus']="";

if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

			$s="select * from donarregistration where email='".$_POST["t1"]."' and pwd='".$_POST["t2"]."'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	mysqli_close($cn);
	if($r>0)
	{
		$_SESSION["email"]=$_POST["t1"];
       $_SESSION['donorstatus']="yes";
//header("location:donor/index.php");
echo "<script>location.replace('donor/index.php');</script>";
	}
	else
	{
		echo "<script>alert('Invalid User Name Or Password');</script>";
	}
		
		}	
?>
<script>
        var btnContainer = document.getElementById("myDiv");

        var btns = btnContainer.getElementsByClassName("btn-nv");

        for (var i = 0; i < btns.length; i++) {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            document.getElementById('Tab-Signin').className += " active";
        }
        </script>
</body>

</html>