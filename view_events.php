<?php
include 'db.php';
$result = $conn->query("SELECT * FROM events");
?>

<link rel="stylesheet" href="css/style.css">

<div class="dashboard">
    <h2>All Events</h2>

    <?php while($row = $result->fetch_assoc()){ ?>
        <div class="card">
            <h3><?php echo $row['title']; ?></h3>
            <p><?php echo $row['description']; ?></p>
            <small><?php echo $row['event_date']; ?></small>
        </div>
    <?php } ?>
</div>