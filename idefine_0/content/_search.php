<div id="content">

<h2>Search</h2>

<?php 

// Create connection
$con = mysqli_connect("engr-cpanel-mysql.engr.illinois.edu","cs411idefine_u00","u00000","cs411idefine_db");
// Check connection
if (mysqli_connect_errno($con))
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else 
{
	echo "Connected to database cs411idefine_db as cs411idefine_u00";
}

$query = "SELECT * FROM glossary";
$queryResult = mysqli_query($con,$query);

echo "<br><br><br>";
echo "<table class='queryResults'>";
echo "<tr>";
echo "<th class='queryResults'>".'user_name'."</th><th class='queryResults'>".'term_name'."</th><th class='queryResults'>".'term_def'."</th>";
echo "</tr>";
while($row = mysqli_fetch_array($queryResult))
{
  echo "<tr>";
  echo "<td class='queryResults'>".$row['user_name'].
   "</td><td class='queryResults'>".$row['term_name']."</td>
<td class='queryResults'>".$row['term_def']."</td>";
  echo "</tr>";
}
echo "</table>";
// Closing connection
mysqli_close($con);

?> 





</div>




