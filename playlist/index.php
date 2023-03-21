<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./css/reset.css">
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<div id="wrap">
		<div class="main">
			<a href="main.php"><h1>YZA</h1></a>
			<button class="login">YZA</button>
			<div class="logdiv">
				<form action="./process/login_process.php" method="post">
					<input type="text" name="id" placeholder="ID" required>
					<input type="password" name="pw" placeholder="PASSWORD" required>
					<button type="submit">Log In</button>
				</form>
			</div>
			<script src="js/login.js"></script>
			<a href="./join.php"><button class="joinUs">Join Us</button></a>

			<?php
					session_start();
					if(isset($_SESSION['id'])){
				?>
				<script>
					document.querySelector(".logdiv").innerHTML = `
						<p class="logout"><?=$_SESSION['id']."님 안녕하세요."?></p>
						<form action="./process/logout_process.php" method="post">
							<button type="submit">Log out</button>
						</form>
						`;
				</script>
				<?php
					}
				?>
			<?php
					session_start();
					if(isset($_SESSION['id'])){
				?>
				<script>
					document.querySelector(".joinUs").style.display = "none";
				</script>
				<?php
					}
				?>
		</div>
	</div>
</body>
</html>
