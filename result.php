<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
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
    <?php include('Admin/function.php'); ?>
    <?php include('header.php') ?>
    <div class="jumbotron">
        <img src="img/HomepgJ.png" alt="">
    </div>


    <div class="container" style="width: max-content; max-width: 90vw; margin: auto; margin-bottom: 5rem !important;">

        <form method="post" enctype="multipart/form-data">
            <div cellpadding="0" cellspacing="0" width="1100px" style="margin:auto">


                <div cellpadding="0" cellspacing="0" width="800px" height="100px" style="margin:auto; border:0px"
                    class="">


                    <div class="BMSTitle">
                        <h2>Search</h2>
                    </div>

                    <?php
$cn= makeconnection();
$s="select * from donarregistration,bloodgroup where donarregistration.bgroup='". $_GET["bg"]."' and donarregistration.bgroup=bloodgroup.bg_id";

    // echo $_GET["bg"];
	$result= mysqli_query($cn, $s);
	$r=mysqli_num_rows($result);
	$n=0;
	while($data=mysqli_fetch_array($result)){ 
?>
                    <div>
                        <td>

                            <div cellpadding="0" cellspacing="0" width="700px" height="150px"
                                style=" border:none; padding: 1rem !important;" class="tableborder">


                                <div style="display: flex;">
                                    <div width="100px" style="vertical-align:middle">

                                        <a href="doner_pic/<?php echo $data[8] ?>" data-lightbox="image-1">
                                            <img src="doner_pic/<?php echo $data[8] ?>" height="200px" width="200px"
                                                style="margin:auto; float:left" /></a>
                                    </div>


                        <td width="500px" height="50px" style="vertical-align:top">


                            <div cellpadding="0" width="500px" height="150px"
                                style="border:none; padding: 1rem; width: 30rem; max-width: 100vw">

                                <div>
                        <td><span class="title">Name: </span>
                        </td>
                        <td><?php echo $data[1]; ?></td>
                    </div>
                    <div>
                        <td><span class="title">Gender: </span></td>
                        <td><?php echo $data[2]; ?></td>
                    </div>
                    <div>
                        <td style="width:24px"><span class="title">Mobile No: </span>
                        </td>
                        <td><?php echo $data[4]; ?></td>
                    </div>
                    <div>
                        <td><span class="title">Email: </span></td>
                        <td><?php echo $data[6]; ?></td>
                    </div>
                    <div>
                        <td><span class="title">Blood Group: </span></td>
                        <td><?php echo $data[10]; ?></td>
                    </div>



                </div>

                </td>
            </div>
    </div>
    </td>
    </div>
    <?php } mysqli_close($cn); ?>
    </div>
    </div>
    </form>






    <div class="clear"></div>




    <script>
    var btnContainer = document.getElementById("myDiv");

    var btns = btnContainer.getElementsByClassName("btn-nv");

    for (var i = 0; i < btns.length; i++) {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        document.getElementById('Tab-Ser').className += " active";
    }
    </script>

</body>

</html>