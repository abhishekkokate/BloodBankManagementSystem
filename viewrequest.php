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
        <div class="container"
            style="width: max-content; max-width: 90vw; margin: auto; margin-bottom: 5rem !important;">
            <form method="post" enctype="multipart/form-data">
                <table cellpadding="20" cellspacing="20" width="1000px" height="200px" style="margin:auto">

                    <div class="BMSTitle">
                        <h2>Blood Requests</h2>
                    </div>

                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr style="background-color: #cfd5da; margin-bottom: 1rem !important" text-align="center"
                        class="bold tableTiles">
                        <td class="bold">Req No.</td>
                        <td text-align="center">Name</td>
                        <td text-align="center">Gender</td>
                        <td text-align="center">age</td>
                        <td text-align="center">Mobile No</td>
                        <td text-align="center">Email</td>
                        <td text-align="center">Blood Group</td>
                        <td text-align="center">Till Date</td>
                    </tr>

                    <tr>
                        <td>&nbsp;</td>
                    </tr>


                    <?php

	
$cn=mysqli_connect("localhost","root","","bloodbank");
$s="select * from requestes";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
        $result2=mysqli_query($cn,"select * from bloodgroup where bg_id='". $data[6]."'");
        $r2=mysqli_num_rows($result2);
        $data2=mysqli_fetch_array($result2);
				echo"<tr style='border-bottom: 1px solid #cecece;'>
                    <td  style='text-align:center'>$data[0]</td>
                    <td  style='text-align:center'>$data[1]</td>
                    <td  style='text-align:center'>$data[2]</td>
                    <td  style='text-align:center'>$data[3]</td>
                    <td  style='text-align:center'>$data[4]</td>
                    <td  style='text-align:center'>$data[5]</td>
                    <td  style='text-align:center'>$data2[1]</td>
                    <td  style='text-align:center'> $data[7]</td>
                </tr>";
			}
			mysqli_close($cn);
			?>


                </table>
            </form>
        </div>

        <div class="clear"></div>






        <script>
        var btnContainer = document.getElementById("myDiv");

        var btns = btnContainer.getElementsByClassName("btn-nv");

        for (var i = 0; i < btns.length; i++) {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            document.getElementById('Tab-VReq').className += " active";
        }
        </script>

</body>

</html>