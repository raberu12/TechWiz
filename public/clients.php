<?php
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "techwizdb";

$connection = mysqli_connect($servername, $user, $password, $dbname);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Read all rows from the database table
$sql = "SELECT * FROM clients";
$result = $connection->query($sql);

if (!$result) {
    die("Invalid query: " . $connection->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/css/clients.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>TechWiz</title>
</head>
<body>
    <div class="main_nav">
        <div class="title">
            <h1>TechWiz</h1><img src="../src/img/techwizlg.png">
        </div>
        <div>
            <ul class="nav_links">
                <li><a  href="index.php">Home</a></li>
                <li><a  class="current" href="clients.php">Service</a></a></li>
                <li><a  href="contact.php">Contact</a></li>
                <li><a  href="about.php">About</a></li>
                <?php
                session_start();
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
    <div class="container my-5">
        <?php
        // Check if there are no clients in the list
        if ($result->num_rows === 0) {
            echo '
            <h2 class="text-center">Currently no clients in the list!</h2>
            <div class="text-center">
                <a class="btn btn-primary" href="../src/php/create.php" role="button">New Client</a>
            </div>';
        } else {
            echo '
            <h2>List of Clients</h2>
            <a class="btn btn-primary" href="../src/php/create.php" role="button">New Client</a>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>';

            // Read data of each row
            while ($row = $result->fetch_assoc()) {
                echo '
                <tr>
                    <td>' . $row["id"] . '</td>
                    <td>' . $row["name"] . '</td>
                    <td>' . $row["email"] . '</td>
                    <td>' . $row["phone"] . '</td>
                    <td>' . $row["address"] . '</td>
                    <td>' . $row["created_at"] . '</td>
                    <td>
                        <a class="btn btn-primary" href="../src/php/edit.php?id=' . $row["id"] . '">Update</a>
                        <a class="btn btn-danger" href="../src/php/delete.php?id=' . $row["id"] . '">Delete</a>
                    </td>
                </tr>';
            }

            echo '
                </tbody>
            </table>';
        }
        ?>
    </div>
    <footer>
        <div class="footer-text">
            &copy; TechWiz All Rights Reserved
        </div>
    </footer>
    <script type="text/javascript" src="../src/js/authenticate.js"></script>
</body>
</html>
