<html>

<head>

</head>

<body>



    <?php
    $host = "localhost";
    $user = "maorhj_user";
    $pass = "12345";
    $db = "maorhj_practice";


    //create connection
    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connection successful";

    $sql = "select id,name,age from users";
    $result = $conn->query($sql);
    //"sdasdas"."sadsadsa"
    if ($result->num_rows > 0) {
        echo "
        <style>
            table {
                background-color: yellow;
                color: red;
                border-width: 2px;
                border-style: solid;
                border-color: blue;
                /* border: 2px solid blue; */
            }
        </style>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
            </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . " </td>
                <td>" . $row["age"] . "</td>
            </tr>";
        }
        echo "</table>";
    } else
        echo "No data found";

    $age = $_POST["age"];
    $id = $_POST["id"];
    $name = $_POST["name"];

    $insert_sql = "INSERT INTO users (id,name,age) VALUES(
        '" . $id . "',
        '" . $name . "',
        '" . $age . "'
        )";
    $result = $conn->query($insert_sql);

    if ($result == true) {
        $sql = "select id,name,age from users";
        $result = $conn->query($sql);
        //"sdasdas"."sadsadsa"

        echo "
            <style>
                table {
                    background-color: yellow;
                    color: red;
                    border-width: 2px;
                    border-style: solid;
                    border-color: blue;
                    /* border: 2px solid blue; */
                }
            </style>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "
                <tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["name"] . " </td>
                    <td>" . $row["age"] . "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "Error inserting" . $conn->error;
    }


    // INSERT INTO `users` (`counter`, `id`, `name`, `age`) VALUES (NULL, '123456', 'Maor Hajaj', '27')

    ?>

    <!-- 
    <table>
        <tr>
            <th>header</th>
        </tr>
        <tr>
            <td>data</td>
        </tr>
    </table> -->

</body>

</html>