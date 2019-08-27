<!DOCTYPE html>
<html>
	<head>
        <title>DOW</title>
        <link rel="shortcut icon" href="do-file.ico">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="data.js"></script>
	</head>
	<body>
		<div id="main">
            <form id="content" action="entries.php" method="POST">
                File <input type="text" name="file_name" value="<?php echo $_GET["file"]; ?>" readonly><br>
                Observations <input type="number" name="obs" value="<?php echo $_GET["obs"]; ?>"><br>
            </form>
        </div>
       <script>
        var content = document.getElementById("content");
        var i = 0;
        var arr = <?php echo $_GET["file"]; ?>;
               
        for (var i = 1; i < fundu.variables.length; i++) {
            var br = document.createElement("br");
            var span = document.createElement("span");
            var spanin = document.createTextNode(arr.variables[i]);
            span.appendChild(spanin);
            content.appendChild(span);
            var input = document.createElement("input");
            input.setAttribute("type","text");
            input.setAttribute("name",arr.variables[i]);
            content.appendChild(input);
            content.appendChild(br);
        }
        var submit = document.createElement("input");
        submit.setAttribute("type", "submit");
        submit.setAttribute("value", "Submit");
        content.appendChild(submit);
        </script>
	</body>
</html>