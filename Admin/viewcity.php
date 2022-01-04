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


            <form method="post">
                <div style="margin:auto; width: 300px;">
                    <div class="field">
                        <div class="BMSTitle" style="margin-bottom: 2rem;">
                            <h2>View Camps</h2>
                        </div>
                    </div>
                    <table border="1" align="center" width="60%" height="200px" style="margin: auto;">
                        <tr>
                            <td style='margin: auto; text-align: center; background: rgb(151 133 36 / 34%);'>City Id
                            </td>
                            <td style='margin: auto; text-align: center; background: rgb(151 133 36 / 34%);'>City Name
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
$cn=mysqli_connect("localhost","root","","bloodbank");
$s="select * from city";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		
			echo "<tr><td  style='margin: auto; text-align: center;border-bottom: 1px solid rgb(128 128 128 / 19%);'>$data[0]</td><td  style='margin: auto; text-align: center;border-bottom: 1px solid rgb(128 128 128 / 19%);'>$data[1]</td></tr>";
		}		
	
	mysqli_close($cn);

?>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
        <div style="width:100%;">
            <?php include('left.php'); ?>
        </div>
    </div>

</body>

</html>