<?php
include 'db.php';

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn->query("INSERT INTO users(name,email,password) VALUES('$name','$email','$password')");
    echo "<script>alert('Registered Successfully');</script>";
}
?>

<link rel="stylesheet" href="css/style.css">

<div class="container">
    <h2>Register</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button name="register">Register</button>
    </form>
    <p><a href="index.php">Back to Login</a></p>
</div>