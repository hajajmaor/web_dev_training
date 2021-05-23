<?php
$server_name = "localhost";
$username = "maorhj_user";
$password = "12345";
$database = "maorhj_practice";

$conn = new mysqli($server_name, $username, $password, $database);

if ($conn->connect_error) {
  die("connection error: " . $conn->connect_error);
}
echo "Before adding";
$sql = "select id,name,age from users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo  "<table><tr><th>ID</th> 				 	<th>Name</th><th>Age</th></tr>";
  while ($row = $result->fetch_assoc()) {
    echo "<tr>
                <td>"
      . $row["id"] . "</td>
                <td>"                  . $row["name"] . " </td>
                <td>" . $row["age"] . "</td>
              </tr>";
  }
  echo "</table>";
} else
  echo "No data found";

// add new row
$id = $_POST['id'];
$name = $_POST['fullName'];
$age = $_POST['age'];

$sql2 = "INSERT INTO `users` ( `id`, `name`, `age`) VALUES (" . $id . ", '" . $name . "'," . $age . ")";

// $conn->query($sql2);
if ($conn->query($sql2) == FALSE) {
  echo "Can not add new user.  Error is: " .
    $conn->error;
  exit();
}
echo "<h2>New User was added</h2>";

echo "after adding";
$sql = "select id,name,age from users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo  "<table><tr><th>ID</th> 				 	<th>Name</th><th>Age</th></tr>";
  while ($row = $result->fetch_assoc()) {
    echo "<tr>
                <td>"
      . $row["id"] . "</td>
                <td>"                  . $row["name"] . " </td>
                <td>" . $row["age"] . "</td>
              </tr>";
  }
  echo "</table>";
} else
  echo "No data found";
