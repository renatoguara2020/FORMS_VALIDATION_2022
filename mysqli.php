<?php
$mysqli = new mysqli("localhost","root","","exemplos1");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT  * FROM pessoa";
$result = $mysqli -> query($sql);

// Numeric array
$row = $result -> fetch_array(MYSQLI_NUM);
printf ("%s (%s)\n", $row[0], $row[1]);

// Associative array
while($row = $result -> fetch_array(MYSQLI_ASSOC)){

printf ($row['id']."--" .$row["email"] ."<br>", $row["nome"]. "<br>");
    
}

// Free result set
$result -> free_result();

$mysqli -> close();
?>
?>