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
		<title>Chico State Web Development Club - Tutorials</title>
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
						<h3 id="activeHeader" class="NavHeader">Tutorials</h3>
					</div>
				</a>
				<a href="members.php" class="topLink">
						<div id="navSeven" class="TopNavButton">
							<h3 class="NavHeader">Members</h3>
						</div>
				</a>
				<a href="news.php" class="topLink">
					<div id="navFive" class="TopNavButton">
						<h3 class="NavHeader">News</h3>
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
						
						<div id="postOne" class="BodyContent">
							<h3 style="font-size: 140%;" class="PostHeader">Project</h3>
							<p>Get started building your own<a href="tutorials/project.php"> website</a></p>
							 
							
						</div>
						<div id="postTwo" class="BodyContent">
							<h3 style="font-size: 140%;" class="PostHeader">Quizzes</h3>
							<p>Test your knowledge with these <a href="tutorials/quizzes.php"> quizzes</a></p>
							
						</div>
						<div id="postThree" class="BodyContent">
							<h3 style="font-size: 140%;" class="PostHeader">Lessons</h3>
							<p>Learn about web design from my <a href="tutorials/lessons.php"> lessons</a> from the club meetings</p>
						</div>
						<div id="postFour" class="BodyContent">
							<h3 style="font-size: 140%;" class="PostHeader">Coming Soon!</h3>
							<p>More coming soon...</p>
						</div>
					</section>
				</section>
				<aside id="leftAside">
					<nav>
						<h3>Valuable Links:</h3>
						<ul>
							<h4>Starting out</h4>
								<li><a href="http://www.w3schools.com">W3 Schools</a><br><span>Great reference and starter point to help you learn the basics.</span></li>
								<li><a href="http://www.codeacademy.com">CodeAcademy</a><br><span>Interactive HTML and CSS tutorials that will get you going.</span></li>
								<li><a href="https://dash.generalassemb.ly/">Dash</a><br><span>Learn to build a portfolio or business with no prior knowledge.</span></li>
								<h4>Finding Demos</h4>
								<li><a href="http://tympanus.net/codrops/">Codrops</a><br><span>Loads of professional demos broken down to be easy.</span></li>
								<li><a href="http://alistapart.com/">Alistapart</a><br><span>Professional tips on web design and code.</span></li>
								<li><a href="http://www.onextrapixel.com">OnextraPixel</a><br><span>Resource for all sorts of professional demo code examples.</span></li>
								<h4>Useful Software</h4>
								<li><a href="https://www.github.com">Github</a><br><span>You <strong>should</strong> be using this to version control your code.</span></li>
								<li><a href="https://www.sublimetext.com">Sublime Text</a><span> or </span><a href="https://www.notepad-plus-plus.org">Notepad++</a><br><span> for Mac and PC respectively. </span></li>
								<li><a href="http://www.wampserver.com/en/">Wamp</a><br><span>Wamp allows you to run a local webserver using PHP, MySQL, and Apache.</span></li>
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
					<span  class="Login" style="margin-right: 10px;">Logged in as <?php echo htmlentities($_SESSION['username']); ?>!</span>
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
			</footer>
		</div>
	</body>
</html>