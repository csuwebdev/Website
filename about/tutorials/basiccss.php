<?php
include_once '../../includes/db_connect.php';
include_once '../../includes/functions.php';
 
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
		<title>Chico State Web Development Club - Basic CSS</title>
		<meta charset="UTF-8">
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="../../scripts/jquery.fittext.js"></script>
		<script src="../../scripts/infoscripts.js"></script>
		<script src="../../js/sha512.js"></script> 
        <script src="../../js/forms.js"></script> 
        <link href='http://fonts.googleapis.com/css?family=Fenix' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="stylesheet" type="text/css" href="../../styles/main.css">
	</head>
	<body>
		<div id="wrap" >
			<header  id="topNav">
				<h1 id="topHeader" class="Header">CSUCWDC</h1>
				<a href="../../index.php" class="topLink">
					<div id="navOne" class="TopNavButton">
						<h3 class="NavHeader">Home</h3>
					</div>
				</a>
				<a href="../about.php" class="topLink">
					<div id="navTwo" class="TopNavButton">
						<h3 class="NavHeader">About</h3>
					</div>
				</a>
				<a href="../contact.php" class="topLink">
					<div id="navThree" class="TopNavButton">
						<h3  class="NavHeader">Contact</h3>
					</div>
				</a>
				<a href="../tutorials.php" class="topLink">
					<div id="navFour" class="TopNavButton">
						<h3 class="NavHeader">Tutorials</h3>
					</div>
				</a>
				<a href="../members.php" class="topLink">
						<div id="navSeven" class="TopNavButton">
							<h3 class="NavHeader">Members</h3>
						</div>
				</a>
				<a href="../news.php" class="topLink">
					<div id="navFive" class="TopNavButton">
						<h3 class="NavHeader">News</h3>
					</div>
				</a>
				<a href="../schedule.php" class="topLink">
					<div id="navSix" class="TopNavButton">
						<h3 class="NavHeader">Schedule</h3>
					</div>
				</a>          
			</header>
			<section id="body">
				<div id="quizzes">
					<h3 style="font-size: 190%;">Adding some style with CSS</h3>
					You must create a stylesheet for your webpage that uses the rules below in any way you see fit<br><br>
						Include the code in your html to link the stylesheet to it and see the results<br>
						Use a reset selector at the top and use box-sizing border box for all elements<br>
						Use at least one selector, child selector, id selector, and class selector<br>
						Use the background, margins, padding, border rules<br>
						Set the font size, font family, and include one external font from google fonts<br>
						Use the display attribute, border radius, margin 0 auto, and text align-center rules<br>
						Use the width, height, min width, max height etc. rules<br>
						Use pseudo selectors to change the colors of hovers, actives, and focus on an element<br>
					</ul>
					<a href="examplecss.html">Example</a>
					<form method="POST" action="basiccssquiz.php" enctype="multipart/form-data" >
						Enter your name <br><input type="text" name="name">
						<br>Upload your html file <input type="file" name="html">
						<br>Upload your css file <input type="file" name="css"><br>
						<input type="submit">
						<?php echo '<input type="hidden"  value="'.$_SERVER["REQUEST_URI"].'"name="url">'?>
					</form>
					<?php
					if (isset($_GET['process'])) {
						echo '<h3>Submission Received!</h3>';
					}
					?>
				</div>
			</section>
			<footer>			
			<h1 class="Header">CsuWebDev@Gmail.com</h1>
			<?php if (login_check($mysqli) == true) : ?>
				
				<span class="Login">	
				<form id="loginForm" method="_POST" action="../../includes/logout.php" name="logout_form">
					<input type="submit" value="Logout" id="logoutButton">
					<?php echo '<input type="hidden"  value="'.$_SERVER["REQUEST_URI"].'"name="url">'?>
				</form>
				<a href="../../includes/editaccount.php"><button class="Login">Edit Account</button>
				<a href="../../includes/viewaccount.php"><button class="Login">View Account</button></a>
				<span class="Login" style="margin-right: 10px;">Logged in as <?php echo htmlentities($_SESSION['username']); ?>!</span>
				</span>
			<?php else : ?>
				<span class="Login">
				<button class="Login" id="loginButton">Login</button>
				<a href="../../register.php"><button class="Login" id="registerButton">Register</button></a>
				<?php
				if (isset($_GET['logout'])) {
					echo '<span id="logoutmessage">Successfully logged out!</span>';
				}
				?>
				</span>
				<form id="loginForm" class="hidden" action="../../includes/process_login.php" method="post" name="login_form">                      
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
		</footer>
	</body>
</html>