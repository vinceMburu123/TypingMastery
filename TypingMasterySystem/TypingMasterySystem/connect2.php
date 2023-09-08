<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

if (!empty($username))
if (!empty($password))


$host = "localhost";
$user = "root";
$password = "";
$db = "typingdb";
// Create connection
$conn = new mysqli ($host, $username, $password,$db);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO users (username, password,)
values ('$username','$password')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
     echo '<a href="register.php">
      <input type="submit"/>
  </a>';
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}

else{
echo "Password should not be empty";
die();

}

else{
echo "username should not be empty";
die();
}

?>