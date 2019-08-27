<?php
    $js_name = "data.js";
    $file_name = $_POST["file_name"].".do";
    $variable = $_POST["variable_name"];
    $txt1 = "generate ".$variable."=.\n";
    $do_file = fopen($file_name, "a") or die("<h1>Unable to write to file check php.ini file");
    if($_POST["comment"]!=""){
        fwrite($do_file, "//".$_POST["comment"]."\n");
    }
    fwrite($do_file, $txt1);
    fclose($do_file);
    if ($_POST["label_name"]!=""){
        $label_name=$_POST["label_name"];
        if($_POST["one"]!=""){
            $one = $_POST["one"];            
            $txt = "label define ".$label_name." 1 \"".$one."\"";
        }
        if($_POST["two"]!=""){
            $two = $_POST["two"];
            $txt .= " 2 \"".$two."\"";
        }
        if($_POST["three"]!=""){
            $three = $_POST["three"];
            $txt .= " 3 \"".$three."\"";
        }
        if($_POST["four"]!=""){
            $four = $_POST["four"];
            $txt .= " 4 \"".$four."\"";
        }
        if($_POST["five"]!=""){
            $five = $_POST["five"];
            $txt .= " 5 \"".$five."\"";
        }
        if($_POST["six"]!=""){
            $six = $_POST["six"];
            $txt .= " 6 \"".$six."\"";
        }
        if($_POST["seven"]!=""){
            $seven = $_POST["seven"];
            $txt .= " 7 \"".$seven."\"";
        }
        if($_POST["eight"]!=""){
            $eight = $_POST["eight"];
            $txt .= " 8 \"".$eight."\"";
        }
        if($_POST["nine"]!=""){
            $nine = $_POST["nine"];
            $txt .= " 9 \"".$nine."\"";
        }
        if($_POST["ten"]!=""){
            $ten = $_POST["ten"];
            $txt .= " 10 \"".$ten."\"";
        }
        if($_POST["eleven"]!=""){
            $eleven = $_POST["eleven"];
            $txt .= " 11 \"".$eleven."\"";
        }
        if($_POST["twelve"]!=""){
            $twelve = $_POST["twelve"];
            $txt .= " 12 \"".$twelve."\"";
        }
        if($_POST["thirteen"]!=""){
            $thirteen = $_POST["thirteen"];
            $txt .= " 13 \"".$thirteen."\"";
        }
        if($_POST["fourteen"]!=""){
            $fourteen = $_POST["fourteen"];
            $txt .= " 14 \"".$fourteen."\"";
        }
        if($_POST["fifteen"]!=""){
            $fifteen = $_POST["fifteen"];
            $txt .= " 15 \"".$fifteen."\"";
        }
        $do_file = fopen($file_name, "a");
        if($_POST["one"]!=""){
            $txt .="\n";
            fwrite($do_file, $txt);
        }
        $apply = "label values ".$variable." ".$label_name."\n";
        fwrite($do_file, $apply);
        fclose($do_file);
    }

    $i = $_POST["vnum"] - 1;
    $js_file = fopen($js_name, "a");
    $js = $_POST["file_name"].".variables[".$i."]='".$variable."';\n";
    fwrite($js_file, $js);
    fclose($js_file);
    $i += 2;
    header("Location:variable.php?file=".$_POST["file_name"]."&vnum=".$i);
?>