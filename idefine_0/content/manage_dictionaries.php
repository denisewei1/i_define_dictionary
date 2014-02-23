
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php require_once("header.php"); ?>
<?php require_once("menu.php"); ?>
<?php $dictionary_set = find_dictionaries_by_user(); ?>


<div id="content">

	<h2><?php echo "{$_SESSION['username']}" . " Dictionaries: "?></h2>
	<?php 
		while($dictionary = mysqli_fetch_assoc($dictionary_set)) {
			echo "<li>";
			$safe_page_id = urlencode($dictionary["id"]);
			echo "<a href=\"manage_content.php?page={$safe_page_id}\">";
			echo htmlentities($dictionary["menu_name"]);
			echo "</a>";
			echo "</li>";
		}
	?>


</div>

<?php require_once("footer.php"); ?>
