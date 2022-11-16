<? php

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Simple Login Form</title>
<link rel="stylesheet" href="/bs/css/bootstrap.min.css">
<script src="/bs/js/jquery.min.js"></script>
<script src="/bs/js/bootstrap.min.js"></script> 
<style>
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="login-form">
    <form action="home.php" method="post">
        <h2 class="text-center">Log in</h2>   
		<br>    
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required="required">
        </div>
		<br>
  ?>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required">
        </div>
		<br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
         <br>
            <a href="#" class="pull-right">Forgot Password?</a>
        </div>        
    </form>
    
</div>
</body>
</html>              
