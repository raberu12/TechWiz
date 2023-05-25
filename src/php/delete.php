<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Techwizdb";

// create connection
$connection = new mysqli($servername, $username, $password, $database);

$error_msg = "";
$success_msg = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //GET method: delete the record

    if (!isset($_GET["id"])) {
        header("location: ../public/clients.php");
        exit;
    }

    $id = $_GET["id"];

    // Delete the record from the database table
    $sql = "DELETE FROM clients WHERE id = $id";

    if ($connection->query($sql) === TRUE) {
        // Deletion successful
        $success_msg = "Client deleted successfully";
    } else {
        // Error deleting the record
        $error_msg = "Failed to delete client: " . $connection->error;
    }

    header("location: /techwiz/techwiz/public/clients.php");
    exit;
}
?>
