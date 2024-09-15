<?php
if (!session_id()) {
    session_start();
}
include 'db.php';
include 'seatReduce.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
       
        a{
            background-color: darkblue;
        }
        body {
            background-image: url(images/f2.jpg);
            background-color: black; /* Set background color to black */
            color: #fff; /* Set text color to white */
            font-family: 'Arial', sans-serif; /* Change the font if needed */
        }

        .container {
            background-color: black;
            text-align: center;
            padding: 100px;
        }

        h1 {
            color: white; /* Change heading color to a shade of blue */
            font-size: 36px;
            margin-bottom: 20px;
        }

        .pass-image {
            margin-top: 50%;

            max-width: 100%;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>
    <section class="a">
  
    <div class="container">
        <h1 id="booked">CONGRATS! ROCK AND ROLL!</h1>
        <img class="pass-image" src="t.jpg" alt="Pass Image">
        <br>
    </div>
    </section>
</body>
</html>
