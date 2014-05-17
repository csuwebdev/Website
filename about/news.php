<?php
include_once '../includes/db_connect.php';
include_once '../includes/functions.php';
 
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
		<title>Chico State Web Development Club - News</title>
		<meta charset="UTF-8">
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="scripts/jquery.fittext.js"></script>
		<script src="../scripts/infoscripts.js"></script>
		<script src="../js/sha512.js"></script> 
        <script src="../js/forms.js"></script> 
        <link href='http://fonts.googleapis.com/css?family=Fenix' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="stylesheet" type="text/css" href="../styles/main.css">
		<link rel="stylesheet" type="text/css" href="../styles/tutorials.css">
	</head>
	<body>
		<div id="wrap">
			<header id="topNav">
				<h1 id="topHeader" class="Header">CSUCWDC</h1>
				<a href="../index.php" class="topLink">
					<div id="navOne" class="TopNavButton">
						<h3 class="NavHeader">Home</h3>
					</div>
				</a>
				<a href="about.php" class="topLink">
					<div id="navTwo" class="TopNavButton">
						<h3 class="NavHeader">About</h3>
					</div>
				</a>
				<a href="contact.php" class="topLink">
					<div id="navThree" class="TopNavButton">
						<h3  class="NavHeader">Contact</h3>
					</div>
				</a>
				<a href="tutorials.php" class="topLink">
					<div id="navFour" class="TopNavButton">
						<h3 class="NavHeader">Tutorials</h3>
					</div>
				</a>
				<a href="members.php" class="topLink">
						<div id="navSeven" class="TopNavButton">
							<h3 class="NavHeader">Members</h3>
						</div>
				</a>
				<a href="news.php" class="topLink">
					<div id="navFive" class="TopNavButton">
						<h3 id="activeHeader" class="NavHeader">News</h3>
					</div>
				</a>             
				<a href="schedule.php" class="topLink">
					<div id="navSix" class="TopNavButton">
						<h3 class="NavHeader">Schedule</h3>
					</div>
				</a>
			</header>
			<section id="container">
				<section id="body">
					<h1>We design to bring your site online</h1>
					<section id="contentContainer">
							<h3 style="font-size: 140%;" class="PostHeader">03/29/14: Vote in the upcoming student election for our club to receive funding and receive a free domain name! Revenue Sharing is part of the Associated Students elections on April 15, 16, and 17.</h3>
					</section>
				</section>
				<aside id="leftAside">
					<nav>
						<h3>Recent Announcements:</h3>
						<ul>
							<h4>Starting out</h4>
						</ul>
						<h4>Demos</h3>
					</nav>
				</aside>
            </section>
			<footer>			
				<h1 class="Header">CsuWebDev@Gmail.com</h1>
				<?php if (login_check($mysqli) == true) : ?>
					
					<span class="Login">	
					<form id="loginForm" method="POST" action="../includes/logout.php" name="logout_form">
						<input  type="submit" value="Logout" id="logoutButton">
						<?php echo '<input type="hidden"  value="'.$_SERVER["REQUEST_URI"].'"name="url">'?>
					</form>
					<a href="../includes/editaccount.php"><button class="Login">Edit Account</button>
					<a href="../includes/viewaccount.php"><button class="Login">View Account</button></a>
					<span class="Login" style="margin-right: 10px;">Logged in as <?php echo htmlentities($_SESSION['username']); ?>!</span>
					</span>
				<?php else : ?>
					<span class="Login">
					<button class="Login" id="loginButton">Login</button>
					<a href="../register.php"><button class="Login" id="registerButton">Register</button></a>
					<?php
					if (isset($_GET['logout'])) {
						echo '<span id="logoutmessage">Successfully logged out!</span>';
					}
					?>
					</span>
					<form id="loginForm" class="hidden" action="../includes/process_login.php" method="post" name="login_form">                      
						Email: <input type="text" name="email" />
						Password: <input type="password" name="password" id="password"/>
						<input type="button" value="Login" onclick="formhash(this.form, this.form.password);" /> 
						<?php echo '<input type="hidden"  value="'.$_SERVER["REQUEST_URI"].'"name="url">'?>
					</form>
					
				<?php endif; ?>
				<?php
				if (isset($_GET['error']) && login_check($mysqli) == false) {
					echo '<span id="logoutmessage" class="Login">Error Logging In!</span>';
				}
				
				?> 
				<div id="contactInfo">
				</div>
			</footer>
		</div>
	</body>
</html>