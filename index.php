<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <title>Blood bank Management System</title>
    <!-- <script src="js/jquery-1.11.0.min.js"> -->
    <script src="js/jquery-1.11.0.min.js"></script>
    </script>
    <script src="js/lightbox.min.js"></script>

    <link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/navbar.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!--slider-->
    <!--slider-->
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
    <!-- <script src="js/lightbox.min.js"></script> -->
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.flexslider.js" type="text/javascript"></script>
    <!-- Bootstrap cdn Start  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SyntaxHighlighter/3.0.83/scripts/shCore.min.js"
        integrity="sha512-Z5dAQyvO8EyY1cHQcqYTYL8z6PDjM0URql6AioNodsSxxTJS5Fqfujr+o/4ye2dLp0he1qAVTiZABTunv6oLow=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/main.js"></script>


</head>

<body>
    <div class="nav_bg">
        <div class="wrap">
            <?php require('header.php');?>
        </div>
        <div class="jumbotron">
            <img src="img/HomepgJ.png" alt="">
        </div>
        <div class="container">

            <div class="BMShead">
                <h1>Bloodbank Management System</h1>
            </div>
            <div>
                <div class="wrap">
                    <div class="main_cont">
                        <section class="slider">
                            <div class="flexslider carousel">
                                <ul class="slides">
                                    <li>
                                        <img src="Images/anonymous.jpg" />
                                    </li>
                                    <li>
                                        <img src="Images/BloodDono2.jpg" />
                                    </li>
                                    <li>
                                        <img src="Images/lockscreeen.jpg" />
                                    </li>
                                    <li>
                                        <img src="Images/BloodDono4.jpg" />
                                    </li>
                                    <li>
                                        <img src="Images/Wallpaper.jpg" />
                                    </li>
                                    <li>
                                        <img src="Images/BloodDono6.jpg" />
                                    </li>
                                    
                                </ul>
                            </div>
                        </section>

                        <div class="main">
                            <div class="content">
                                <p>We welcome you to in our WebSite. If you are a donor , We appreciate you for <a
                                        href="registration.php">signing up</a> online as a Donor.
                                    If you need blood we are happy to serve you.</p>
                            </div>


                            <div class="facts">
                                <h3>One donation can save multiple lives. Here are the facts:</h3>
                                <ul style="list-style-type: disc">
                                    <li>Just 1 donation can save up to 3 lives.</li>
                                    <li>The average red blood cell transfusion is 3 pints (or 3 whole-blood donations).
                                    </li>
                                    <li>More than 1 million people every year are diagnosed with cancer for the first
                                        time. Many of them will need blood—sometimes daily—during chemotherapy.</li>
                                    <li>More than 38,000 blood donations are needed every day.</li>
                                    <li>Type O-negative whole blood can be transfused to people with any blood type, but
                                        this type of blood is rare, and supplies of it are low.
                                    </li>
                                    <li>Type AB plasma can be transfused to patients with all other blood types, but
                                        it's also in short supply.</li>
                                    <li>Type AB plasma can be transfused to patients with all other blood types, but
                                        it's also in short supply..</li>
                                </ul>
                            </div>
                            <div class="clear"></div>
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
            document.getElementById('Tab-Home').className += " active";
        }
        </script>
</body>

</html>