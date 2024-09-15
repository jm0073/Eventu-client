<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Page</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <form action="download.php" method="post">
            <label for="num_tickets">Number of Tickets:</label>
            <input type="number" id="num_tickets" name="num_tickets" required>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
