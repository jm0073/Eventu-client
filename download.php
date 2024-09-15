<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the number of tickets is selected
    if (!empty($_POST['num_tickets']) && is_numeric($_POST['num_tickets']) && $_POST['num_tickets'] > 0) {
        // Process the form submission (generate the pass, etc.)
        // In this example, just set a session variable for demonstration purposes
        $_SESSION['ticket_info'] = [
            'num_tickets' => $_POST['num_tickets'],
            // Add other relevant ticket information
        ];

        // Redirect to bookingsuccess.php or perform other actions
        header("Location: bookingsuccess.php");
        exit();
    } else {
        // Display an error message
        $_SESSION['error_message'] = "Invalid request. Please select the number of tickets.";
        header("Location: booking.php");  // Redirect to the booking page
        exit();
    }
}
?>
