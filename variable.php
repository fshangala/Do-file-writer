<!DOCTYPE html>
<html>
	<head>
        <title>DOW</title>
        <link rel="shortcut icon" href="do-file.ico">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div>
			<form action="generate_variables.php" method="POST">
                <input type="text" name="file_name" value=<?php echo "'".$_GET["file"]."'"; ?> hidden>
                <input type="number" name="vnum" value=<?php echo "'".$_GET["vnum"]."'"; ?> readonly>
                <input type="text" name="comment" placeholder="Comment"><br>
                <input id="co" type="text" name="variable_name" placeholder="Name of variable" required autofocus><br>
                <span id="error"></span><br><progress id="c" value="0" max="32"></progress><!--<input type="button" value="Check" onclick="load()">-->
                <fieldset>
                    <legend>Apply label to the variable</legend>
                    <input type="text" name="label_name" placeholder="Label name"><br>
                    <ol>
                        <li><input type="text" name="one"><br></li>
                        <li><input type="text" name="two"><br></li>
                        <li><input type="text" name="three"><br></li>
                        <li><input type="text" name="four"><br></li>
                        <li><input type="text" name="five"><br></li>
                        <li><input type="text" name="six"><br></li>
                        <li><input type="text" name="seven"><br></li>
                        <li><input type="text" name="eight"><br></li>
                        <li><input type="text" name="nine"><br></li>
                        <li><input type="text" name="ten"><br></li>
                        <li><input type="text" name="eleven"><br></li>
                        <li><input type="text" name="telve"><br></li>
                        <li><input type="text" name="thirteen"><br></li>
                        <li><input type="text" name="fourteen"><br></li>
                        <li><input type="text" name="fifteen"><br></li>
                    </ol> 
                </fieldset><br>
				<input type="submit" value="Generate">
            </form>
            <a href="index.html">Done</a><br>
			<form action="entry.php?file=<?php echo $_GET["file"]; ?>&obs=1" method="post">
				<input id="ent" type="hidden" name="arr">
				<input type="submit" value="Enter data">
			</form>
		</div>
        <script>
        setInterval(load, 100);
        function load(){
        var num = document.getElementById("c");
        var leng = document.getElementById("co").value;
        num.value = leng.length;
        if(leng.length > 32){document.getElementById("error").innerHTML = "<span class='red'>Variable name too long</span>";
        } else {document.getElementById("error").innerHTML = "<span class='green'>Variable name is ok</span>";}
        }
	
	var ent = JSON.stringify(fundu.variables);
	document.getElementById("ent").innerHTML = ent;
        </script>
	</body>
</html>
