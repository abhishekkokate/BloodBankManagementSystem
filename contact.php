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


                    <div>
                        <div>
                            <div class="BMSTitle">
                                <h2>Contact Us</h2>
                            </div>


                            <div class="field">
                                <input type="text" name="t1" required="required" placeholder="Enter Your Name"
                                    title="please enter only character  between 2 to 15 for donor name" />
                            </div>

                            <div class="field">
                                <input type="email" name="t2" placeholder="Enter Email Id" required="required" />
                            </div>

                            <div class="field">
                                <input type="number" name="t3" pattern="[0-9]{10,12}" placeholder="Enter Mobile No."
                                        title="please enter only numbers between 10 to 12 for mobile no." />
                            </div>

                            <div class="field">
                                <textarea name="t4" placeholder="Subject"></textarea>
                            </div>

                            <div class="field">
                                <input type="submit" value="Send Us" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; ">
                            </div>
                        </div>

                    </div>

        </div>
        </form>
    </div>
    </div>
    <div class="clear"></div>


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
        document.getElementById('Tab-Con').className += " active";
    }
    </script>
</body>

</html>