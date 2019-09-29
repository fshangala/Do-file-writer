<?php
if(file_exists($_POST["name"].".do")){
    echo "<h1>File already exists, ";
    echo "<a href='index.html'>Choose a different file name</a> ";
    echo "or <a href='variable.php?file=".$_POST["name"]."&vnum=1'>Write to this file</a>";
} else{
    $file_name = $_POST["name"].".do";
    $do_file = fopen($file_name, "a");
    $txt = "//created by DOW (Do-File writer) Funduluka Shangala https://dow.cleverapps.io\n\n";
    fwrite($do_file, $txt);
    fclose($do_file);
    
    $js_name = "data.js";
    $js_file = fopen($js_name, "a");
    $js = "var ".$_POST["name"]."={\n variables:['empty']\n}\n";
    fwrite($js_file, $js);
    fclose($js_file);
   
    header("Location:variable.php?file=".$_POST["name"]."&vnum=1");
}
?>
