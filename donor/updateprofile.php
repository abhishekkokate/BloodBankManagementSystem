<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    <link href="css/lightbox.css" rel="stylesheet" />
    <link href="/StyleSheet.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/navbar.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap cdn Start  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <!--slider-->
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/lightbox.min.js"></script>
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

if($_SESSION['donorstatus']=="")
{
	header("location:../login.php");
}
?>
    <?php include('function.php'); ?>
    <?php
			
	$cn=mysqli_connect("localhost","root","","bloodbank");
			$s="select * from donarregistration where email='" . $_SESSION["email"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	
	$data=mysqli_fetch_array($q);
	$name=$data[1];
	$gender=$data[2];
	$age=$data[3];
	$mobile=$data[4];
	$pic=$data[8];
	//echo $name;
	mysqli_close($cn);
	
		
		
	
	

?>
    <div class="wrap">
        <ul class="nav">
            <li><a href="chngpwd.php">Change Password</a></li>
            <li class="active"><a href="updateprofile.php">Update Profile</a></li>
            <li><a href="blooddonated.php">Blood Donated</a></li>
            <li><a href="viewdonations.php">View Donations</a></li>
            <li><a href="viewrequest.php">View Requestes</a></li>
            <li><a href="logout.php">log Out</a></li>

        </ul>
    </div>
    <div class="jumbotron">
        <img src="/img/HomepgJ.png" alt="">
    </div>
    <div class="container" style="width: max-content">
        <form method="post">
            <div style="margin:auto;">
                <div class="field">
                    <div class="BMSTitle" style="margin-bottom: 2rem;">
                        <h2>Update Profile</h2>
                    </div>
                </div>
                <div class="field" style="flex-wrap: wrap;">
                    <img src="../doner_pic/<?php echo @$pic; ?>" width="200px" height="200px" />
                    <input type="hidden" name="h1" value="<?php {echo @$pic;} ?>" />

                    <table cellpadding="0" cellspacing="0" width="450px">
                        <td style="vertical-align:top; padding: 0 70px; width="500px" >
                            <table cellpadding="0" cellspacing="0" width="450px" align="center">
                                <tr>
                                    <td class="lefttd" style="vertical-align:middle"> Name: </td>
                                    <td><input type="text" name="t1" value="<?php echo @$name;  ?>" required="required"
                                            title="please enter only character  between 5 to 15 for  name" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="lefttd">Gender: </td>
                                    <td><input name="r1" type="radio" value="male"
                                            <?php if($gender=="male"){ echo "checked" ;}  ?>>Male<input name="r1"
                                            checked="checked" type="radio" value="female"
                                            <?php if($gender=="female"){ echo "checked" ;}  ?> />Female</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="lefttd" style="vertical-align:middle">Age: </td>
                                    <td><input type="text" name="t2" required="required" pattern="[0-9]{2,2}"
                                            title="please enter only numbers  between 2 to 2 for age"
                                            value="<?php echo @$age;?>" /></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="lefttd" style="vertical-align:middle">Mobile No: </td>
                                    <td><input type="text" name="t3" value="<?php echo @$mobile;?>"
                                            pattern="[0-9]{10,12}"
                                            title="please enter only numbers between 10 to 12 for mobile no." />
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>

                                <tr>
                                    <td>&nbsp;</td>
                                    <td><input type="submit" value="Update" name="sbmt"
                                            style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; ">
                                    </td>
                                </tr>

                            </table>
                    </table>
        </form>



        <?php
	
	if(isset($_POST["sbmt"])) 
	{
		$cn=makeconnection();
		
		
					$s="update donarregistration set name='" .$_POST["t1"]. "' ,gender='" .$_POST["r1"]."' , age='" .$_POST["t2"]. "',mobile='" .$_POST["t3"]. "' where email='" .$_SESSION["email"]. "'";
		
$i=mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record update');</script>";
	
}
?>

</body>

</html>