<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/home.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Home</title>
</head>

<body>
<div class="main_nav">
        <div class="title">
            <h1>TechWiz</h1><img src="../src/img/techwizlg.png">
        </div>
        <div>
            <ul class="nav_links">
                <li><a class="current" href="index.php">Home</a></li>
                <?php
                session_start(); // Start the session
                
                // Check if the user is logged in
                if (isset($_SESSION['user_id'])) {
                    // User is logged in, display the "Log out" button
                    echo '<li><a href="clients.php">Service</a></li>'; // Include the "Service" option for logged-in users
                } else {
                    // User is not logged in, display the "Log in" button and add onclick attribute to open the popup
                    echo '<li><a href="#" onclick="openPopup()">Service</a></li>'; // Include the "Service" option with the popup
                }
                ?>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About</a></li>
                <?php
                // Check if the user is logged in
                if (isset($_SESSION['user_id'])) {
                    // User is logged in, display the "Log out" button
                    echo '<li><a class="btn" href="#" onclick="logoutSubmit()">Log out</a></li>';
                } else {
                    // User is not logged in, display the "Log in" button and add onclick attribute to open the popup
                    echo '<li><a class="btn" href="login.php">Log in</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
    <!-- Landing Page -->
    <div class="landing-container">
        <div class="left-column">
                <h1>Empowering Client Success</h1>
                <h2>Better Solutions for your business!</h2>
                <p></p>
        </div>
        <div class="right-column">
            <div class="right-column-image-1">
                <img src="../src/img/landing_img.png" alt="Image">
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-text">
            &copy;  TechWiz All Rights Reserved
    </footer>
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <h2>Login Required</h2>
            <p>Please log in to access the services.</p>
            <a class="popup-btn" href="login.php">Log In</a>
        </div>
    </div>
    <script type="text/javascript" src="../src/js/authenticate.js"></script>
</body>

</html>