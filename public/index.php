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
                <li><a href="clients.php">Clients</a></a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About</a></li>
                <?php
                session_start(); // Start the session
                
                // Check if the user is logged in
                if (isset($_SESSION['user_id'])) {
                    // User is logged in, generate the "Log out" button
                    echo '<li><a class="btn" href="#" onclick="logoutSubmit()">Log out</a></li>';
                } else {
                    // User is not logged in, generate the "Log in" button
                    echo '<li><a class="btn" href="login.php">Log in</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
    <!-- Landing Page -->
    <div class="landing-container">
        <div class="left-column">
            <div class="left-column-image-1">
                <img src="../src/img/landing_img.png" alt="Image">
            </div>
            <div class="left-column-image-2">
                <img src="../src/img/landing_img1.png" alt="Image">
            </div>
        </div>
        <div class="vertical-line">
            <div class="main-content">
                <div class="right-column">
                    <h1>Empowering Client Success</h1>
                    <h2>through Seamless Management and Collaboration!</h2>
                    <p>Welcome to Techwiz, the ultimate platform for efficient client management and collaboration.
                        Whether you're a business owner, freelancer, or professional service provider, we have the tools
                        and features to streamline your client interactions, enhance communication, and drive success.
                        Our comprehensive platform offers centralized client information management, seamless
                        communication channels, and robust task and project management capabilities. Join our thriving
                        community of like-minded professionals and unlock the power of effective client management with
                        Techwiz.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="read-more">
        <a href="about.php">Read more...</a>
    </div>
    <script type="text/javascript" src="../src/js/authenticate.js"></script>
</body>

</html>