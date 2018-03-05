<?php 

function sanitizeFormPassword($inputText) {
	$inputText = strip_tags($inputText);
	return $inputText;
}

function sanitizeFormUsername($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	return $inputText;
}

function sanitizeFormString($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	$inputText = ucfirst(strtolower($inputText));
	return $inputText;
}

if(isset($_POST['loginButton'])) {
	//Login button was pressed
	
}

if(isset($_POST['registerButton'])) {
	//Register button was pressed
	$username = sanitizeFormUsername($_POST['username']);
	
	$firstName = sanitizeFormString($_POST['firstName']);

	$lastName = sanitizeFormString($_POST['lastName']);

	$email = sanitizeFormString($_POST['email']);

	$email2 = sanitizeFormString($_POST['email2']);

	$password = sanitizeFormPassword($_POST['password']);

	$password2 = sanitizeFormPassword($_POST['password2']);

}


?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login 🐶</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>


  </head>

  <body>
<!--container-->

    <!--NAVIGATION--------------------------------------------------------------->
    <nav class="navbar navbar-light bg-light static-top">
     <!--container-->
      <div class="container">
        <!--nav container-->
        <div class="container">
          <div class="row">
              <div class="col-sm">
                <a class="navbar-brand" href="#">GameHound</a>   
                <button type="button" class="btn btn-light">Recommend</button>
              </div>
            <div class="col-sm">
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>          
            </div>
            <div class="col-sm">
              <a class="btn btn-primary" href="./login.php">Sign In</a>
              <a class="btn btn-info" href="./register.php">Sign Up</a>
            </div>
          </div>
      </div>
      </div>
    </nav>

<div class="container">
    
    <!--JUMBOTRON-------------------------------------------------------------------->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Login</h1>
        <p class="lead"></p>
      </div>
    </div>
    
    <div class="row">
        <div class="col"> <!--first of two columns-->
                
<!-------------------------------------------------------------------------------------------FORM BEGIN----------------------------------------------------------------------------------------------><!-------------------------------------------------------------------------------------------FORM BEGIN---------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------FORM BEGIN---------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------FORM BEGIN---------------------------------------------------------------------------------------------->
        
    <form id="loginForm" action="register.php" method="POST">
			<h2>Login to your account</h2>
			<p>
				<label for="loginUsername">Username</label>
				<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. bartSimpson" required>
			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
			</p>

			<button type="submit" name="loginButton">LOG IN</button>
			
		</form>



</body>