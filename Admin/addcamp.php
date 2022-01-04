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

            <form method="post" enctype="multipart/form-data">
                <div style="margin:auto; width:100%;">
                    <div class="field">
                        <div class="BMSTitle">
                            <h2>AddCamp</h2>
                        </div>
                    </div>
                    <div>
                        <span colspan="2">&nbsp;</span>
                    </div>
                    <div class="field">
                        <input type="text" name="t3" value="<?php if(isset($_POST["show"])){echo $_POST["t3"];} ?>"
                                required="required" placeholder="Enter Camp title"
                                title="please enter only character or numbers between 5 to 35 for camp title" />
                    </div>
                    <div class="field">
                        <input type="text" name="t2" value="<?php if(isset($_POST["show"])){echo $_POST["t2"];} ?>"
                                required="required" placeholder="Organised by"
                                title="please enter only character or numbers between 5 to 35 for organizer name" />
                     
                    </div>
                    <div class="field">
                        <span style="margin: auto 0;" class="lefttd">State: </span>
                        <select name="s1" required>
                                <option value="">Select</option>

                                <?php
$cn=makeconnection();
$s="select * from state";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[0]==$_POST["s1"])
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
                            <input type="submit" value="Show" name="show" style="margin: 1rem" formnovalidate="formnovalidate" />
                    </div>
                    <div class="field">
                        <span class="lefttd">City: </span>
                        <span><select name="s2" required>
                                <option value="">Select</option>

                                <?php
$cn=makeconnection();
$s="select * from city";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[4]==$_POST["s1"])
		{
			echo "<option value=$data[0] >$data[1]</option>";
		}
		else
		{
			//echo "<option value=$data[0]>$data[1]</option>";
		}
		
		
		
	}
	mysqli_close($cn);

?>



                            </select>
                        </span>
                    </div>
                    <div class="field">
                        <span style="margin: auto 0;" class="lefttd">Uplode Pic</span>
                        <span><input type="file" name="t1" required="required" /></span>
                    </div>
                    <div class="field">
                        <textarea name="t4" placeholder="Details"></textarea>
                    </div>
                    <div class="field">
                        <span>&nbsp;</span>
                        <span><input type="submit" value="SAVE" name="sbmt"></span>
                    </div>
                </div>
            </form>
        </div>
        <div style="width:100%;">
            <?php include('left.php'); ?>
        </div>
    </div>

    <?php
if(isset($_POST["sbmt"])) 
{
$target_dir = "pic/";
$target_file = $target_dir . basename($_FILES["t1"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["t1"]["tmp_name"]);
    if($check !== false) {
      //  echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
//aloow certain file formats
	if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["t1"]["tmp_name"], $target_file)){
		$cn=makeconnection();
			$s="insert into camp(camp_title,organised_by,state,city,pic,detail) values('" . $_POST["t3"] ."','" . $_POST["t2"] . "','" . $_POST["s1"] . "','" . $_POST["s2"] . "','" . basename($_FILES["t1"]["name"]) . "','" . $_POST["t4"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
			
		} else{
			echo "sorry there was an error uploading your file.";
		}	
	
	}
}
?>

</body>

</html>