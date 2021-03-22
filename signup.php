<?php
	session_start();
	if (isset($_POST['name'])) {
		$db = mysqli_connect("localhost", "brainy", "Office@2020", "gfmcph");
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$member = $_POST['member'];
		$church = $_POST['church'];
		$group = $_POST['group'];
		$subject = "GOOD FRIDAY MIRACLE CRUSADE";
		$message = '
			<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700|Lato:300,400,700" rel="stylesheet">
</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #222222;">
	<center style="width: 100%; background-color: #f1f1f1;">
    <div style="max-width: 600px; margin: 0 auto;" class="email-container">
    <div class="overlay"></div>
      <img src="http://gfmcph.com/images/gfmce.jpg" width="100%">
      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
	      <tr>
          <td valign="middle" class="hero bg_white" style="background-image: url(http://gfmcph.com/images/gfmc.jpg); background-size: cover;>
          	
          </td>
	      </tr>
	      <div class="text" style="padding: 0 4em; text-align: center;">
            				<h1 class="logo"><a href="#">'.$name.' Your Registration was Successful</a></h1>
            				
            			</div>
            			<br>
            			<br>
                <td class="text-blog" style="text-align: left; padding: 2em 2.5em">
                 	<p style="margin: 5px">
                 	GOOD FRIDAY MIRACLE CRUSADE would be a refreshing time in God'.'s Presense.'.' 
                 	<br>
                 	<br>
                 	The Power of God'.'s Word to heal, save and deliver would be present. The blind will see, the deaf will hear, the lame will walk !
                 
                 	Lives would be changed and destinies altered forever !
                 	<br>
                 	<br>
                 	Get ready to experience a superlative move of God'.'s Spirit.'.'
                 	as you position your self to connect with our Man of God on your Internet device.
                 	<br>
                 	<br>
                 
                 		<br>
                 	<br>
                 	Kindly Note that you will keep receiving updates regarding Good friday micracle crusade.
		    <br>
		    	    <br>
		    Best Regards.
				</p>
                 <a href="http://gfmcph.com/watch.php" class="btn btn-primary" style="padding:15px 30px; background-color:red; color:white; border-radius:16px">Watch Now</a>
                </td>
              </tr>
        		</table>
        	</td>
        </tr>
      </table>
      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
        <tr>
        	<td valign="middle" class="bg_black footer email-section">
        		<table>
            	<tr>
                <td valign="top" width="33.333%">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style="text-align: left; color:white;">
                      	<p>GFMC &copy; 2020. All Rights Reserved</p>
                      </td>
                    </tr>
                  </table>
                </td>
                <td valign="top" width="33.333%">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style="text-align: right; padding-left: 5px; padding-right: 5px;">
                      	<p><a href="#" style="color: rgba(255,255,255,.4);"></a></p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
        	</td>
        </tr>
      </table>

    </div>
  </center>
</body>
</html>
		';
		// $query = 'INSERT INTO users (name, phone, email, member, church, c_group) VALUES ("$name", "$phone", "$email", "$member", "$church", "$group")';
		$save = mysqli_query($db, "INSERT INTO users (name, phone, email, member, church, c_group) VALUES ('$name', '$phone', '$email', '$member', '$church', '$group')");
		if ($save) {
		
			$query = mysqli_query($db, "SELECT * FROM users WHERE email = '$email'");
			// $result =  mysqli_fetch_array($query);
			$user_id = "";
			while ($user = mysqli_fetch_array($query)) {
				$user_id = $user['id'];
			}
			

			$_SESSION['logged_in'] = true;
			$_SESSION['user_id'] = $user_id;
			echo "yes";
			if ($email != '') {
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

				// More headers
				$headers .= 'From: <admin@gfmcph.com>' . "\r\n";
				// $headers .= 'Cc: cha@example.com' . "\r\n";
				mail($email, $subject, $message, $headers);
			}
			else{
				exit();
			}
		}
		else{
			echo "no";
		}
	}
?>