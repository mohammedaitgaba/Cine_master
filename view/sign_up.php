<?php 
	require_once '../controller/authentification.controller.php';
	if(isset($_POST['submit'])){
		// header('location:http://localhost/cine_master/view/test.php');
	$new_user = new login();
	$new_user -> sign_up();
	}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../styles/login/main.css">
	<link rel="stylesheet" href="../styles/login/util.css">
</head>
<body>
<?php require_once './inc/nav.php' ?>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-40 p-b-30">
				<form class="login100-form validate-form flex-sb flex-w" method="POST">
					<span class="login100-form-title p-b-32">
						Creat account
					</span>

					<span class="txt1 p-b-11">
						Creat username
					</span>
					<div class="wrap-input100 validate-input m-b-21" >
						<input class="input100" type="text" name="username" required>
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Your Email
					</span>
					<div class="wrap-input100 validate-input m-b-21" data-validate = "email is required">
						<input class="input100" type="email" name="email" required>
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Creat Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" required>
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit" >
							Creat account
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
<!-- <script src="../js/main.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
</body>
</html>