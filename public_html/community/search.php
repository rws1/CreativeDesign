<?php
// Initialize the session
session_start();

require '../config.php';

$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "SELECT * FROM users
	WHERE username LIKE '%".$search."%'";
}
else
{
	$query = "SELECT * FROM users ORDER BY score";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Username</th>
							<th>Score</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["username"].'</td>
				<td>'.$row["score"].'</td>

			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>
