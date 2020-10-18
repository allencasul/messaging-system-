			<?php
			include "database.php";
			$dbCon = database();

				$sql = "SELECT * FROM ajax_container";
				$query = mysqli_query($dbCon, $sql) or die ($dbCon->error);

				if ($query->num_rows > 0)
				{
					while ($row = $query->fetch_assoc())
					{
						echo "<div class='arrange'>" . "<p class='main-text'>" . $row['message'] . "</p>" . "<p class='date'>" . $row['date'] . "</p>" . "</div>";
					}
				}
				else{
					echo "No Messages!";
				}
			?>
