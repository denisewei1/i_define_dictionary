<?php require_once("includes/session.php"); ?>
<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/validation_functions.php"); ?>


<?php
	$username = "";

	if (isset($_POST['submit'])) {
		// Process the form

		// validations
		$required_fields = array("username", "password");
		validate_presences($required_fields);

		if (empty($errors)) {
			
			// Attempt Login
			$username = $_POST["username"];
			$password = $_POST["password"];

			$found_user = attempt_login($username, $password);
			
			if ($found_user) {
				// Success
				// Mark user as logged in
				$_SESSION["username"] = $found_user["username"];
				redirect_to("manage_dictionaries.php");
			} else {
				// Failure
				$_SESSION["message"] = "Username/password not found.";
			}

		}
	} else {

	} // end: if (isset($_POST['submit']))

?>

<?php require_once("header.php"); ?>
<?php require_once("menu.php"); ?>

<div id="content">
	<br />
	
    <?php echo message(); ?>
    <?php echo form_errors($errors); ?>
	
    <br />
	<h2>Login</h2>
	<br/>
	<form action="login.php" method="post">
		<p>Username:
			<input type="text" name="username" value="" />
		</p>
		<p>Password:
			<input type="password" name="password" value="" />
		</p>
		<input type="submit" name="submit" value="Submit" />
		<br />
	    <a href="create_user.php">Create new user</a>
	</form>
</div>

<?php require_once("footer.php"); ?>
