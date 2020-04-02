<?php 
 
require_once 'db_connect.php';

if($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];
 
    $sql = "INSERT INTO users (name, email, login, password) VALUES ('$name', '$email', '$login', '$password')";
    if($connect->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>";
        echo "<a href='../create.php'><button type='button' class='btn btn-info'>Back</button></a>";
        echo "<a href='../index.php'><button type='button' class='btn btn-success'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
}
 
?>