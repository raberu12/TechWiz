<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "Techwizdb";

    // create connection
    $connection = new mysqli($servername, $username, $password, $database);

    $name = "";
    $email= "";
    $phone = "";
    $address = "";

    $error_msg = "";
    $success_msg = "";

    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST['address'];

        do {
            if (empty($name) || empty($email) || empty($phone) || empty($address)){
                $error_msg = "Please fill in all the fields";
                break;
            }

            // add new client 
            $sql = "INSERT INTO clients (name, email, phone, address) " .
                   "VALUES ('$name', '$email', '$phone', '$address')";
            $result = $connection->query($sql);

            if(!$result){
                $error_msg = "Invalid query: " . $connection->error;
                break;
            }

            $name = "";
            $email= "";
            $phone = "";
            $address = "";

            $success_msg = "Client added successfully";

            header("location: /techwiz/techwiz/public/clients.php");
            exit;

        }while (false);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/css/clients.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <title>TechWiz</title>
</head>
<body>
    <div class="container my-5">
        <h1>New Client</h1>
        <?php
        if( !empty($error_msg)){
            echo"
            <div class='row mb-3'>
                <div class='offset-sm-3 col-sm-6'>
                    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                        <strong style='Color: black'>$error_msg</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                </div>
            </div>
            ";
        }
        
        ?>
        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
                </div>
            </div>
            <?php
                if(!empty($success_msg)){
                    echo"
                    
                    <div class='row mb-3'>
                        <div class='offset-sm-3 col-sm-6'>
                            <div class='alert alert-success' role='alert'>
                                <strong style='Color: black'>$success_msg</strong>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                        </div>                    
                    </div>

                   
                    ";
                }
            ?>

        
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-danger" href="../public/clients.php" type="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>