<!DOCTYPE html>
<html>
	<head>
		<title>DOW</title>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="do-file.ico">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<img src="do-file.png">
		<div>
			<form action="create.php" method="POST">
				<fieldset>
					<legend>Create or write to an existing do-file</legend>
				<input type="text" name="name" placeholder="Name of do-file" required>
				<input type="submit" value="Proceed">
				</fieldset>
			</form>
			<form action="download.php" method="POST">
				<fieldset>
					<legend>Download your do-file</legend>
				<input type="text" name="file_name"  placeholder="Name of do-file to download" required>
				<input type="submit" value="Download file">
				</fieldset>
            </form>
            <?php
            echo "<ol>";
			foreach (glob("*.do") as $filename) { 
			echo "<li>".$filename."</li>";
            }
            echo "</ol>"
            ?>
		</div>
	</body>
</html>
