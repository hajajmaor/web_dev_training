<!-- 
    username = maorhj_practice1
    password = 12345
    database = maorhj_project	
 -->

 <?php

$server_name = "localhost";
$username = "maorhj_practice1";
$password = "12345";
$database = "maorhj_project";

$conn=new mysqli($server_name,$username,$password,$database);

if($conn->connect_error){
    die("connection error: ".$conn->connect_error);
}
echo "Connection successful<br>";


$sql="select id,name,age from users";

$result=$conn->query($sql);

echo "data before adding<br>";
//
if ($result->num_rows>0){
     echo    "
     <style>
     table{
        background-color:yellow;
        color:red;
        border:2px solid blue;
     }
     </style>
     <table><tr><th>ID</th> 		
     	<th>Name</th><th>Age</th></tr>";
      while($row=$result->fetch_assoc()){
              echo "<tr><td>".$row["id"]."</td><td>"	 	 	     	     .$row["name"]." </td><td>".$row["age"]."</td></tr>";
        }
         echo "</table>";
}
else
          echo "No data found<br>";
//
echo "data after adding<br>";


$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];

$sql="insert into users(id,name,age) values ('".$id."','".$name."',".$age.")";

if ($conn->query($sql)==FALSE){
    echo "Can not add new user.  Error is: ".
		$conn->error;
    exit();
}
echo "<br>New User was added<br>";


$sql="select id,name,age from users";

$result=$conn->query($sql);

echo "data before adding";
if ($result->num_rows>0){
     echo    "
     <style>
     table{
        background-color:yellow;
        color:red;
        border:2px solid blue;
     }
     </style>
     <table><tr><th>ID</th> 		
     	<th>Name</th><th>Age</th></tr>";
      while($row=$result->fetch_assoc()){
              echo "<tr><td>".$row["id"]."</td><td>"	 	 	     	     .$row["name"]." </td><td>".$row["age"]."</td></tr>";
        }
         echo "</table>";
}
else
          echo "No data found";

?>