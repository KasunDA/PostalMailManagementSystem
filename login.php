<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="yasara96";
$dbname="pmms";
$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(mysqli_connect_errno()){
    die("database connection failed:".
        mysqli_connect_error().
        "(".mysqli_connect_errno().")"

    );

}
?>
<!DOCTYPE>
<html>
<head>
    <title>Login</title>
    <style>
        body{
            background-image: url("img/image5.jpg");
            background-size: 100%;
            border-width: 20px;
        }
    </style>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="wrapper">
    <div class="main-img">

        <div class="top-bar">
            <div class="top-bar-links">
                <ul>
                    <li><a href="#">Bope-Poddala Divisional Secretariat</a></li>
                    <li><a href="#">බෝපෙ පෝද්දල ප්‍රාදේශීය ලේකම් කාර්යාලය</a></li>
                    <li><a href="#">Postal Mail Management System</a></li>
                </ul>
            </div> <!--top-bar-links-->
        </div><!--top-bar-->

    </div><!--main-image-->
</div> <!-- wrapper -->



<div class="login">
    <ul>
        <form action="login.php" method="post">
            <ul>
                <input type="text" list="sections">
                <datalist id="sections">
                    <option> ප්‍රධාන පරිශීලක</option>
                    <option> ආයතන</option>
                    <option> ගිනුම් අංශය</option>
                    <option> සංවර්ධන අංශය</option>
                    <option> ඉඩම් අංශය</option>
                    <option> සමාජ සේවා අංශය</option>
                    <option> දිවි නැගුම අංශය</option>
                    <option> ක්ෂේත්‍ර</option>
                    <option> ලියාපදිංචි අංශය</option>
                    <option> මුදල් හා චෙක්පත් අංශය</option>
                    <option> ප්‍රධාන නිලධාරී</option>
                </datalist>
                <input id="password" name="password" type="password" placeholder="Password">
                <input type="Submit" value="Log in" name="Submit" id="btn"><br>
                <a href="#"> Forgot Password?</a>
            </ul>
        </form>
    </ul>
</div>


</body>
</html>
<?php
    mysqli_close($connection);
?>