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
		<title>Chico State Web Development Club - Quiz One</title>
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
		<link rel="stylesheet" type="text/css" href="../../styles/info.css">
	</head>
	<body>
		<div id="wrap">
			<header id="topNav">
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
				<h3 style="font-size: 190%;">Beginners HTML</h3>
					<form method="POST" action="processQuizOne.php">
						Your name<br>
						<input type="text" name="name"><br>
						What is the first thing at the top of every html document<br>
						<input type="text" name="top"><br>
						What attributes always go with images<br>
						<input type="text" name="top"><br>
						What attribute always go with hrefs<br>
						<input type="text" name="top"><br>
						Describe what the document tree is<br>
						<textarea rows="4" cols="60" name="tree"></textarea><br>
						What can you expect to find in the head<br>
						<textarea rows="4" cols="60" name="head"></textarea><br>
						Explain the difference between an inline and a block element<br>
						<textarea rows="4" cols="60" name="display"></textarea><br>
						Define an HTML attribute<br>
						<textarea rows="4" cols="60" name="attribute"></textarea><br>
						Write empty tags for images, headers, paragraphs, lists, images, and anchors<br>
						<textarea rows="4" cols="60" name="tags"></textarea><br>
						
						What is the difference between class and id<br>
						<textarea rows="4" cols="60" name="classid"></textarea><br>
						What do you use a div for?<br>
						<textarea rows="4" cols="60" name="divs"></textarea><br>
						What are the semantic elements and why are they important?<br>
						<textarea rows="4" cols="60" name="semantics"></textarea><br>
						Explain what the purpose of a web browser<br>
						<textarea rows="4" cols="60" name="browser"></textarea><br>
						<?php echo '<input type="hidden"  value="'.$_SERVER["REQUEST_URI"].'"name="url">'?>
						<input type="submit" value="Submit">
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