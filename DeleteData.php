<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
	body {
		background-color: #FA54F5;
		background-image: linear-gradient(62deg, #FA54F5 0%, #FDC3FD 100%);
	}
</style>

<body>
	<div>
		<div id="menu-content">
			<!-- Navigation -->
			<label id="collapse" for="_1">
				<img id="menuphoto" src="images/menu.svg">
			</label>
			<input id="_1" type="checkbox" name="mycheckbox" />
			<ul id="mainmenu">

				<li class="submenu">
					<a href="ConnectToDB.php" title="Store">View Database</a>
				</li>
				<li class="submenu">
					<a href="InsertData.php" title="Insert">Insert</a>
				</li>
				<li class="submenu" id="logoset">
					<a href="index.php">
						<img id="logo" src="images/lipstick-makeup.svg" /> <br />
						<img id="sneaker" src="images/lipstick_logo.png" />
					</a><br />

					<form name="DeleteData" action="DeleteData.php" method="POST">
						<p text-align: center;>Lipstick ID:</p>
						<input type="text" name=LipstickID" /><br>
						<br>
						<button type="submit" class="btn btn-primary">Delete</button>
					</form>
				</li>
				<li class="submenu">
					<a href="UpdateData.php" title="Update">Update</a>
				</li>
				<li class="submenu">
					<a href="DeleteData.php" title="Delete">Delete</a>
				</li>
			</ul>
			<br>

		</div>
	</div>

	<?php


	if (empty(getenv("DATABASE_URL"))) {
		echo '<p>The DB does not exist</p>';
		$pdo = new PDO('pgsql:host=localhost;port=5432;dbname=mydb', 'postgres', '123456');
	} else {

		$db = parse_url(getenv("DATABASE_URL"));
		$pdo = new PDO("pgsql:" . sprintf(
			"host=ec2-54-225-72-238.compute-1.amazonaws.com;port=5432;user=rxtdhfqtpxrhhs;password=6f6584dbda6217790c95fefe913f8c1697b8d1467b37b8c44a1ccfb62b66d7cf;dbname=d5dfoim75pqir4",
			$db["host"],
			$db["port"],
			$db["user"],
			$db["pass"],
			ltrim($db["path"], "/")
		));
	}

	$sql = "DELETE FROM lipstick WHERE lipstickid = '$_POST[LipstickID]'";
	$stmt = $pdo->prepare($sql);

	if (is_null($_POST[LipstickID]) == FALSE) {
		if ($stmt->execute() == TRUE) {
			echo "Record deleted successfully.";
		} else {
			echo "Error deleting record: ";
		}
	}

	 ?>
</body>

</html>