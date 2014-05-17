<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 include_once 'includes/register.inc.php';
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
		<script src="scripts/infoscripts.js"></script>
		<script src="js/sha512.js"></script> 
        <script src="js/forms.js"></script> 
        <link rel="shortcut icon" href="favicon.ico" />
        <link href='http://fonts.googleapis.com/css?family=Fenix' rel='stylesheet' type='text/css'>		
		<link rel="stylesheet" type="text/css" href="styles/main.css">
		<link rel="stylesheet" type="text/css" href="styles/info.css">
	</head>
	<body>
		<div id="wrap">
			<header>
				<div id="topNav">
					<h1 id="topHeader" class="Header">CSUCWDC</h1>
					<a href="index.php" class="topLink">
                        <div id="navOne" class="TopNavButton">
                            <h3 class="NavHeader">Home</h3>
                        </div>
                    </a>
					<a href="about/about.php" class="topLink">
                        <div id="navFive" class="TopNavButton">
                            <h3 class="NavHeader">About</h3>
                        </div>
                    </a>
					<a href="about/contact.php" class="topLink">
                        <div id="navTwo" class="TopNavButton">
                            <h3  class="NavHeader">Contact</h3>
                        </div>
                    </a>
					<a href="about/tutorials.php" class="topLink">
                        <div id="navFour" class="TopNavButton">
                            <h3 class="NavHeader">Tutorials</h3>
                        </div>
                    </a>
                    <a href="about/news.php" class="topLink">
                        <div id="navSix" class="TopNavButton">
                            <h3 class="NavHeader">News</h3>
                        </div>
                    </a>
					<a href="about/schedule.php" class="topLink">
						<div id="navSix" class="TopNavButton">
							<h3 class="NavHeader">Schedule</h3>
						</div>
					</a>
				</div>               
			</header>
			<section id="container">
				<section id="body">
		
					<h1 class="BodyHeader"> New Account</h1>
					<div id="contentContainer">
						<div id="bodyPost" class="BodyContent">
						   <h3 class="PostHeader">Enter in new account details</h3><br>
						   Passwords must be 6 or more characters and contain one upper case, one lower case, and one number<br><br>
						<form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form">		
						Username: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='username' id='username' /><br><br>
						Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" id="email" /><br><br>
						Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" id="password"/><br><br>
						Confirm password: <input type="password" name="confirmpwd" id="confirmpwd" /><br><br>
						<input type="submit" value="Register" onclick="return regformhash(this.form,this.form.username,this.form.email,this.form.password, this.form.confirmpwd);" /> <br><br>
						</form>
												
						</div>
					</div>
				</section>
			</section>
			<footer>			
				<h1 class="Header">CsuWebDev@Gmail.com</h1>
				<?php if (login_check($mysqli) == true) : ?>
					
					<span class="Login">	
					<a href="includes/logout.php"><button class="Login">Logout</button></a>
					<a href="includes/editaccount.php"><button class="Login">Edit Account</button>
					<a href="includes/viewaccount.php"><button class="Login">View Account</button></a>
					<span style="margin-right: 10px;">Logged in as <?php echo htmlentities($_SESSION['username']); ?>!</span>
					</span>
				<?php else : ?>
					<span class="Login">
					<button class="Login" id="loginButton">Login</button>
					<a href="register.php"><button class="Login" id="registerButton">Register</button></a>
					<?php
					if (isset($_GET['logout'])) {
						echo '<span id="logoutmessage">Successfully logged out!</span>';
					}
					?>
					</span>
					<form id="loginForm" class="hidden" action="includes/process_login.php" method="post" name="login_form">                      
						Email: <input type="text" name="email" />
						Password: <input type="password" name="password" id="password"/>
						<input type="button" value="Login" onclick="formhash(this.form, this.form.password);" /> 
					</form>
					
				<?php endif; ?>
				<?php
				if (isset($_GET['error']) && login_check($mysqli) == false) {
					echo '<span id="logoutmessage" class="Login">Error Logging In!</span>';
				}
				
				?> 
			</footer>
		</div>
	</body>
</html>