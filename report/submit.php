<?php 
    if (isset($_POST['name'])) {
        $db = mysqli_connect("localhost", "brainy", "Office@2020", "gfmcph");
        $name = $_POST['name'];
        $persons = $_POST['persons'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $testimony = $_POST['testimony'];
        
        echo $_POST;

        $save = mysqli_query($db, "INSERT INTO reports (name, persons, phone, email, testimony) VALUES ('$name', '$persons', '$phone', '$email', '$testimony')");
        if ($save) {
            if ($email != '') {
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $message = "
                    <h1>Hi $name </H1> <br> <p>Thanks for your feed back, we will keep in touch with you, please remember to take pictures of your watch party. <br> God Bless you.</p>
                ";
                $subject = "GFMC REPORT CENTER";
				// More headers
				$headers .= 'From: <info@gfmcph.com>' . "\r\n";
				// $headers .= 'Cc: cha@example.com' . "\r\n";
				mail($email, $subject, $message, $headers);
			}
        }
    }
?>