<?php include "db_con.php";
echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
echo "<link  rel=stylesheet href=users.css>";
echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">";

echo "<div  class=nav display=block>
<a class=pic href=\"https://gripprojectsstk.000webhostapp.com/\"><i class=\"glyphicon glyphicon-home\" style=\"font-size:50px\"></i><d>HOME</d></a>
<a class=pic href=\"users.php\"><i class=\"glyphicon glyphicon-user\" style=\"font-size:50px\"></i><d>USERS</d></a>
<a class=pic href=\"history.php\"><i class=\"glyphicon glyphicon-file\" style=\"font-size:50px\"></i><d>HISTORY</d></a>
</div>";
echo "<p style='margin:auto'>HISTORY</p>";
$sql = "SELECT * FROM HISTORY ORDER BY 'TIMEANDDATE' DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table>";
  echo "<tr>";
  echo "<th>TRANSFEREDFROM</th>";
  echo "<th>TRANSFEREDTO</th>";
  echo "<th>AMOUNT</th>";
  echo "<th>TIME AND DATE</th>";
   echo "</tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo '<td>' .$row["TRANSFEREDFROM"] ."</td>";
    echo '<td>' .$row["TRANSFEREDTO"] ."</td>";
    echo '<td>' .$row["AMOUNT"] ."</td>";
    echo '<td>' .$row["TIMEANDDATE"] ."</td>";
    echo "</tr>";
  }
  
  echo "</table>"; 
} else {
  echo "0 results";
}
$conn->close();
?>