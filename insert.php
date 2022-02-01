<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['email']) &&
        isset($_POST['phone']) && isset($_POST['food']) &&
        isset($_POST['quantity']) && isset($_POST['address'])) {
        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $food = $_POST['food'];
        $quantity = $_POST['quantity'];
        $address = $_POST['address'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "login";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM form WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO form (username, email, phone, food, quantity, address) values(?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssis",$username, $email, $phone, $food, $quantity, $address);
                if ($stmt->execute()) {
                    header("location: thanku.php");
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>