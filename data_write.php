

<?php

include("connect.php");
//include_once 'connect.php';
   
// Get date and time variables
   // date_default_timezone_set('Asia/Kolkata');  // for other timezones, refer:- https://www.php.net/manual/en/timezones.asia.php
   // $d = date("Y-m-d");
   // $t = date("H:i:s");
    
// If values send by NodeMCU are not empty then insert into MySQL database table

  //if(!empty($_POST['sendval']) && !empty($_POST['sendval2'])&& !empty($_POST['sendval3'])&& !empty($_POST['sendval4']) && !empty($_POST['sendval5']))
  if(!empty($_POST['sendval']) && !empty($_POST['sendval2']))
    {   
             
		        $val2 = $_POST['sendval'];
                $val3 = $_POST['sendval2'];
				$val4 = $_POST['sendval3'];
				//$val5 = $_POST['sendval4'];
				//$val5 = $_POST['sendval5'];


// Update your tablename here
	        $sql = "INSERT INTO user_data ( temperature,humidity,open) VALUES ('".$val2."','".$val2."', '".$val4."')"; 
			//$sql = "INSERT INTO user_data ( temperature,humidity) VALUES ('".$val2."','".$val3."')"; 
		

		if ($conn->query($sql) === TRUE) {
		    echo "Values inserted in MySQL database table.";
		} else {

		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	


// Close MySQL connection
$conn->close();

//echo"welcom";
?>
