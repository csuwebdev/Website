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
						echo '<span id="logoutmessage">Successfully logged out!</span>';
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
			<section id="body">
                <h1 class = "BodyHeader">Build your own website Spring 2014</h1>
                <h1 class = "BodyHeader">Mondays at 2pm in OCNL 251</h1>
                <h1 class = "BodyHeader">Thursdays at 1pm in PLMS 303</h1>
                
                <div id="contentContainer">
                    <a href="about/tutorials.html" class="BodyLink">
                        <div id="postOne" class="BodyContent">
                            <h3 class="PostHeader">Tutorials</h3>
                            <p>Get started with our tutorial section</p>
                        </div>
                    </a>
                    <a href="about/meetings.html" class="BodyLink">
                        <div id="postTwo" class="BodyContent">
                            <h3 class="PostHeader">Meetings</h3>
                            <p>Meetings on Feb 24th and Feb 27th will cover HTML Form and PHP Basics!</p>
                        </div>
                    </a>
                    <a href="about/info.html" class="BodyLink">
                        <div id="postThree" class="BodyContent">
                            <h3 class="PostHeader">Info</h3>
                            <p>Find out what you will be learning about if you come to our meetings</p>
                        </div>
                    </a>
                    <a href="about/about.html" class="BodyLink">
                        <div id="postFour" class="BodyContent">
                            <h3 class="PostHeader">About</h3>
                            <p>Learn about how our club works</p>
                        </div>
                    </a>
                </div>
                
			</section>
			<footer>			
				<h1 class="Header">Email CsuWebDev@Gmail.com for questions</h1>
				<div id="contactInfo">
				</div>
			</footer>
		</div>
	</body>
</html>