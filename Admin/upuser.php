<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap cdn Start  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <!--slider-->
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.flexslider.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(function() {
        SyntaxHighlighter.all();
    });
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            animationLoop: false,
            itemWidth: 210,
            itemMargin: 5,
            minItems: 2,
            maxItems: 4,
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });
    </script>
</head>

<body>
    <?php
if($_SESSION['loginstatus']=="")
{
	header("location:admimlogin.php");
}
?>
    <div class="wrap">
        <?php require('../header.php');?>
        <div class="Lgout">
            <ul>
                <li><a class="btn-nv btn nav-btn" href="../index.php" target="_blank">Preview Website</a></li>
                <li><a class="btn-nv btn nav-btn" href="logout.php">Log Out</a></li>
            </ul>
        </div>
    </div>
    <div class="jumbotron">
        <img src="img/HomepgJ.png" alt="">
    </div>
    <div class="container">
        <div class="container" style="width: max-content">
            <?php include('function.php'); ?>

            <?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="update users set pwd='" .$_POST["t2"] . "',typeofuser='". $_POST["s1"] ."' where username='" . $_POST["s2"] ."'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Update');</script>";
}

?>
            <form method="post">
                <div style="margin:auto; width:100%;">
                    <div class="field">
                        <div class="BMSTitle" style="margin-bottom: 2rem;">
                            <h2>Upgrade User</h2>
                        </div>
                    </div>
                    <div class="field">
                        <span class="lefttd">Select User Name</span>
                        <select name="s2" required>
                            <option value="">Select</option>

                            <?php
$cn=makeconnection();
$s="select * from users";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[0]==$_POST["s2"])
		{
			echo "<option value=$data[0] selected>$data[0]</option>";
		}
		else
		{
			echo "<option value=$data[0]>$data[0]</option>";
		}
		
		
		
	}
	mysqli_close($cn);

?>



                        </select>
                        <input type="submit" value="Show" name="show" formnovalidate="formnovalidate" />
                        <?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from users where username='" .$_POST["s2"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$data=mysqli_fetch_array($result);
	$username=$data[0];
	$pass=$data[1];
	$usertype=$data[2];
		
		
	mysqli_close($cn);
}
?>

                    </div>
                    <div class="field">
                        <span class="lefttd">Password</span>
                        <input type="password" value="<?php  if(isset($_POST["show"])){ echo $pass ;}  ?>"
                            required="required" pattern="[a-zA-Z0-9]{3,10}"
                            title="please enter only character and numbers between 3 to 10 for password" name="t2" />
                    </div>
                    <div class="field">
                        <span class="lefttd">Confirm Password</span>
                        <input type="password" value="<?php  if(isset($_POST["show"])){ echo $pass ;}?>" name="t3"
                            required="required" pattern="[a-zA-Z0-9]{3,10}"
                            title="please enter only character and numbers between 3 to 10 for password" />
                    </div>
                    <div class="field">
                        <span class="lefttd" style="margin: 1rem">Type Of User</span>
                        <select name="s1" required>
                            <option value="">Select</option>
                            <option value="Admin"
                                <?php if(isset($_POST["show"])&& $usertype=="Admin"){ echo "selected "; } ?>>
                                Admin</option>
                            <option value="General"
                                <?php if(isset($_POST["show"])&& $usertype=="General"){ echo "selected "; } ?>>
                                General</option>
                        </select>
                    </div>
                    <div class="field">
                        <input type="submit" value="UPDATE" name="sbmt">
                    </div>
                </div>
            </form>
        </div>
        <div style="width:100%;">
            <?php include('left.php'); ?>
        </div>
    </div>

</body>

</html>