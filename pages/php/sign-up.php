<?php
include "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $pnum = $_POST["pnum"];
    $password = $_POST["password"];

    $sql = "SELECT username, email, phoneNumber FROM customer WHERE username='$fname' OR email='$email' OR phoneNumber='$pnum'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        echo "Username/email/phone number already exists.";
    } else {
        $sql = "INSERT INTO customer (username, password, email, phoneNumber) VALUES ('$fname','$password','$email','$pnum')";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../Login.php");
            exit;
        } else {
            echo "There exists an account with the provided details.";
        }
    }
}

$conn->close();
?>