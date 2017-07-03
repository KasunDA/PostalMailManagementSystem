<?php
include ("inc/login.inc.php");

?>

<!doctype html>
<html>
<head>
    <title>Postal Managemnet System</title>
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
        <form action="" method="POST">
            <ul>
                <input type="text" list="username">
                <datalist id="username">
                    <option> ප්‍රධාන පරිශීලක</option>
                    <option> ආයතන</option>
                    <option> ගිණුම් අංශය</option>
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
                <input type="Submit" value="Log in" name="Submit" id="Submit"><br>
                <a href="#"> Forgot Password?</a>
            </ul>
        </form>
    </ul>
</div>


<span> <?php
    echo $error;
    ?></span>
</body>
</html>