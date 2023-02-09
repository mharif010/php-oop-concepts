<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajax_crud_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";





// $connect = mysqli_connect("localhost", "root", "", "ajax_crud_db");

// $name = $_POST['name'];
// $email = $_POST['email'];
// $pass = $_POST['pass'];

// $insert = "INSERT INTO user (name, email, pass)VALUES($name, $email, $pass)";

// $query = mysqli_query($connect, $insert);
// if($query){
//     echo "data insert successfully";
// }else{
//     echo "data insert failed";
// }