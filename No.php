<?php
if (!session_id()) {
    session_start();
}

include_once 'db.php';

// Check if seats are available
if (isset($_SESSION['eventId'])) {
    $eventId = $_SESSION['eventId'];

    $event = $conn->query("SELECT * FROM eventlist WHERE eventId = $eventId;");
    $eventRow = $event->fetch_object();

    if ($eventRow->seats <= 0) {
        // No seats available, redirect to error page
        header("Location: Error.php");
        exit();
    }
} else {
    // Event ID not set, redirect to home or another page
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Error</title>
    <!-- Add your styles or use an external stylesheet -->
    <style>
        body {
            background-color: #f8d7da;
            color: #721c24;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #721c24;
        }
    </style>
</head>
<body>
    <h1>Oops! No seats available. Please try again later.</h1>
    <!-- Add more content or links if needed -->
</body>
</html>
