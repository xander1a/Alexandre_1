<?php
    require 'connect.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
   
	
	$sql = "SELECT * FROM register where id = ?";
	$q = $conn->prepare($sql);
	$q->execute(array($id));
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
		}
		
		textarea {
			resize: none;
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
		</style>
		
		<title>Tap and Toilet</title>
		
	</head>
	
	<body>

		<h2 align="center">SMART PUBLIC TOILET</h2>
		
		<div class="container">
     
			<div class="center" style="margin: 0 auto; width:495px; border-style: solid; border-color: #f2f2f2;">
				<div class="row">
					<h3 align="center">Edit User Data</h3>
					<p id="defaultGender" hidden><?php echo $data['gender'];?></p>
				</div>
		 
				<form class="form-horizontal" action="user data edit tb.php?id=<?php echo $id?>" method="post">
					
					
					<div class="control-group">
						<label class="control-label">Name</label>
						<div class="controls">
							<input name="name" type="text"  placeholder="" value="<?php echo $data['name'];?>" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label"> ID</label>
						<div class="controls">
							<input name="email" type="text" placeholder="" value="<?php echo $data['id_card'];?>" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">phone</label>
						<div class="controls">
							<input name="phone" type="text"  placeholder="" value="<?php echo $data['phone'];?>" required>
						</div>
					</div>
					
					<div class="form-actions">
						<button type="submit" class="btn btn-success">Update</button>
						<a class="btn" href="user data.php">Back</a>
					</div>
				</form>
			</div>               
		</div> <!-- /container -->	
		
	
	</body>
</html>