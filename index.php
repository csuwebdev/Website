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
					<a href="index.php" class="topLink">
                        <div id="navOne" class="TopNavButton">
                            <h3 id="activeHeader" class="NavHeader">Home</h3>
                        </div>
                    </a>
					<a href="about/about.php" class="topLink">
                        <div id="navTwo" class="TopNavButton">
                            <h3 class="NavHeader">About</h3>
                        </div>
                    </a>
					<a href="about/contact.php" class="topLink">
                        <div id="navThree" class="TopNavButton">
                            <h3  class="NavHeader">Contact</h3>
                        </div>
                    </a>
					<a href="about/tutorials.php" class="topLink">
                        <div id="navFour" class="TopNavButton">
                            <h3 class="NavHeader">Tutorials</h3>
                        </div>
                    </a>
					<a href="about/members.php" class="topLink">
						<div id="navSeven" class="TopNavButton">
							<h3 class="NavHeader">Members</h3>
						</div>
					</a>
                    <a href="about/news.php" class="topLink">
                        <div id="navFive" class="TopNavButton">
                            <h3 class="NavHeader">News</h3>
                        </div>
                    </a>
					
					<a href="about/schedule.php" class="topLink">
						<div id="navSix" class="TopNavButton">
							<h3 class="NavHeader">Schedule</h3>
						</div>
					</a>
					
			</header>
			<section id="body">
                <h1 class = "BodyHeader">Build your own website Spring 2014</h1>
                <h1 class = "BodyHeader">Mondays at 2pm in OCNL 251</h1>
                
                <div id="contentContainer">
                    <a href="about/tutorials.php" class="BodyLink">
                        <div id="postOne" class="BodyContent">
                            <h3 class="PostHeader">Tutorials</h3>
                            <p>Get started with our tutorial section</p>
                        </div>
                    </a>
                    <a href="about/news.php" class="BodyLink">
                        <div id="postTwo" class="BodyContent">
                            <h3 class="PostHeader">News</h3>
                            <p>Create an account on the bottom right!</p>
                        </div>
                    </a>
                    <a href="about/contact.php" class="BodyLink">
                        <div id="postThree" class="BodyContent">
                            <h3 class="PostHeader">Contact</h3>
                            <p>Ask and let us know what you think</p>
                        </div>
                    </a>
                    <a href="about/about.php" class="BodyLink">
                        <div id="postFour" class="BodyContent">
                            <h3 class="PostHeader">About</h3>
                            <p>Learn about how our club works</p>
                        </div>
                    </a>
					
                </div>
				
			</section>
			<footer style="min-width: 800px;">			
				<h1 class="Header">CsuWebDev@Gmail.com</h1>
				<span id="updated">Last Updated 03/29/14</span>
				<?php if (login_check($mysqli) == true) : ?>
					
					<span class="Login">	
					<form id="loginForm" method="_POST" action="includes/logout.php" name="logout_form">
						<input type="submit" value="Logout" id="logoutButton">
						<?php echo '<input type="hidden"  value="'.$_SERVER["REQUEST_URI"].'"name="url">'?>
					</form>
					<a href="includes/editaccount.php"><button class="Login">Edit Account</button>
					<a href="includes/viewaccount.php"><button class="Login">View Account</button></a>
					<span class="Login" style="margin-right: 10px;">Logged in as <?php echo htmlentities($_SESSION['username']); ?>!</span>
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
						<?php echo '<input type="hidden" value="'.$_SERVER["REQUEST_URI"].'"name="url">'?>
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