

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
	</form>
</div>