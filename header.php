<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css"> <!-- Add your custom CSS styles here -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <style>
    /* Add this CSS to your style.css file */
header{
    background-color: black;
}
   
    body {
        /* background-image: url('images/f2.jpg'); Set your background image here */
        background-size: cover;
        background-position: center;
        color: white;
        font-family: Arial, sans-serif;
        margin: 0;
    }

    .container {
        margin-top: 20px;
        background-color: rgba(0, 0, 0, 0.7);
        padding: 20px;
        border-radius: 10px;
    }

    h3 {
        text-align: center;
        padding: 20px 0;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 100px;
        width: 100%;
        margin: 0;
    }

    nav ul {
        list-style: none;
        padding: 0;
        display: flex;
        margin-left: -15px; /* Adjusted margin to move items to the left */
    }

    nav ul li {
        margin: 0 23px;
    }

    nav ul li a {
        text-decoration: none;
        color: white;
        font-weight: 600;
    }

    nav ul li a:hover {
        color: rgb(111, 111, 173);
        font-size: 1.04rem;
    }

    .navbar-toggler-icon {
        background-color: #000;
    }

    .navbar-brand {
        font-family: 'Open Sans', sans-serif;
        font-size: 36px;
        color: white;
        text-shadow: 2px 2px 4px #000;
        transition: color 0.3s;
    }

    .navbar-brand:hover {
        color: #ff6600;
        animation: glow 1s infinite alternate;
    }

    @keyframes glow {
        0% {
            text-shadow: 2px 2px 4px #000;
        }
        100% {
            text-shadow: 2px 2px 8px #ff6600;
        }
    }

    .dropdown-menu {
        background: #2a5298;
    }

    /* Updated style to make username white */
    .navbar-text {
        color: white !important;
    }
</style>

</head>
<body>

<header class="header_section header-background">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
            <a class="navbar-brand" href="index.php">
                <span>
                    Eventu
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="customerPage.php">Events <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php"> My Orders </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.thapar.edu/students/pages/student-societies"> Societies </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://myherupa.com/pages/societies.html"> More </a>
                        </li>
                        
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <li style="margin-left: auto;"> <!-- Add this line to align to the right -->
                            <button id="login_btn" style="display: inline; margin-right: 10px; width:90px;" type="button"
                                    class="btn btn-info btn-round" onclick="openLoginModal();">
                                Login
                            </button>

                            <button id="logout_btn" style="display:inline; width:90px;" type="button" class="btn btn-info btn-round"
                                    onclick="window.location.href='logout.php';">
                                Logout
                            </button>
                        </li>
                        <?php
                        if (!empty($_SESSION['user'])) {
                            $userId = $_SESSION['user'];
                            $res = $conn->query("select * from user where userId='$userId';");
                            $row = $res->fetch_object();
                            echo "<li class='navbar-text' id='username'>" . strtoupper($row->userName) . "</li>";
                            echo "<script type='text/javascript'> chg_to_logout(); </script>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
</body>
</html>
