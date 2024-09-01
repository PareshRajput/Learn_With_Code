<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
    // If not authenticated, redirect to the login page
    header("Location: login.php");
    exit();
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="css/style2.css">
    <title>Admin panel</title>
</head>

<body>
    <div class="container">
        <div class="topbar">
            <div class="logo">
                <h2>Skills Studio</h2>
            </div>
            <div class="search">
                <input type="text" name="search" placeholder="search here">
                <label for="search"><i class="fas fa-search"></i></label>
            </div>
            <!-- <i class="fas fa-bell"></i>
            <div class="user">
                <img src="img/user.png" alt="">
            </div> -->
        </div>
        <div class="sidebar">
            <ul>
                <li>
                    <a href="admin.php">
                        <i class="fas fa-th-large"></i>
                        <div>Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="userview.php">
                        <i class="fas fa-user-graduate"></i>
                        <div>Students</div>
                    </a>
                </li>
                <!-- <li>
                    <a href="#">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <div>Teachers</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-users"></i>
                        <div>Employees</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-chart-bar"></i>
                        <div>Analytics</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-hand-holding-usd"></i>
                        <div>Earnings</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        <div>Settings</div>
                    </a>
                </li> -->
                <li>
                    <a href="logout.php">
                        <i class="fas fa-question"></i>
                        <div>Logout</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number"></div>
                        <div class="card-name"><a href="userview.php">Students</a></div>
                    </div>
                    <!-- <div class="icon-box">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div> -->
                <!-- <div class="card">
                    <div class="card-content">
                        <div class="number">42</div>
                        <div class="card-name">Teachers</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">68</div>
                        <div class="card-name">Employees</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">$4500</div>
                        <div class="card-name">Earnings</div>
                    </div> -->
                    <!-- <div class="icon-box">
                        <i class="fas fa-dollar-sign"></i>
                    </div> -->
                </div>
            </div>
 </body>

</html>
