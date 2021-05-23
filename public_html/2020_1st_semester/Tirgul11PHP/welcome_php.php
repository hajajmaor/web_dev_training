<html>

<body>

     <?php
     $servername = "localhost";
     $username = "zoharfi_user";
     $password = "1q2w3e4R";
     $dbname = "zoharfi_targil11";

     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
     // Check connection
     if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
     }

     $sql = "SELECT id, name, age FROM users";
     $result = $conn->query($sql);

     if ($result->num_rows > 0) {
          echo "<style>table{  text-align:center; background-color:yellow; border: 2px blue solid;} tr{ color: red; border: 2px blue solid;} td{ color: red; border: 2px blue solid;}</style><table><tr><th>ID</th><th>Name</th><th>Age</th>";
          // output data of each row
          while ($row = $result->fetch_assoc()) {
               echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["age"] . "</td></tr>";
          }
          echo "</table>";
     } else {
          echo "0 results";
     }

     $iid = $_POST["iid"];
     $name = $_POST["name"];
     $age = $_POST["age"];

     $sql2 = "INSERT INTO users (id, name, age) VALUES ('" . $iid . "','" . $name . "','" . $age . "');";
     $sql3 = "INSERT INTO users (id, name, age) VALUES ('2299', 'Miko Levinsky', 32);";
     $conn->query($sql2);
     $conn->query($sql3);
     $result = $conn->query($sql);

     if ($result->num_rows > 0) {
          echo "<style>table{  text-align:center; background-color:yellow; border: 2px blue solid;} tr{ color: red; border: 2px blue solid;} td{ color: red; border: 2px blue solid;}</style><table><tr><th>ID</th><th>Name</th><th>Age</th>";
          // output data of each row
          while ($row = $result->fetch_assoc()) {
               echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td> " . $row["age"] . "</td></tr>";
          }
          echo "</table>";
     } else {
          echo "0 results";
     }
     $conn->close();
     ?>


     <br>
</body>

</html>