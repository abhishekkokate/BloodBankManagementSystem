<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Untitled Document</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- slider -->
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
                <div style="margin:auto; width:100%;">


                    <div style="vertical-align:top;;">
                        <div>
                            <div class="BMSTitle">
                                <h2>Donor's registration</h2>
                            </div>
                            <div class="field">
                                <input type="text" name="t1" required="required" placeholder="Enter Donar's Name"
                                    title="please enter only character  between 4 to 15 for donor name" />
                            </div>

                            <div class="field">
                                <span class="lefttd">Gender: </span>
                                <div>
                                    <input name="r1" type="radio" value="male" checked="checked"><span>Male</span>
                                </div>
                                <div>
                                    <input name="r1" type="radio" value="female"><span>Female</span>
                                </div>
                            </div>

                            <div class="field">
                                <input type="number" placeholder="Enter your age" name="t2" required="required"
                                    pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" />
                            </div>
                            <div class="field">
                                <input type="number" placeholder="Enter Mobile No." name="t3" required="required"
                                    pattern="[0-9]{10,11}"
                                    title="please enter only numbers between 10 to 11 for mobile no." />
                            </div>
                            <div class="field">
                                <span class="lefttd"> Blood Group: </span>
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
                                <input type="email" placeholder="Enter Email id" name="t5" required="required"
                                    pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                    title="Please Enter a valid Email" />
                            </div>

                            <div class="field">
                                <input type="password" placeholder="Enter Password" name="t6" required="required"
                                    title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" />

                            </div>
                            <div class="field">
                                <input type="password" placeholder="Confirm Password" name="t7" required="required"
                                    title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" />
                            </div>

                            <div class="field">
                                <span style="width: 30%; text-align: center; padding: 1rem" class="lefttd">Uplode
                                    Pic:</span>
                                <input style="width: 70%" type="file" name="t8" accept=".jpg, .jpeg, .png, .gif"
                                    required />

                            </div>
                            <div class="field">
                                <input type="submit" value="Submit" name="sbmt"
                                    style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; ">

                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>

        <div class="clear"></div>



        <?php

        
if(isset($_POST["sbmt"])) 
{
   
$target_dir = "doner_pic/";
$target_file = $target_dir . basename($_FILES["t8"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
//  Email Exists test
        $cn= makeconnection();
        $email = $_POST["t5"];
        $sql="select * from donarregistration where (email='$email');";

        $res=mysqli_query($cn,$sql);

        if (mysqli_num_rows($res) > 0) {
        
            $row = mysqli_fetch_assoc($res);
            if($email==isset($row['email']))
            {
                    echo "<script>alert('email already exists')</script>";
            }
        }
        else{
        mysqli_close($cn);
            // test End
    $check = getimagesize($_FILES["t8"]["tmp_name"]);
    if($check !== false) {
      //  echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "<script>alert('File is not an image.');</script>";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    
    $uploadOk = 0;
}
//aloow certain file formats
	if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
		echo "*sorry, only jpg, jpeg, Png & gif files are allowed.*";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["t8"]["tmp_name"], $target_file)){
		$cn=makeconnection();
			$s="insert into donarregistration(name,gender,age,mobile,bgroup,email,pwd,pic) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $_POST["t6"] .  "','" . basename($_FILES["t8"]["name"])  ."')";
			
	mysqli_query($cn,$s);
	mysqli_close($cn);
	if($s>0)
	{
	echo "<script>alert('Record Save');</script>";
	}
	else
	{echo "<script>alert('Record save');</script>";
	}
		} else{
			echo "sorry there was an error uploading your file.";
		}	
	
	}
}
        }

?>

        <script>
        var btnContainer = document.getElementById("myDiv");

        var btns = btnContainer.getElementsByClassName("btn-nv");

        for (var i = 0; i < btns.length; i++) {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            document.getElementById('Tab-Reg').className += " active";
        }
        </script>

</body>

</html>