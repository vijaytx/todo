<?php
 include("config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			/* html{
				--s: 125px; /* control the size 
				--c1: #774F38;
				--c2: #F1D4AF;
				
				--_g:radial-gradient(#0000 60%,var(--c1) 61% 63%,#0000 64% 77%,var(--c1) 78% 80%,#0000 81%);
				--_c:,#0000 75%,var(--c2) 0;
				background:
					conic-gradient(at 12% 20% var(--_c)) calc(var(--s)* .44) calc(.9*var(--s)),
					conic-gradient(at 12% 20% var(--_c)) calc(var(--s)*-.06) calc(.4*var(--s)),
					conic-gradient(at 20% 12% var(--_c)) calc(.9*var(--s)) calc(var(--s)* .44),
					conic-gradient(at 20% 12% var(--_c)) calc(.4*var(--s)) calc(var(--s)*-.06),
					var(--_g),var(--_g) calc(var(--s)/2) calc(var(--s)/2) var(--c2);
				background-size: var(--s) var(--s);
			} */
			body{
				margin: 0px;
				background-image: url("bg.jpg");
    			background-size:cover;
			}
			.nav{
				font-size:x-large;
				background-color: rgba(255, 255, 255, 0.726);
				text-align: right;
				padding: 8px;
				border-radius: 5px;
			}


			.nav a{
				color:rgb(73, 74, 74);
				font-size:x-large;
				text-decoration: none;
				padding: 5px;
				line-height: 30px;
			}
			.div1{
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				background-color: ghostwhite;
				padding: 50px;
				box-shadow: 3px 5px 20px 5px rgba(0, 0, 0, 0.574);
				border-radius: 20px;
			}
			h1{
				text-align: center;
				margin-bottom: 20px;
			}
			input[type = "text"], input[type = "password"] {
				width: 100%;
				padding: 5px;
				border-radius: 5px;
				margin-bottom: 5px;
				border: 2px solid #ccc;
				box-sizing:border-box;
				font-size: 20px;
			}
			input[type="submit"] {
				background: #4CAF50;
				color: #fff;
				border: none;
				font-size: 18px;
				padding: 6px;
				margin-top: 8%;
				margin-left: 15%;
				width: 30%;
				float: left;
				border-radius: 5px;
				cursor: pointer;
			}
			input[type="submit"]:hover {
				background-color:  #3e8e41;
			}
			input[type="button"] {
				background: #c64d4dd0;
				color: #fff;
				border: none;
				font-size: 18px;
				padding: 6px;
				margin-top: 8%;
				margin-right: 15%;
				width: 30%;
				float: right;
				border-radius: 5px;
				cursor: pointer;
			}
			input[type="button"]:hover {
				background-color:  #8e3e3e;
			}
			@media only screen and (max-width: 600px) {
				.div1 {
					padding: 20px;
					border-radius: 10px;
					top: 20%;
					left: 30%;
					transform: translate(-20%, -30%);
				}
				h1 {
					font-size: 24px;
					margin: 0;
				}
				input[type="submit"] {
					width: 100%;
					float: none;
					margin-top: 10%;
				}
			}
		</style>
	</head>
	<body>
		<div class="nav">
			<a href="index.html">Home</a>
			<a href="about.html">About</a>
			<a href="login.html">Login</a>
			<a href="Form.html">Register</a>
		</div>
		<div class="div1">
			<form method = "post" action="login.php">
				<h1>Login</h1>
				<h3>Username</h3>
				<input type="text" id="username" name="username" required>
				<h3>Password</h3>
				<input type="password" id="password" name="password" required>
				<input type="button" value="Go back!" onclick="history.back()">
				<input type="submit" name="signin" value="Login">	

				<?php
					if(isset($_POST['signin'])){
						$username = trim($_POST['username']);
						$password = trim($_POST['password']);	
						$sql= "SELECT * FROM `user_data` WHERE username='$username' and password='$password'";
						$res=mysqli_query($con,$sql);
						$result=mysqli_num_rows($res);
                		if($result==1) {
                 			echo "<script type='text/javascript'>
                		 		alert('Welcome $username!');
                		 		window.location.href='index.html';
                		 </script>";
					    }
					    else{
					        echo "<script type='text/javascript'>
                		 		alert('Invalid Username/Password!');
                		 		window.location.href='login.php';
                		 </script>";
					    }
		              }
		           ?>		

			</form>
		</div>	
	</body>
</html>