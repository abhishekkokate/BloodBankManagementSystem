<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Blood bank Management System</title>
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <link href="css/lightbox.css" rel="stylesheet" />
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
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/jquery.flexslider.js" type="text/javascript"></script>

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


        <div class="container">
            <form method="post" enctype="multipart/form-data">
                <div >
                    <div class="wrap">
                        <div class="cont_main">
                            <div class="content">
                                <h4><span class="bold">About US</span></h4>
                                

                            </div>
                            <div class="sidebar">
                                <div>

                                    <div class="clear"></div>
                                </div>
                            </div>

                        </div>
                    </div>

            </form>
        </div>


        <div class="clear"></div>



    </div>


    <?php
if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

			$s="insert into contacts(name,email,mobile,subj) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"]   ."')";
			
			
	$q=mysqli_query($cn,$s);
	mysqli_close($cn);
	if($q>0)
	{
	echo "<script>alert('Record Save');</script>";
	}
	else
	{echo "<script>alert('Saving Record Failed');</script>";
	}
		
		}	
	

?>
    <script>
    var btnContainer = document.getElementById("myDiv");

    var btns = btnContainer.getElementsByClassName("btn-nv");

    for (var i = 0; i < btns.length; i++) {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        document.getElementById('Tab-Abt').className += " active";
    }
    </script>
</body>

</html>