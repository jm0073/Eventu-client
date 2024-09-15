<?php
if (!session_id()) {
    session_start();
}

include_once 'db.php';

if (isset($_POST['seats']) && isset($_SESSION['eventId'])) {
    $userId = $_SESSION['user'];
    $eventId = $_SESSION['eventId'];
    $no_of_tickets = $_POST['seats'];

    // Get the number of available seats
    $eventIdentity = $conn->query("select * from eventlist where eventId = $eventId;");
    $row = $eventIdentity->fetch_object();
    $availableSeats = $row->seats;

    // Check if there are enough available seats
    if ($availableSeats >= $no_of_tickets && $availableSeats > 0) {

        // Reduce the number of available seats
        $newSeatCount = $availableSeats - $no_of_tickets;

        // Update the available seats in the eventlist table
        $conn->query("update eventlist set seats = $newSeatCount where eventId = $eventId;");

        // Generate a unique ID for the booking
        $unique_id = rand(10000000, 99999999);
        while (true) {
            $check = $conn->query("select * from booked_tickets where UniqueId = $unique_id;");
            if ($check->num_rows == 0) {
                break;
            }
        }

        // Insert booking details into the booked_tickets table
        $event_name = $row->Name;
        $conn->query("insert into booked_tickets(event_name, UniqueId, no_of_tickets, userId) values ('$event_name', $unique_id, $no_of_tickets, $userId);");

        // Redirect to the success page
        header("Location: BookingSuccess.php");
    } else {
        // Redirect to an error page or show an error message
        header("Location: No.php");
    }
}
?>
