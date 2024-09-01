<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="css/style2.css">
    <title>Admin panel</title>
</head>
<style>
    
</style>
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
            <!-- <i class="fas fa-bell"></i> -->
            <!-- <div class="user">
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
                <!-- <li>
                    <a href="studview.php">
                        <i class="fas fa-user-graduate"></i>
                        <div>Users</div>

                    </a>
                </li> -->
               <li>
                    <a href="Logout.php">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <div>Logout</div>
                    </a>
                </li>
                <!--  <li>
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
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        <div>Help</div>
                    </a>
                </li> -->
            </ul>
        </div>
        <!-- <div class="main">
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number"></div>
                        <div class="card-name"><a href="studview.php">Students</a></div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
                <div class="card">
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
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>
            </div>
            <div class="charts">
                <div class="chart">
                    <h2>Earnings (past 12 months)</h2>
                    <div>
                        <a href="studview.php"></a>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
                <div class="chart doughnut-chart">
                    <h2>Employees</h2>
                    <div>
                        <canvas id="doughnut"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
    <script src="js/chart1.js"></script>
    <script src="js/chart2.js"></script>
</body>

</html> -->
<div class="hh" >
    <div class="box">
<?php
// Establish connection to MySQL database
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "skill";
require('config.php');
// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve student data
$sql = "SELECT * FROM contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //Output data of each row
    echo "<table border=2 height=300px width=600px ><tr><th>SRNO</th><th>NAME</th><th>EMAIL</th><th>SUBJECT</th><th>MESSAGE</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td rowspan=1>" . $row["srno"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["subject"] . "</td><td>" . $row["message"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
// Close connection3
$conn->close();
?>
</div>
</div>


