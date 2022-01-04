<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    <link href="css/lightbox.css" rel="stylesheet" />
    <link href="/BloodBank/StyleSheet.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link href="/BloodBank/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/BloodBank/css/navbar.css" rel="stylesheet" type="text/css" media="all" />
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
    <div class="wrap">
        <ul class="nav">
            <li><a href="chngpwd.php">Change Password</a></li>
            <li><a href="updateprofile.php">Update Profile</a></li>
            <li><a href="blooddonated.php">Blood Donated</a></li>
            <li><a href="viewdonations.php">View Donations</a></li>
            <li class="active"><a href="viewrequest.php">View Requestes</a></li>
            <li><a href="logout.php">log Out</a></li>

        </ul>
    </div>
    <div class="jumbotron">
        <img src="/BloodBank/img/HomepgJ.png" alt="">
    </div>
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <table cellpadding="20" cellspacing="20" style="margin:auto">

                <div class="field">
                    <div class="BMSTitle" style="margin-bottom: 2rem;">
                        <h2>View Requests</h2>
                    </div>
                </div>

                <tr style="background-color:bisque" align="center" class="bold">
                    <td class="bold" style="color:red">Blood Group</td>
                    <td align="center">Name</td>
                    <td align="center">Gender</td>
                    <td align="center">Contact No</td>
                    <td align="center">Mobile No</td>
                    <td align="center">Email</td>
                    <td align="center">Till Required Date</td>
                </tr>

                <?php

	
$cn=mysqli_connect("localhost","root","","bloodbank");
$s="select * from requestes";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td style='margin: auto; text-align: center;border-bottom: 1px solid rgb(128 128 128 / 19%);'>$data[0]</td><td style='margin: auto; text-align: center;border-bottom: 1px solid rgb(128 128 128 / 19%);'>$data[1]</td><td style='margin: auto; text-align: center;border-bottom: 1px solid rgb(128 128 128 / 19%);''>$data[2]</td><td style='margin: auto; text-align: center;border-bottom: 1px solid rgb(128 128 128 / 19%);'>$data[3]</td><td style='margin: auto; text-align: center;border-bottom: 1px solid rgb(128 128 128 / 19%);'>$data[4]</td><td style='margin: auto; text-align: center;border-bottom: 1px solid rgb(128 128 128 / 19%);'>$data[5]</td><td style='margin: auto; text-align: center;border-bottom: 1px solid rgb(128 128 128 / 19%);'>$data[6]</td></tr>";
			}
			mysqli_close($cn);
			?>


            </table>
        </form>
    </div>

</body>

</html>