<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Students</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'gtu_lms';

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
  die("შეცდომა მონაცემთა ბაზასთან კავშირისას: " . $connection->connect_error);
}


$sql = "SELECT FirstName, LastName, PersonalNumber FROM students";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo $row["FirstName"]. " " . $row["LastName"]." - ". $row["PersonalNumber"] . "<br>";
  }
} else {
  echo "0 results";
}

$connection->close();

?>
</body>
</html>