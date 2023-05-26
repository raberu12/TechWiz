<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/home.css">
    <title>TechWiz - contact</title>
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
                <li><a class="current"  href="contact.php">Contact</a></li>
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
    <!-- contact page -->
    <div class="contact-container">
        <h1>Get In Touch With Us</h1>
        <div class="contact-box">
            <div class="contact-left">
                <div class="contact-info">
                    <ion-icon name="home-outline"></ion-icon>
                    <div class="location">
                        <h2><strong>Our Location</strong></h2>
                        <p>21 Jump Street, Cebu City, Philippines</p>
                    </div>
                </div>
                <div class="contact-info">
                    <ion-icon name="call-outline"></ion-icon>
                    <div class="phone-number">
                        <h2><strong>Phone Number</strong></h2>
                        <p>(+63) 9558741597</p>
                    </div>
                </div>    
                <div class="contact-info">
                    <ion-icon name="mail-outline"></ion-icon>
                    <div class="email">
                        <h2><strong>Email Address</strong></h2>
                        <p>Techwiz@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contact-right">
                <h2 style="margin-bottom: 50px; font-size: 40px;" >Reach Us</h2>
                <form>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Name</label>
                            <input type="text" placeholder="" required="required">
                        </div>
                        <div class="input-group">
                            <label>Phone</label>
                            <input type="text" placeholder="" required="required">
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Email</label>
                            <input type="email" required="required">
                        </div>
                        <div class="input-group">
                            <label>Subject</label>
                            <input type="text" required="required">
                        </div>
                    </div>
                    <label>Message</label>
                    <textarea rows="5" placeholder="Your Message"></textarea>
                    <button>Send Message</button>
                </form>
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
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script type="text/javascript" src="../src/js/authenticate.js"></script>
</body>
</html>