<?php
//fetch.php
session_start();
include'../config.php';

$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($link, $_POST["query"]);
 $query = "
  SELECT * FROM users
  WHERE username LIKE '%".$search."%' ORDER BY score DESC
 ";
}
else
{
 $query = "
 ";
}
$result = mysqli_query($link, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>username</th>
     <th>score</th>
    </tr>
 ';
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
 echo 'Please enter a username (or no matching username found)';
}

?>
