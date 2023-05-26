<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/home.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>TechWiz - about page</title>
</head>

<body>
    <div class="main_nav">
        <div class="title">
            <h1>TechWiz</h1><img src="../src/img/techwizlg.png">
        </div>
        <div>
            <ul class="nav_links">
                <li><a href="index.php">Home</a></li>
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
                <li><a class="current" href="about.php">About</a></li>
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
    <!-- About us -->
    <div class="about-container">
        <h1>About Us</h1>
        <p>Techwiz is a comprehensive service platform that simplifies client management for businesses and
            professionals. It offers a centralized hub for organizing client information, tracking interactions, and
            fostering seamless communication. With task and project management capabilities, clients' needs and
            deadlines can be efficiently addressed. Techwiz also provides a collaborative community where clients can
            connect, share ideas, and seek advice, creating a supportive environment for all. Experience streamlined
            client management and enhanced communication with Techwiz.</p>
    </div>
    <div class="info">
        <div id="container">
            <img src="../src/img/jedd.jpg">
            <div id="text">
                <h1>Jedd Christian Juab</h1>
                <br>
                <h2>Front-end Developer</h2>
            </div>
        </div>
        <br>
        <div id="container">
            <img src="../src/img/patrick.jpg">
            <div id="text">
                <h1>Patrick Joshua Liza</h1>
                <br>
                <h2>Lead Developer</h2>
            </div>
        </div>
        <br>
        <div id="container">
            <img src="../src/img/matt.jpg">
            <div id="text">
                <h1>Matt Vincent Magdadaro</h1>
                <br>
                <h2>Back-end Developer</h2>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-text">
            &copy; TechWiz All Rights Reserved
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