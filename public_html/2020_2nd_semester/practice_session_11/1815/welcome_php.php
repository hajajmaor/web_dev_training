<html>

<head>

</head>

<body>
    <?php
    $server_name = "localhost";
    $user_name = "maorhj_user";
    $password = "12345";
    $database = "maorhj_practice";

    $conn = new mysqli($server_name, $user_name, $password, $database);
    if ($conn->connect_error) {
        die("Error connecting: " . $conn->connect_error);
    }
    echo "Connected";
    $sql = "select id,name,age from users";
    $result = $conn->query($sql);
    echo "<h2>table before change</h2>";
    if ($result->num_rows > 0) {
        echo    "
        <style>
        table {
            background-color: yellow;
            color: red;
            /* border: 2px solid blue; */
            border-color: blue;
            border-width: 2px;
            border-style: solid;
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

    $age = $_POST['age'];
    $name = $_POST['name'];
    $id = $_POST['id'];

    $insert_sql = "INSERT INTO users (id,name,age) VALUES ('" . $id . "','" . $name . "','" . $age . "')";
    // echo $insert_sql;
    $result = $conn->query($insert_sql);

    if ($result == true) {
        echo "<h2>table after change</h2>";
        $sql = "select id,name,age from users";
        $result = $conn->query($sql);
        echo    "
            <style>
            table {
                background-color: yellow;
                color: red;
                /* border: 2px solid blue; */
                border-color: blue;
                border-width: 2px;
                border-style: solid;
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
        echo "error: " . $conn->error;
    }

    /* 

INSERT INTO `users` (`counter`, `id`, `name`, `age`) 
VALUES 
(NULL, '123456789', 'Maor Hajaj', '27'), 
(NULL, '987321654', 'Ilan rozenfeld', '40')

*/

    ?>

</body>

</html>