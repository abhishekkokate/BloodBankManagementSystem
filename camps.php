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

    <div>
        <div class="wrap">
            <?php require('header.php');?>
        </div>
        <div class="jumbotron">
            <img src="img/HomepgJ.png" alt="">
        </div>

    </div>
    <div>
        <div class="container">

            <div class="BMShead">
                <h1>Blood Donation Camps/ Blood Banks</h1>
            </div>
            <div class="wrap">
                <div class="main_cont">
                    <div class="main">
                        <div class="content">

                            <table cellpadding="0" cellspacing="0" width="1100px">

                                <?php
$cn=makeconnection();
$s="select * from camp,state,city where camp.state=state.state_id and camp.city=city.city_id";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$n=0;
	while($data=mysqli_fetch_array($result))
	{
		if($n%2==0)
		{
		?>


                                <tr>
                                    <?php
			
		}?>

                                    <td>




                                        <table cellpadding="0" cellspacing="0" class="tableborder" width="500"
                                            style="border:none">
                                            <div>
                                                <td
                                                    style="font-size:24px; font-weight:bold; text-shadow:1px 1px 6px browm; padding-left:50px; padding-top:10px; padding-bottom:10px; color:#925959; text-align: center; width: 100%">
                                                    <?php echo $data[1]; ?></td>
                                </tr>
                                <tr>
                                    <td text-align="center">
                                        <a href="Admin/pic/<?php echo base64_encode($data[5]); ?>" data-lightbox="image-1">
                                            <img src="Admin/pic/<?php echo base64_encode($data[5]); ?>" height="250px" width="460px"
                                                style="margin:auto; padding-left:20px; margin-bottom: 1rem;" /></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="title" style="vertical-align:middle">Organised
                                        By:<?php echo $data[2]; ?></td>
                                    <td text-align="left" width="50%"></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="title" style="vertical-align:middle">
                                        State:<?php echo $data[8]; ?></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="title" style="vertical-align:middle">
                                        City:<?php echo $data[10]; ?></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>

                            </table>


                            </td>
                            <?php
        if($n%2==1)
	 {
	 ?>
                            </tr>
                            <tr>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                            <?php
	}
	$n=$n+1;
		
	}?>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="clear"></div>
        <script>
        var btnContainer = document.getElementById("myDiv");

        var btns = btnContainer.getElementsByClassName("btn-nv");

        for (var i = 0; i < btns.length; i++) {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            document.getElementById('Tab-Camp').className += " active";
        }
        </script>
</body>

</html>