<?php
const pageTitle = "";
require "./php-includes/header.inc.php";
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}

// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
$DATABASE_HOST = '136.244.76.202';
$DATABASE_USER = 'login';
$DATABASE_PASS = 'AphexTwin0808';
$DATABASE_NAME = 'phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>

<body class="loggedin">
	<nav class="navtop">
		<div>
			<h1>Website Title</h1>
			<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
			<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
		</div>
	</nav>
	<div class="content">
		<h2>Profile Page</h2>
		<div>
			<p>Your account details are below:</p>
			<table>
				<tr>
					<td>Username:</td>
					<td><?= $_SESSION['name'] ?></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><?= $password ?></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><?= $email ?></td>
				</tr>
			</table>
		</div>
	</div>
</body>

<?php
require "./php-includes/footer.inc.php";
?>