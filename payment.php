<?php
if (!session_id()) {
    session_start();
}
include 'db.php'; // Include your database connection file

// Check if the user is logged in and has selected tickets
if (empty($_SESSION['user']) || empty($_POST['eventId']) || empty($_POST['no_of_tickets'])) {
    header("Location: index.php"); // Redirect to the login page or the appropriate page
}

// In a real payment gateway, you would perform payment processing here, but for this example, we'll simulate success.
$paymentSuccess = true; // Simulate a successful payment

if ($paymentSuccess) {
    // Payment successful - generate an invoice and confirm the booking
    $eventId = $_POST['eventId'];
    $no_of_tickets = $_POST['no_of_tickets'];

    // Create an invoice and save it to your database if needed

    // Update the booking status in your database
    $userId = $_SESSION['user'];
    $eventIdentity = $conn->query("select * from eventlist where eventId = $eventId;");
    $row = $eventIdentity->fetch_object();
    $eventName = $row->Name;

    // Generate a "pass" (ticket) and provide it to the user (you can customize the format)
    $ticket = "Event: $eventName<br>Tickets: $no_of_tickets<br>Confirmation Code: " . uniqid();

    // You can store the generated ticket in the database for reference

    // Redirect to the success page with the ticket
    header("Location: BookingSuccess.php?ticket=" . urlencode($ticket));
} else {
    // Payment failed, handle errors or redirect to a failure page
    echo "Payment failed. Please try again.";
}
?>
