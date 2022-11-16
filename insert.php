
        <?php
        include_once 'connect.php';
        //if(isset($_POST['save']))
       if ( !empty($_POST))
        {	 
             $name = $_POST['name'];
             $id_card = $_POST['id_card'];
             $phone = $_POST['phone'];
            
             $sql = "INSERT INTO register (name, id_card,phone)
             VALUES ('$name','$id_card','$phone')";
         if ($conn->query($sql) === TRUE) {
            header('location: register.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
             mysqli_close($conn);
        }
        else {
            echo"not inserted";
        }

        echo"welcome";
        ?>