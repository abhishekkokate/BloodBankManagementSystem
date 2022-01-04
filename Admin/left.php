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


    <div>

        <div style="width:100%;">
            <div style="text-align:center;">
                <span style="font-size:24px; color:#F00; font-weight:bold;">Admin Tabs</span>
            </div>
            <div style="width:100%; display: flex; flex-wrap: wrap; justify-content: center">
                <br />
                <?php if($_SESSION["usertype"]=="Admin")
{?>
                <div class="admin-Tab">
                    <div>
                        <span class="lefttd"><a href="adduser.php">Add User</a></span>
                    </div>
                    <div>
                        <span class="lefttd"><a href="upuser.php">Update User</a></span>
                    </div>
                    <div>
                        <span class="lefttd"><a href="deluser.php">Delete User</a></span>
                    </div>
                </div>

                <?php }?>

                <div class="admin-Tab">
                    <div>
                        <span class="lefttd"><a href="addcity.php">Add City</a></span>
                    </div>
                    <?php if($_SESSION["usertype"]=="Admin")
{?>
                    <div>
                        <span class="lefttd"><a href="updatecity.php">Update City</a></span>
                    </div>
                    <div>
                        <span class="lefttd"><a href="deletecity.php">Delete City</a></span>
                    </div>
                </div>
                <?php }?>

                <div class="admin-Tab">
                    <div>
                        <span class="lefttd"><a href="addstate.php">Add State</a></span>
                    </div>
                    <?php if($_SESSION["usertype"]=="Admin")
{?>

                    <div>
                        <span class="lefttd"><a href="updatestate.php">Update State</a></span>
                    </div>
                    <div>
                        <span class="lefttd"><a href="deletestate.php">Delete State</a></span>
                    </div>
                </div>
                <?php }?>

                <div class="admin-Tab">

                    <div>
                        <span class="lefttd"><a href="addcamp.php">Add Camp</a></span>
                    </div>
                    <?php if($_SESSION["usertype"]=="Admin")
{?>

                    <div>
                        <span class="lefttd"><a href="updatecamp.php">Update Camp</a></span>
                    </div>
                    <div>
                        <span class="lefttd"><a href="deletecamp.php">Delete Camp</a></span>
                    </div>
                </div>
                <?php }?>

                <div class="admin-Tab">
                    <div>
                        <span class="lefttd"><a href="addbloodgroup.php">Add Blood Group</a></span>
                    </div>

                    <?php if($_SESSION["usertype"]=="Admin")
{?>

                    <div>
                        <span class="lefttd"><a href="upbloodgroup.php">Update Blood Group</a></span>
                    </div>
                    <div>
                        <span class="lefttd"><a href="deletebloodgroup.php">Delete Blood Group</a></span>
                    </div>
                </div>
                <?php }?>

                <!-- <div class="admin-Tab">
                    <div>
                        <span class="lefttd"><a href="addgallery.php">Add Gallery</a></span>
                    </div>

                    <?php if($_SESSION["usertype"]=="Admin")
{?>

                    <div>
                        <span class="lefttd"><a href="deletegallery.php">Delete Gallery</a></span>
                    </div>
                </div> -->
                <?php }?>

                <!-- <div class="admin-Tab">
                    <div>
                        <span class="lefttd"><a href="addnews.php">Add News</a></span>
                    </div>
                    <?php if($_SESSION["usertype"]=="Admin")
{?>

                    <div>
                        <span class="lefttd"><a href="deletenews.php">Delete News</a></span>
                    </div>
                </div> -->
                <?php }?>

                <!-- <div class="admin-Tab">
                    <div>
                        <span class="lefttd"><a href="addadvertise.php">Add Advertisement</a></span>
                    </div>

                    <?php if($_SESSION["usertype"]=="Admin")
{?>

                    <div>
                        <span class="lefttd"><a href="deleteadver.php">Delete Advertisement</a></span>
                    </div>
                </div>
                <?php }?> -->

                <div class="admin-Tab">
                    <div>
                        <span class="lefttd"><a href="viewcity.php">View City</a></span>
                    </div>
                    <div>
                        <span class="lefttd"><a href="viewstate.php">View State</a></span>
                    </div>
                    <!-- <div>
                        <span class="lefttd"><a href="viewadver.php">View Advertusement</a></span>
                    </div>
                    <div>
                        <span class="lefttd"><a href="viewnews.php">View News</a></span>
                    </div> -->

                    <div>
                        <span class="lefttd"><a href="viewbloodgroup.php">View Blood Group</a></span>
                    </div>
                    <div>
                        <span class="lefttd"><a href="viewcamp.php">View camps</a></span>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>