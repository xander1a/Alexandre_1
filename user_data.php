<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
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
		
		.table {
			margin: auto;
			width: 90%; 
		}
		
		thead {
			color: #FFFFFF;
		}
		</style>
		
		<title>MART CHICHEN FAMt</title>
	</head>
	
	<body>
		<h2>SMART CHICHEN FAM</h2>
		<ul class="topnav">
        <li>
        <li><a  href="home.php">Home</a></li>
			<li><a class="active" href="user_data.php">User Data</a></li>
			<li><a href="register.php">Add Paoutly</a></li>
			<li><a href="detais.php">Data stored</a></li>
			<li><a href="index.html">Logout</a></li>
		</ul>
		<br>
		<div class="container">
            <div class="row">
                <h3>User Data Table</h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr bgcolor="#10a0c5" color="#FFFFFF">
                      <th>Name</th>
                      <th>ID</th>
					  <th>phone</th>
					  <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   //include 'database.php';
                   include_once 'connect.php';
                   $sql = 'SELECT * FROM register ORDER BY name ASC';
                   foreach ($conn->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['name'] . '</td>';
                            echo '<td>'. $row['id_card'] . '</td>';
        
							echo '<td>'. $row['phone'] . '</td>';
							echo '<td><a class="btn btn-success" href="update.php?id='.$row['id'].'">Edit</a>';
							echo ' ';
							echo '<a class="btn btn-danger" href="delate.php?id='.$row['id'].'">Delete</a>';
							echo '</td>';
                            echo '</tr>';
                   }
                
                  ?>
                  </tbody>
				</table>
			</div>
		</div> <!-- /container -->
	</body>
</html>