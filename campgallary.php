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
    </div>
    <div
        style="height:400px; width:100%; margin:auto; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
        <div >
            <div class="wrap">
                <div class="main_cont">
                    <div class="main">
                        <div class="content">

                            <table cellpadding="0" cellspacing="0" width="1000px" class="tableborder"
                                style="margin:auto">
                                <tr>
                                    <td colspan="3">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="3"  text-align="center"><img src="Images/gallery.png" height="80px" /></td>
                                </tr>
                                <tr>
                                    <td colspan="3">&nbsp;</td>
                                </tr>


                                <?php
$cn=makeconnection();
$s="select * from gallary,camp where gallary.camp_id=camp.camp_id and gallary.camp_id='" . $_GET["cid"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$n=0;
	while($data=mysqli_fetch_array($result))
	{
		if($n%3==0)
		{
		?>


                                <tr>
                                    <?php
			
		}?>


                                    <td>



                                        <a href="Admin/pic/<?php  echo $data[3] ?>" data-lightbox="roadtrip"><img
                                                src="Admin/pic/<?php  echo $data[3] ?>" width="250px" height="200px"
                                                style="padding-left:40px" /></a>

                                    </td>
                                    <?php
        if($n%3==2)
	 {
	 ?>
                                </tr>
                                <tr>
                                    <td colspan="3">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="3">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="3">&nbsp;</td>
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
          
    </div>
</body>

</html>