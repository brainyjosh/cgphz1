<?php 
	if (isset($_POST['comment'])) {
		$db = mysqli_connect("localhost", "brainy", "Office@2020", "gfmcph");
		session_start();
		$user_id = $_SESSION['user_id'];
		$comment = $_POST['comment'];
		$save = mysqli_query($db, "INSERT INTO comments (user_id, comment) VALUES ('$user_id', '$comment')");
		if ($save) {
			 $query = mysqli_query($db, "SELECT comments.user_id, comments.comment, users.name FROM comments JOIN users ON comments.user_id = users.id ORDER BY comments.id DESC");
			// $result =  mysqli_fetch_array($query);
			while ($user = mysqli_fetch_array($query)) {
				$name = $user['name'];
				$comment = $user['comment'];

				$result = "
					       <p class='comment'>
                <a href='#'>
                  $name
                  </a>
                  <br>
                  $comment
                </p>
				";

				echo $result;

			}
		}
		else{
			echo "no";
		}
	}
?>