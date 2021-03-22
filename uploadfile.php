<?php
    session_start();
    $target="uploads/";
    $message = "<h3>ploading...</h3>";
    $check = "";
        if($target[strlen($target)-1]!='/')
        echo $message;
            $target=$target.'/';
            $count=0;
            $total = count($_FILES['file']['name']);
            foreach ($_FILES['file']['name'] as $filename) 
            {
                $temp=$target;
                $tmp=$_FILES['file']['tmp_name'][$count];
                $count=$count + 1;
                $check = "uploading $count of $total";
                $temp=$temp.basename($filename);
                move_uploaded_file($tmp,$temp);
                $temp='';
                $tmp='';
            }
            echo $check;
            if ($count == $total) {
                $message = "
                <h3 style='color:green'>Upload Complete</h3>
                <br>
                <a href='index.html'>Go Back</a>
                ";
            }
            
            echo $message;
            // header("location: index.html");
?>