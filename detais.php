
<? php
include("connect.php");

?>
<html>
<title> detail</title>
<head>
<link rel="stylesheet" href="/bs/css/bootstrap.min.css">
<script script src="/bs/js/jquery.min.js"> </script>



<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
			text-align: center;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #4CAF50;
			width: 70%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #3e8e41;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		
		img {
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
		</style>
</head>
<body>
        
 <h1 class="text-center"> Detail bout the kitchen</h1>
 <ul class="topnav">
 <li>
          <a  href="home.php">Home</a></li>
			<li><a href="user_data.php">User Data</a></li>
			<li><a href="register.php">Add Paoutly</a></li>
			<li><a class="active" href="detais.php">Data stored</a></li>
			<li><a href="index.html">Logout</a></li>
		</ul>
		<br>
 <?php

include("connect.php");
//include("delete.php");
//Attempt select query execution

$sql = "SELECT * FROM user_data";

if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table style='background-color:whitblue; margin-left:auto;margin-right:auto;margin-top:20px'class='table table-bordred' >";
            echo "<tr >";
            echo "<th>NO</th>";
                echo "<th>Temperature </th>";
                echo "<th>Humidity</th>";
                echo "<th>Door_state</th>";
                
                  echo "<th>Date & Time</th>";
                
          
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr style='background-color:cyan'>";
                echo "<td style='background-color:white;'>" . $row['id'] . "</td>";
                echo "<td style='background-color:white;'>" . $row['temperature'] . "</td>";
                echo "<td style='background-color:white;'>" . $row['humidity'] . "</td>";
                echo "<td style='background-color:white;'>" . $row['open'] . "</td>";
                echo "<td style='background-color:white;'>". $row['Date_time'] ."</td>";
                
               


            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } 
    else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 


// Close connection
mysqli_close($conn);


?>


 

</body>
</html>