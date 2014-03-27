<?php
include_once 'db_connect.php';
include_once 'functions.php';
 
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
        <script src="../scripts/jquery.fittext.js"></script>
		<script src="../scripts/infoscripts.js"></script>
		<script src="../js/sha512.js"></script> 
        <script src="../js/forms.js"></script> 
        <link rel="shortcut icon" href="favicon.ico" />
        <link href='http://fonts.googleapis.com/css?family=Fenix' rel='stylesheet' type='text/css'>		
		<link rel="stylesheet" type="text/css" href="../styles/main.css">
		<link rel="stylesheet" type="text/css" href="../styles/info.css">
	</head>
	<body>
		<div id="wrap">
			<header>
				<div id="topNav">
					<h1 id="topHeader" class="Header">CSUCWDC</h1>
					<?php if (login_check($mysqli) == true) : ?>
						
						<span class="Login">
						<a href="logout.php"><button class="Login">Logout</button></a>
						<a href="editaccount.php"><button class="Login">Edit Account</button>
						<a href="viewaccount.php"><button class="Login">View Account</button></a>
						You are logged in as <?php echo htmlentities($_SESSION['username']); ?>!
						</span>
					<?php else : ?>
						<span class="Login"><button class="Login" id="loginButton">Login</button>
						<a href="../register.php"><button class="Login" id="registerButton">Register</button></a>
						<?php
						if (isset($_GET['logout'])) {
						echo 'Successfully logged out!';
						}
						?>
						</span>
						
						<form id="loginForm" class="hidden" action="process_login.php" method="post" name="login_form" style="position: absolute; color: white; left: 100px;">                      
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
					<a href="../index.php" class="topLink">
                        <div id="navOne" class="TopNavButton">
                            <h3 class="NavHeader">Home</h3>
                        </div>
                    </a>
                    <a href="../about/about.html" class="topLink">
                        <div id="navFive" class="TopNavButton">
                            <h3 class="NavHeader">About</h3>
                        </div>
                    </a>
                    <a href="../about/contact.html" class="topLink">
                        <div id="navSix" class="TopNavButton">
                            <h3 class="NavHeader">Contact</h3>
                        </div>
                    </a>
				</div>               
			</header>
			<section id="body">
        
		<h1 class="BodyHeader"> Edit Account</h1>
		<div id="contentContainer">
				<div id="postOne" class="BodyContent" style="width: 500px; height: 280px; margin: 0 auto; padding-top: 20px;">
				   

				</div>
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