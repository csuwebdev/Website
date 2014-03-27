<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Chico State Web Development Club - Home</title>
		<meta charset="UTF-8">
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="scripts/jquery.fittext.js"></script>
		<script src="scripts/scripts.js"></script>
		<script src="js/sha512.js"></script> 
        <script src="js/forms.js"></script> 
        <link rel="shortcut icon" href="favicon.ico" />
        <link href='http://fonts.googleapis.com/css?family=Fenix' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
		<div id="wrap">
			<header id="topNav">
				<h1 id="topHeader" class="Header">CSUCWDC</h1>
				<?php if (login_check($mysqli) == true) : ?>
					
					<span class="Login">
					<a href="includes/logout.php"><button class="Login">Logout</button></a>
					<a href="includes/editaccount.php"><button class="Login">Edit Account</button>
					<a href="includes/viewaccount.php"><button class="Login">View Account</button></a>
					You are logged in as <?php echo htmlentities($_SESSION['username']); ?>!
					</span>
				<?php else : ?>
					<span class="Login"><button class="Login" id="loginButton">Login</button>
					<a href="register.php"><button class="Login" id="registerButton">Register</button></a>
					<?php
					if (isset($_GET['logout'])) {
					echo 'Successfully logged out!';
					}
					?>
					</span>
					
					<form id="loginForm" class="hidden" action="includes/process_login.php" method="post" name="login_form" style="position: absolute; color: white; left: 100px;">                      
						Email: <input type="text" name="email" />
						Password: <input type="password" name="password" id="password"/>
						<input type="button" value="Login" onclick="formhash(this.form, this.form.password);" /> 
					</form>
					
				<?php endif; ?>
				<?php
				if (isset($_GET['error'])) {
					echo '<span class="Login">Error Logging In!</span>';
				}
				
				?> 
				<a href="index.php" class="topLink">
					<div id="navOne" class="TopNavButton">
						<h3 class="NavHeader">Home</h3>
					</div>
				</a>
				<a href="about/about.html" class="topLink">
					<div id="navTwo" class="TopNavButton">
						<h3 class="NavHeader">About</h3>
					</div>
				</a>
				<a href="about/newsletters.html" class="topLink">
					<div id="navThree" class="TopNavButton">
						<h3 class="NavHeader">Contact</h3>
					</div>
				</a>         
			</header>
        <h1 style="text-align: center;">Registration successful!</h1>
		<div style="text-align: center;"> You can now go back to the <a href="index.php">login page</a> and log in</div>
    </body>
</html>