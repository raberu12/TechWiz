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
                <li><a  href="index.php">Home</a></li>
                <li><a  href="clients.php">Clients</a></a></li>
                <li><a  href="contact.php">Contact</a></li>
                <li><a  class="current" href="about.php">About</a></li>
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
    <!-- About us -->
    <div class="about-container">
        <h1>About Us</h1>
        <p>Techwiz is an educational website sharing the latest information on advanced technology, like gadgets and software. 
            It's perfect for aspiring tech experts because it has a friendly community that exchanges ideas, answers questions, 
            and offers advice. Whether you're a beginner or an expert, Techwiz is the go-to resource for tech enthusiasts. 
            It provides a welcoming environment for anyone interested in technology.</p>
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
    <script type="text/javascript" src="../src/js/authenticate.js"></script> 
</body>
</html>