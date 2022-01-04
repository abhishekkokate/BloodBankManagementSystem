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
        <div class="container" style="width: max-content;">
            <form method="post" enctype="multipart/form-data">
                <div cellpadding="0" cellspacing="0" width="max-content" height="max-content" style="margin:auto">
                    <div class="BMSTitle">
                        <h2>Blood Request</h2>
                    </div>
                    <div>

                        <div class="field">
                            <input type="text" name="t1" required="required"
                                title="please enter only character  between 5 to 15 for donor name"
                                placeholder="Enter Your Name" />
                        </div>

                        <div class="field">
                            <span>Gender: </span>
                            <input name="r1" type="radio" value="male" checked="checked">Male
                            <input name="r1" type="radio" value="female">Female
                        </div>

                        <div class="field">
                            <input type="number" name="t2" required="required" pattern="[0-9]{2,2}"
                                placeholder="Enter Your Age"
                                title="please enter only  numbers between 2 to 2 for age" />
                        </div>

                        <div class="field">
                            <input type="number" name="t3" required="required" pattern="[0-9]{10,12}"
                                placeholder="Enter Mobile No."
                                title="please enter only numbers between 10 to 12 for mobile no." />
                        </div>

                        <div class="field">
                            <td class="lefttd" align="center">Select Blood Group </td>
                            <select name="t4" required>
                                <option value="">Select</option>
                                <?php
$cn=makeconnection();
$s="select * from bloodgroup";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[0]==$_POST["s2"])
		{
			echo "<option value=$data[0] selected>$data[1]</option>";
		}
		else
		{
			echo "<option value=$data[0]>$data[1]</option>";
		}
		
		
		
	}
	mysqli_close($cn);

?>



                            </select>
                        </div>

                        <div class="field">
                            <input type="email" name="t5" required="required" placeholder="Enter Email Id" />
                        </div>

                        <div class="field" style="margin-bottom: 0.7rem">
                            <span class="lefttd" style="margin: auto 0" align="center">Till Required Date:</span>

                            <select name="month">
                                <option value="1">JAN</option>
                                <option value="2">FEB</option>
                                <option value="1">MARCH</option>
                                <option value="1">APRIL</option>
                                <option value="1">MAY</option>
                                <option value="1">JUNE</option>
                                <option value="1">JULY</option>
                                <option value="1">AUG</option>
                                <option value="1">SEPT</option>
                                <option value="1">OCT</option>
                                <option value="1">NOV</option>
                                <option value="1">DEC</option>
                            </select>
                            <select name="day">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>

                            <input type="number" name="year" style=" width:75px; margin: 0; margin-bottom: 0.7rem"
                                placeholder="Year" />

                        </div>

                        <div class="field">
                            <textarea name="t7" placeholder="Details"></textarea>
                        </div>

                        <div class="field">
                            <input type="submit" value="Submit" name="sbmt"
                                style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; ">

                        </div>
                    </div>
                </div>

            </form>
        </div>

        <div class="clear"></div>


        <?php
if(isset($_POST["sbmt"])) 
{
			
		
	$cn=makeconnection();
		$d=$_POST["year"]."/".$_POST["month"]."/".$_POST["day"];
			$s="insert into requestes(name,gender,age,mobile,bgroup,email,reqdate,detail) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $d .  "','" .  $_POST["t7"]  ."')";
			
			
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
            document.getElementById('Tab-Req').className += " active";
        }
        </script>
</body>

</html>