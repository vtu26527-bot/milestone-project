<?php
include 'db.php';

if(isset($_POST['create'])){
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $date = $_POST['date'];

    $conn->query("INSERT INTO events(title,description,event_date) VALUES('$title','$desc','$date')");
    echo "<script>alert('Event Created');</script>";
}
?>

<link rel="stylesheet" href="css/style.css">

<div class="container">
    <h2>Create Event</h2>
    <form method="POST">
        <input type="text" name="title" placeholder="Event Title" required>
        <textarea name="description" placeholder="Description"></textarea>
        <input type="date" name="date" required>
        <button name="create">Create</button>
    </form>
</div>