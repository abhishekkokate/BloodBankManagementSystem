<link rel="stylesheet" href="css/navbar.css">

<div id="mainListDiv" class="main_list">
    <ul class="nav" id="myDiv">

        <li class="btn-nv active" id="Tab-Home"><a href="index.php">Home</a></li>
        <li class="btn-nv" id="Tab-Reg"><a href="/BloodBank/registration.php">Donate</a></li>
        <li class="btn-nv" id="Tab-Req"><a href="/BloodBank/requests.php">send Request</a></li>
        <li class="btn-nv" id="Tab-VReq"><a href="/BloodBank/viewrequest.php">View Request</a></li>
        <li class="btn-nv" id="Tab-Camp"><a href="/BloodBank/camps.php">Camps/Banks</a></li>
        <li class="btn-nv" id="Tab-Ser"><a href="/BloodBank/search.php">Search</a></li>
        <li class="btn-nv" id="Tab-Con"><a href="/BloodBank/contact.php">Contact Us</a></li>
            <li id="Tab-Signin">
                <a href="/BloodBank/login.php" class="btn-nv btn nav-btn">Login</a>
            </li>
            <li id="or">or</li>
            <li id="Tab-Signup">
                <a href="/BloodBank/registration.php" class="btn-nv btn nav-btn">Signup</a>
            </li>
        
        <a class="navTrigger" id="navTrig">
            <i></i>
            <i></i>
            <i></i>
        </a>
    </ul>
</div>

<script>
var btnContainer = document.getElementById("myDiv");

var btns = btnContainer.getElementsByClassName("btn-nv");

for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}
</script>