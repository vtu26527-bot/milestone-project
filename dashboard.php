<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: index.php");
}
?>

<link rel="stylesheet" href="css/style.css">

<div class="dashboard">
    <h2>Welcome to Dashboard</h2>

    <div class="card">
        <a href="create_event.php">➕ Create Event</a>
    </div>

    <div class="card">
        <a href="view_events.php">📅 View Events</a>
    </div>

    <div class="card">
        <a href="logout.php">🚪 Logout</a>
    </div>
</div>